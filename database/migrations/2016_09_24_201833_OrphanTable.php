<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrphanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orphans', function(Blueprint $table){

            $table->increments('id');
            $table->string('first_name', 200);
            $table->string('father_name', 200);
            $table->string('grandfather_name', 200);
            $table->string('family_name', 200);
            $table->text('researcher_notes');
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
        Schema::drop('orphans');
    }
}
