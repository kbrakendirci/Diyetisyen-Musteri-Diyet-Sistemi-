<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatments', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title',150);
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('image',75)->nullable();
            $table->integer('category_id')->nullable();
            $table->text('detail')->nullable();
            $table->integer('user_id')->nullable();
            $table->float('price')->nullable();
            $table->string('status',5)->nullable()->default('False');
            $table->string('illness')->nullable();
            $table->string('type_of_process')->nullable();//online - yüz yüze
            $table->string('age_range')->nullable();
            $table->string('target')->nullable();//kilo alma - kilo verme
            $table->string('type_of_diet')->nullable();//vegan - vejeteryan
            $table->string('athlete')->nullable();// karbonhidrat - yağ - protein
            $table->timestamps(); //create create_at , updated_at fields
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treatments');
    }
}
