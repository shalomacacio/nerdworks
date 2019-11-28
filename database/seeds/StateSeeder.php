<?php

use Illuminate\Database\Seeder;
use App\Entities\State;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // DB::table('cities')->truncate();
      $this->createState();
    }

    private function createState()
    {
      State::create([
        'title' => 'Ceara',
        'letter' => 'CE',
      ]);
      // Exibe uma informação no console durante o processo de seed
      $this->command->info('state Ceara criado');
    }
}
