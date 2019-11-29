<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateVacanciesTable.
 */
class CreateVacanciesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vacancies', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title'); //titulo da vaga
            $table->longText('description'); //descricao da vaga
            $table->text('benefities')->nullable(); //beneficios
            $table->integer('contract_type_id')->nullable(); //tipo de contratacao
            $table->decimal('salary')->nullable(); //salario

            //oneToMany
            $table->integer('category_job_id')->unsigned()->default(1);
            $table->foreign('category_job_id')->references('id')
                  ->on('category_jobs'); // categoria da vaga

            $table->integer('user_id')->unsigned()->default(1);
            $table->foreign('user_id')->references('id')
                  ->on('users'); // empresa

            $table->integer('city_id')->unsigned()->default(1);
            $table->foreign('city_id')->references('id')
                  ->on('cities'); // //cidade de atuação

            $table->date('dt_publish'); //data publicacao
            $table->date('dt_expire')->nullable(); //data expirar

            $table->string('contact')->nullable(); //telefone de contato
            $table->string('email'); //email de contato
            $table->integer('status_vacancies_id')->default(1); //status da vaga -- 1-ativa 0-canceclada etc
            $table->tinyInteger('flg_active')->default(0);

            $table->timestamps();
            $table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vacancies');
	}
}
