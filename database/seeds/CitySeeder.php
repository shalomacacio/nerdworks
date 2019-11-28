<?php

use Illuminate\Database\Seeder;
use App\Entities\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // DB::table('cities')->truncate();
      $this->createCity();
    }

    private function createCity()
    {
      City::create([
        'title' => 'Fortaleza',
        'state_id' => 1,
        'zip_code' => '61000000',
        'lat' => '3°-43-6-Sul',
        'long' => '38°-32-36-Oeste',
      ]);
      // Exibe uma informação no console durante o processo de seed
      $this->command->info('categoria Regime CLT criado');
    }
}
