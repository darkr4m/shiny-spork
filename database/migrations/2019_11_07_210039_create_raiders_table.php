<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raiders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('raider_name');
            $table->string('raider_class');
            $table->string('raider_specialization');
            $table->string('profession1')->nullable();
            $table->integer('profession1_level')->nullable();
            $table->string('profession1_specialization')->nullable();
            $table->string('profession2')->nullable();
            $table->integer('profession2_level')->nullable();
            $table->string('profession2_specialization')->nullable();
            $table->integer('firstAid_level')->nullable();
            $table->integer('cooking_level')->nullable();
            $table->integer('fishing_level')->nullable();
            $table->integer('rank_id');
            $table->timestamp('date_of_rank');
            $table->timestamp('date_joined')->nullable();
            $table->boolean('in_guild');
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
        Schema::dropIfExists('raiders');
    }
}
