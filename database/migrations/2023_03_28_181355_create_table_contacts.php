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
        Schema::create('table_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('contact_name');
            $table->string('contact_lastname');
            $table->string('contact_email')->unique();
            $table->integer('contact_phone');
            $table->string('contact_subject');
            $table->string('contact_comments');
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
        Schema::dropIfExists('table_contacts');
    }
};
