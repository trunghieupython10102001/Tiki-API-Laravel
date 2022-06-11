<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('name');
            $table->string('brand')->nullable();
            $table->string('thumbnail_url')->nullable();
            $table->integer('quantity')->nullable()->default(0);
            $table->integer('sold')->nullable()->default(0);
            $table->text('description')->nullable();
            $table->text('specifications')->nullable();
            $table->float('sale_percent')->nullable()->default(0);
            $table->bigInteger('price')->nullable()->default(0);
            $table->foreignId('category_id')->constrained('categories')->onUpdate('cascade')->onDelete('cascade');

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
};
