<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(UsersTableSeeder::class);
      $this->call(StateSeeder::class);
      $this->call(CitySeeder::class);
      $this->call(CategoryJobSeeder::class);
      $this->call(ContractTypeSeeder::class);
      $this->call(StateSeeder::class);
      $this->call(StatusVacancySeeder::class);
    }
}
