<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User as Users;
class user extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:make';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new user';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->ask('What is the user name?');
        $email = $this->ask('What is the user email?');
        $password = $this->secret('What is the user password?');
        $user = Users::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
        ]);
        $this->info("User {$user->name} created successfully.");
        return 0;
    }
}
