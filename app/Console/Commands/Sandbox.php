<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PhpDeal\Annotation as Contract;

class Sandbox extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sandbox';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Try out things';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     * @Contract\Verify("100 > 200")
     */
    public function handle()
    {
        
		echo "lalalala", PHP_EOL;

    }
}
