<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_company')->nullable();
            $table->string('name');
            $table->string('first_name', 128)->nullable();
            $table->string('last_name', 128)->nullable();
            $table->string('dni', 15)->nullable();
            $table->string('email')->unique();
            $table->string('tel', 20)->nullable();
            $table->text('image')->nullable();
            $table->string('company', 128)->default('freefee');
            $table->unsignedBigInteger('status')->default('0');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('dob');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            //relaciones
            $table->foreign('id_company')
                ->references('id')
                ->on('companies')
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
        Schema::dropIfExists('users');
    }
}
