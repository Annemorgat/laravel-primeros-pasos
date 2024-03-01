<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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
        try {
            $user = User::findOrFail($this->argument('userId'));

            $user->delete();
            $this->info('Usuario borrado correctamente');
        } catch (ModelNotFoundException $e) {
            $this->error("El usuario con id {$this->argument('userId')} no existe");
        }
    }
}
