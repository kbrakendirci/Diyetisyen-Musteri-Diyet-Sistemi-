<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('user_id');
            $table->integer('treatment_id');
            $table->string('diyetisyen_id',20);
            $table->string('Orderdate',50);
            $table->string('FinishDate',50);
            $table->string('months',50);
            $table->integer('price');
            $table->float('total');
            $table->string('payment',50);
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
        Schema::dropIfExists('orders');
    }
}
