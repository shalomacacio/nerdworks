<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // DB::table('users')->truncate();
      $this->createUser();
    }

    private function createUser()
    {
      User::create([
        'name' => 'Administrador',
        'email' => 'admin@nerdworks.com.br',
        'password' => '@N3rdW0rks123',
      ]);
      // Exibe uma informação no console durante o processo de seed
      $this->command->info('usuario Administrador criado');
    }
}
