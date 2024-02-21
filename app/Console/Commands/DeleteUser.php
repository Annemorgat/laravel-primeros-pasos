<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class DeleteUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:delete {userId : Id del usuario}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Eliminar un usuario';

    /**
     * Execute the console command.
     */
    public function handle()
    {
         if ($user = User::find($this->argument('userId'))) {
            $user->delete();
            $this->info('Usuario borrado correctamente');
         } else {
            $this->error("El usuario con id {$this->argument('userId')} no existe");
         }
    }
}
