<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_company')->nullable();
            $table->unsignedBigInteger('id_user');
            $table->string('module', 128);
            $table->string('action', 255)->nullable();
            $table->timestamps(); 
            $table->softDeletes();
            
            $table->foreign('id_company')
                ->references('id')
                ->on('companies')
                ->onUpdate('cascade');
                
            $table->foreign('id_user')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs');
    }
}
