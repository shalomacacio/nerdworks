<?php

use Illuminate\Database\Seeder;
use App\Entities\ContractType;

class ContractTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // DB::table('cities')->truncate();
      $this->createContract();
    }

    private function createContract()
    {
      ContractType::create([
        'description' => 'CLT',
      ]);
      // Exibe uma informação no console durante o processo de seed
      $this->command->info('contractType CLT criado');

      ContractType::create([
        'description' => 'RPA',
      ]);
      // Exibe uma informação no console durante o processo de seed
      $this->command->info('contractType RPA criado');

      ContractType::create([
        'description' => 'Temporário',
      ]);
      // Exibe uma informação no console durante o processo de seed
      $this->command->info('contractType Temporário criado');

      ContractType::create([
        'description' => 'Jovem Aprendiz',
      ]);
      // Exibe uma informação no console durante o processo de seed
      $this->command->info('contractType Jovem Aprendiz criado');

      ContractType::create([
        'description' => 'Estágio',
      ]);
      // Exibe uma informação no console durante o processo de seed
      $this->command->info('contractType Estágio criado');

      ContractType::create([
        'description' => 'Home Office',
      ]);
      // Exibe uma informação no console durante o processo de seed
      $this->command->info('contractType Home Office criado');
    }
}
