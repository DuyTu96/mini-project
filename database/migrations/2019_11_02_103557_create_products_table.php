<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('category_id')->nullable()->unsigned();
            $table->bigInteger('size_id')->nullable()->unsigned();
            $table->string('name', 100)->nullable();
            $table->double('price', 5, 2)->nullable()->default(0);
            $table->boolean('is_highlight')->nullable()->default(false);
            $table->integer('quantity')->unsigned()->nullable()->default(0);
            $table->string('description', 100)->nullable();
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
        Schema::dropIfExists('products');
    }
}
