<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class ViewWebhookLogs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'webhook:logs {--lines=50 : Number of lines to show}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'View recent webhook logs';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $logFile = storage_path('logs/laravel.log');
        
        if (!file_exists($logFile)) {
            $this->error('Log file not found!');
            return 1;
        }

        $lines = (int) $this->option('lines');
        
        // Read the last N lines from the log file
        $content = file_get_contents($logFile);
        $allLines = explode("\n", $content);
        $recentLines = array_slice($allLines, -$lines);
        
        $this->info("Showing last {$lines} lines from webhook logs:");
        $this->line("==========================================");
        
        foreach ($recentLines as $line) {
            if (stripos($line, 'woocommerce') !== false || 
                stripos($line, 'webhook') !== false ||
                stripos($line, 'Order') !== false) {
                $this->line($line);
            }
        }
        
        return 0;
    }
}

