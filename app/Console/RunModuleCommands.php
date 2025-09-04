<?php

namespace App\Console;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class RunModuleCommands extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:modules';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $filePath = base_path('command.txt');

        if (!file_exists($filePath)) {
            $this->error("command.txt file not found at project root.");
            return 1;
        }

        $commands = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($commands as $cmd) {
            $this->info("Executing: $cmd");

            // This executes the artisan command as a shell command
            $process = Process::fromShellCommandline("$cmd", base_path());
            $process->run();

            if ($process->isSuccessful()) {
                $this->line($process->getOutput());
            } else {
                $this->error("Error running: $cmd");
                $this->error($process->getErrorOutput());
            }
        }

        $this->info("All commands finished.");
        return 0;
    }
}
