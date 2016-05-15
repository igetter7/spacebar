<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePostTerm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('termables', function (Blueprint $table) {
            // $table->integer('post_id');
            // $table->integer('term_id');    
            $table->integer('term_id');
            $table->integer('termable_id');
            $table->string('termable_type');        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('termables');
    }
}
