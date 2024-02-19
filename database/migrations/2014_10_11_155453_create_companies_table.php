<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 128);
            $table->string('business_name', 128)->nullable();
            $table->string('cif', 50)->nullable();
            $table->text('address')->nullable();
            $table->string('zip', 15)->nullable();
            $table->unsignedBigInteger('id_town')->nullable();
            $table->unsignedBigInteger('id_province')->nullable();
            $table->unsignedBigInteger('id_state')->nullable();
            $table->unsignedBigInteger('id_country')->nullable();
            $table->string('contact', 150)->nullable();
            $table->string('email', 150)->nullable();
            $table->string('tel', 20)->nullable();
            $table->integer('catalogs')->default('5');
            $table->text('image')->nullable();
            $table->text('link')->nullable();
            $table->unsignedBigInteger('status')->default('1');
            $table->timestamps(); 
            $table->softDeletes();

            //relaciones
            $table->foreign('id_town')
                ->references('id')
                ->on('towns')
                ->onUpdate('cascade');

            $table->foreign('id_province')
                ->references('id')
                ->on('provinces')
                ->onUpdate('cascade');

            $table->foreign('id_state')
                ->references('id')
                ->on('states')
                ->onUpdate('cascade');

            $table->foreign('id_country')
                ->references('id')
                ->on('countries')
                ->onUpdate('cascade');

            $table->foreign('status')
                ->references('id')
                ->on('statuses')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
