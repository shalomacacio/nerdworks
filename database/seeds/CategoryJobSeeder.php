<?php

use Illuminate\Database\Seeder;
use App\Entities\CategoryJob;

class CategoryJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // DB::table('users')->truncate();
      $this->createCategory();
    }

    private function createCategory()
    {
      CategoryJob::create([
        'description' => 'Desenvolvimento',
      ]);
      // Exibe uma informação no console durante o processo de seed
      $this->command->info('categoria Desenvolvimento criado');

      CategoryJob::create([
        'description' => 'Redes',
      ]);
      // Exibe uma informação no console durante o processo de seed
      $this->command->info('categoria Redes criado');

      CategoryJob::create([
        'description' => 'Suporte',
      ]);
      // Exibe uma informação no console durante o processo de seed
      $this->command->info('categoria Suporte criado');

      CategoryJob::create([
        'description' => 'Help Desk',
      ]);
      // Exibe uma informação no console durante o processo de seed
      $this->command->info('categoria Help Desk criado');
    }


}
