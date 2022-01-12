<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoftwareDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('software_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('softwares_id');
            $table->string('imgurl');
            $table->string('vidurl');
            $table->longText('description');
            $table->string('shortdesc');
            $table->string('developer');
            $table->string('releasedate');
            $table->integer('price');
            $table->string('versionnumber');
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
        Schema::dropIfExists('software_details');
    }
}
