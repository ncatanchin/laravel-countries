<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::dropIfExists(config('countries.table_name'));

        // Creates the users table
        Schema::create(config('countries.table_name'), function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid');
            $table->string('capital', 255)->nullable();
            $table->string('citizenship', 255)->nullable();
            $table->char('country_code', 3)->nullable();
            $table->string('currency', 255)->nullable();
            $table->string('currency_code', 255)->nullable();
            $table->string('currency_sub_unit', 255)->nullable();
            $table->string('currency_symbol', 3)->nullable();
            $table->integer('currency_decimals')->nullable();
            $table->string('full_name', 255)->nullable();
            $table->char('iso_3166_2', 2)->nullable();
            $table->char('iso_3166_3', 3)->nullable();
            $table->string('name', 255)->nullable();
            $table->char('region_code', 3)->nullable();
            $table->char('sub_region_code', 3)->nullable();
            $table->boolean('eea')->default(0);
            $table->string('calling_code', 3)->nullable();
            $table->string('flag', 6)->nullable();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(config('countries.table_name'));
    }

}
