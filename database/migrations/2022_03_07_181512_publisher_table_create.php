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
        Schema::create('publishers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->unsignedInteger('pcProductCount')->default(0);
            $table->unsignedInteger('psProductCount')->default(0);
            $table->unsignedInteger('xboxProductCount')->default(0);
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
        Schema::dropIfExists('publisher');
    }
};
