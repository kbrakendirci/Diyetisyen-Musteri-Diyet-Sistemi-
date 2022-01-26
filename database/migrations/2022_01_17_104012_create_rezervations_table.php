<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRezervationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rezervations', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('user_id');
            $table->integer('treatment_id');
            $table->string('email',50);
            $table->string('name',50);
            $table->string('phone',50);
            $table->string('startdate',50);
            $table->string('enddate',50);
            $table->string('months',50);
            $table->integer('price');
            $table->string('IP',30);
            $table->string('note',150)->nullable();
            $table->string('status',30)->default('New');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rezervations');
    }
}
