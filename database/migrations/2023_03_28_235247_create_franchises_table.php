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
        Schema::create('franchises', function (Blueprint $table) {
            $table->id();
            $table->string('information_name');
            $table->string('information_lastname');
            $table->string('information_email');
            $table->string('information_phone');
            $table->string('information_country');
            $table->string('information_city');
            $table->string('information_work')->nullable();
            $table->string('information_company')->nullable();
            $table->string('information_capital')->nullable();
            $table->string('information_comments')->nullable();
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
        Schema::dropIfExists('franchises');
    }
};
