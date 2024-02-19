<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_country');
            $table->string('name', 128);
            $table->string('code', 3)->nullable();
            $table->unsignedBigInteger('status')->default('1');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_country')
                ->references('id')
                ->on('countries')
                ->onDelete('cascade');

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
        Schema::dropIfExists('states');
    }
}
