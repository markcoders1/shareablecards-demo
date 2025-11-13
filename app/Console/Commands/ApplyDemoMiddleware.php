<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ApplyDemoMiddleware extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:apply-middleware';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Apply demo middleware to all modification routes';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Applying demo middleware to modification routes...');

        // Read the web.php file
        $webRoutesPath = base_path('routes/web.php');
        $content = File::get($webRoutesPath);

        // Define patterns for modification routes
        $patterns = [
            // Route::post patterns
            '/(Route::post\([^)]+\)->name\([^)]+\))/' => '$1->middleware(\'demo.mode\')',
            // Route::put patterns
            '/(Route::put\([^)]+\)->name\([^)]+\))/' => '$1->middleware(\'demo.mode\')',
            // Route::patch patterns
            '/(Route::patch\([^)]+\)->name\([^)]+\))/' => '$1->middleware(\'demo.mode\')',
            // Route::delete patterns
            '/(Route::delete\([^)]+\)->name\([^)]+\))/' => '$1->middleware(\'demo.mode\')',
        ];

        $modified = false;
        foreach ($patterns as $pattern => $replacement) {
            $newContent = preg_replace($pattern, $replacement, $content);
            if ($newContent !== $content) {
                $content = $newContent;
                $modified = true;
            }
        }

        if ($modified) {
            File::put($webRoutesPath, $content);
            $this->info('Demo middleware applied successfully!');
        } else {
            $this->info('No modification routes found to update.');
        }

        return 0;
    }
}
