<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHerocarouselsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('herocarousels', function (Blueprint $table) {
            $table->id();
            $table->text('image');
            $table->text('description');
            $table->text('title');
            $table->text('btn_title');
            $table->text('btn_link');
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
        Schema::dropIfExists('herocarousels');
    }
}
