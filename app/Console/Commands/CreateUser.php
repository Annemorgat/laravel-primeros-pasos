<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create
        {name : Nombre del usuario}
        {email : Email del usuario}
        {password : Contraseña del usuario}
    ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crear un usuario';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Código que se ejecuta desde terminal
        $user = new User();

        $user->name = $this->argument('name');
        $user->email = $this->argument('email');
        $user->password = $this->argument('password');

        $user->save();

        $this->info("Usuario creado con id = {$user->id}");

        /* Métodos de la clase Command
        $this->info("Name: {$this->argument('name')}");
        $this->line("Name: {$this->argument('name')}");
        $this->warn("Name: {$this->argument('name')}");
        $this->error("Name: {$this->argument('name')}");
        */
    }
}
