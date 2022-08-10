<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHamstersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hamsters', function (Blueprint $table) {
            $table->id();
            $table->string('hamster_id',20)->nullable()->default('');
            $table->string('resource_id',18)->nullable()->default('');
            $table->string('name',10)->nullable()->default('');
            $table->string('description',20)->nullable()->default('');
            $table->string('effect_type',10)->nullable()->default('');
            $table->enum('sex',['male','female','neutral'])->nullable()->default('neutral');
            $table->dateTime('birthday');
            $table->json('family')->nullable();
            $table->json('skill')->nullable();
            $table->integer('love')->nullable()->default(0);
            $table->string('owner_id');
            $table->boolean('omiai_photo')->nullable()->default(false);
            $table->string('cage_id');
            $table->string('instance_id');
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
        Schema::dropIfExists('hamsters');
    }
}
