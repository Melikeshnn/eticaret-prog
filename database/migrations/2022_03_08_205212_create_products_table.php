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
            $table->unsignedBigInteger('publisherId');
            $table->unsignedBigInteger('kindId');
            $table->string('name');
            $table->float('price');
            $table->unsignedInteger('stock');
            $table->integer('discountRate')->default(0);
            $table->boolean('isGiyim');
            $table->boolean('isKamp');
            $table->boolean('isTrek');
            $table->string('descriptionHead');
            $table->longText('description');
            $table->longText('systemRequirementsText');
            $table->longText('coverImage');
            $table->longText('imagesPaths');
            $table->foreign('publisherId')->references('id')->on('publishers')->onDelete('cascade');
            $table->foreign('kindId')->references('id')->on('kinds')->onDelete('cascade');
            $table->boolean('isDeleted')->default(false)->comment('true(1):deleted, false(0): not deleted');
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
