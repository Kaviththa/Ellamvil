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
            $table->string('name', 255);
            $table->decimal('price', 17, 2)->nullable();
            $table->text('description');
            $table->boolean('new')->default(false);
            $table->integer('user_id')->nullable();
            $table->text('images')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('sub_category_id')->nullable();
            $table->boolean('approved')->default(true);
            $table->decimal('long', 11, 7)->nullable();
            $table->decimal('lat', 11, 7)->nullable();
            $table->bigInteger('views')->default(0);
            $table->string('contacts')->nullable();
            $table->dateTime('expire_at')->nullable();
            $table->integer('product_type_id')->default(1);
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
