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
            $table->id();
            $table->text('name');
            $table->string('brand');
            $table->string('drive');
            $table->string('processor');
            $table->string('color')->nullable();
            $table->string('storage');
            $table->integer('ram');
            $table->integer('quantity')->default(1);
            $table->decimal('price');
            $table->string('weight')->nullable();
            $table->decimal('screen');
            $table->text('description');
            $table->json('images')->nullable();
            $table->string('y_o_m')->nullable();
            $table->json('additionals')->nullable();
            $table->string('created_by');
            $table->string('updated_by')->nullable();
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
