<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitySectorProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_sector_project', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('rank');
            $table->integer('programs_category_id')->unsigned();
            $table->foreign('programs_category_id')->references('id')->on('programs_category_id');
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
        Schema::dropIfExists('activity_sector_project');
    }
}
