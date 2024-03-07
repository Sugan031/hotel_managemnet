<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class addUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this command shows some message';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        // $this->info('Hi I am from info()');
        // $this->warn("Hi I am from warn()");
        // $this->error("Hi I am from error()");
        // $this->line("Hi I am from line()");
        $user = User::factory()->create();
        $this->info('congrats new {$user->name} is dumped ');
    }
}
