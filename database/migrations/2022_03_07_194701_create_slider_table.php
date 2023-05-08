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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('sliderMainText');
            $table->string('sliderSubText');
            $table->string('sliderButtonLink');
            $table->string('sliderButtonText');
            $table->string('photoPath');
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
        Schema::dropIfExists('sliders');
    }
};
