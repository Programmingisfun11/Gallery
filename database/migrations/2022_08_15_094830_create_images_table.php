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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('images');
        Schema::create('images', function (Blueprint $table) {

            $table->id();
            $table->text('image');
            $table->timestamps();

        });
        Schema::enableForeignKeyConstraints();

    }

};