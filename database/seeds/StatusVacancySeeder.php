<?php

use Illuminate\Database\Seeder;
use App\Entities\StatusVacancy;

class StatusVacancySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // DB::table('cities')->truncate();
      $this->createStatus();
    }

    private function createStatus()
    {
      StatusVacancy::create([
        'description' => 'Aguardando',
      ]);
      // Exibe uma informação no console durante o processo de seed
      $this->command->info('status Aguardando criado');
    }
}
