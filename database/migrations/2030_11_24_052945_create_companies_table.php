<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateCompaniesTable.
 */
class CreateCompaniesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('companies', function(Blueprint $table) {
        $table->increments('id');
        $table->string('company_name')->unique();
        $table->string('register_number')->unique(); //CNPJ
        $table->string('logo')->nullable(); //logo da empresa
        $table->string('contact')->nullable();
        $table->string('email')->unique();
        $table->string('site')->nullable();
        $table->string('facebook')->nullable();
        $table->string('twitter')->nullable();
        $table->string('linkedin')->nullable();
        $table->string('instagram')->nullable();
        $table->tinyInteger('flg_active')->default(0);

        $table->unsignedInteger('user_id')->unique();
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
		Schema::drop('companies');
	}
}
