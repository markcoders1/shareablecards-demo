<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ApplyDemoModeToLivewire extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:apply-livewire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Apply demo mode trait to all Livewire components';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Applying demo mode trait to Livewire components...');

        $livewirePath = app_path('Livewire');
        $files = File::allFiles($livewirePath);

        $modifiedCount = 0;

        foreach ($files as $file) {
            if ($file->getExtension() === 'php') {
                $content = File::get($file->getPathname());
                $className = $file->getBasename('.php');
                
                // Skip if already has the trait
                if (str_contains($content, 'use App\Traits\DemoModeTrait;') || 
                    str_contains($content, 'use DemoModeTrait;')) {
                    continue;
                }

                // Skip the DemoModeHandler itself
                if ($className === 'DemoModeHandler') {
                    continue;
                }

                // Add the trait import
                $content = $this->addTraitImport($content);
                
                // Add the trait usage
                $content = $this->addTraitUsage($content, $className);
                
                // Add demo mode checks to modification methods
                $content = $this->addDemoModeChecks($content);

                File::put($file->getPathname(), $content);
                $modifiedCount++;
                
                $this->line("Modified: {$file->getRelativePathname()}");
            }
        }

        $this->info("Demo mode trait applied to {$modifiedCount} Livewire components!");
        return 0;
    }

    /**
     * Add trait import to the file
     */
    private function addTraitImport(string $content): string
    {
        // Find the namespace and add the trait import after it
        if (preg_match('/namespace\s+([^;]+);/', $content, $matches)) {
            $namespace = $matches[0];
            $afterNamespace = strpos($content, $namespace) + strlen($namespace);
            
            // Find the next use statement or class declaration
            $nextUse = strpos($content, 'use ', $afterNamespace);
            $nextClass = strpos($content, 'class ', $afterNamespace);
            
            $insertPos = min(
                $nextUse !== false ? $nextUse : PHP_INT_MAX,
                $nextClass !== false ? $nextClass : PHP_INT_MAX
            );
            
            if ($insertPos !== PHP_INT_MAX) {
                $content = substr_replace($content, "\nuse App\Traits\DemoModeTrait;", $insertPos, 0);
            }
        }
        
        return $content;
    }

    /**
     * Add trait usage to the class
     */
    private function addTraitUsage(string $content, string $className): string
    {
        // Find the class declaration and add the trait
        if (preg_match('/class\s+' . preg_quote($className) . '\s+extends\s+(\w+)/', $content, $matches)) {
            $classDeclaration = $matches[0];
            $replacement = $classDeclaration . "\n{\n    use DemoModeTrait;";
            $content = str_replace($classDeclaration, $replacement, $content);
        }
        
        return $content;
    }

    /**
     * Add demo mode checks to modification methods
     */
    private function addDemoModeChecks(string $content): string
    {
        $modificationMethods = [
            'store', 'update', 'destroy', 'delete', 'create', 'save',
            'bulkDelete', 'deleteVcard', 'bulk-delete-vcard',
            'toggleStatus', 'toggleActive', 'toggleVerified', 'toggleSubscription',
            'approve', 'reject', 'activate', 'deactivate', 'verify', 'unverify'
        ];

        foreach ($modificationMethods as $method) {
            $pattern = '/(public\s+function\s+' . preg_quote($method) . '\s*\([^)]*\)\s*\{)/';
            $replacement = '$1' . "\n        if (\$this->checkDemoMode('{$method}')) {\n            return;\n        }\n";
            $content = preg_replace($pattern, $replacement, $content);
        }

        return $content;
    }
}
