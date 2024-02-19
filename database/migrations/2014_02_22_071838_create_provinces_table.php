<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provinces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_state');
            $table->string('name', 128);
            $table->string('code', 15);
            $table->unsignedBigInteger('status')->default('1');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_state')
                ->references('id')
                ->on('states')
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
        Schema::dropIfExists('provinces');
    }
}
