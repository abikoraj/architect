<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text("logo")->nullable();
            $table->text('title')->nullable();
            $table->text('frontvideo')->nullable();
            $table->text('frontabouttitle')->nullable();
            $table->text('frontabouttext')->nullable();
            $table->text('fb')->nullable();
            $table->text('insta')->nullable();
            $table->text('twitter')->nullable();
            $table->text('phone')->nullable();
            $table->text('email')->nullable();
            $table->text('email_alt')->nullable();
            $table->text('phone_alt')->nullable();
            $table->text('addr')->nullable();
            $table->text('addr_alt')->nullable();
            $table->text('mapurl')->nullable();
            $table->text('contact_quote')->nullable();
            $table->text('service_quote')->nullable();
            $table->text('jumbotron')->nullable();
            $table->text('contact_cta_image')->nullable();
            $table->text('contact_cta_title')->nullable();
            $table->text('contact_cta_text')->nullable();
            

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
        Schema::dropIfExists('settings');
    }
}
