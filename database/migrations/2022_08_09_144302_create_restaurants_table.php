<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('address');
            $table->integer('zipCode');
            $table->string('town');
            $table->string('country');
            $table->text('description');
            $table->integer('review');
        });
    }

    public function down()
    {
        Schema::dropIfExists('restaurants');
    }
};
