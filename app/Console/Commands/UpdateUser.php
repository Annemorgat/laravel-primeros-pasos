<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class UpdateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

     /* -- -> Opción que devuelve un valor boleano
     * = -> Opción que admite introducir un valor, o NULL.
     */
    protected $signature = 'user:update
        {userId}
        {--name= : Nuevo nombre del usuario}
        {--email= : Nuevo email del usuario}
        {--password= : Nueva contraseña del usuario}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Actualizar un usuario';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if (! $this->areAnyOption()) {
            $this->error('Introduzca al menos un cambio');

            // 1 -> Error al ejecutar desde terminal | 0 -> Sin errores
            return 1;
        }

        if ($user = User::find($this->argument('userId'))) {
            $this->updateUser($user);

            $this->info("Usuario {$this->argument('userId')} actualizado");

            return 0;
        } else {
            $this->error("El usuario con id {$this->argument('userId')} no existe");

            return 1;
        }
    }

    protected function areAnyOption(): bool
    {
        // Devuelve un valor bool resultado de la condición
        return (
            ($this->option('name') !== null) ||
            ($this->option('email') !== null) ||
            ($this->option('password') !== null)
        );
    }

    protected function updateUser(User $user, bool $persist = true)
    {
        if ($this->option('name') !== null) {
            $user->name = $this->option('name');
            $this->info("Actualizando name = {$this->option('name')}");
        }

        if ($this->option('email') !== null) {
            $user->email = $this->option('email');
            $this->info("Actualizando email = {$this->option('email')}");
        }

        if ($this->option('password') !== null) {
            $user->password = $this->option('password');
            $this->info("Actualizando password = {$this->option('password')}");
        }

        if ($persist) {
            $user->save();
        }
    }
}
