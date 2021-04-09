<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClassStudentRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('student', function (Blueprint $table) {
            $table->dropColumn('class'); // delete class column
            $table->unsignedBigInteger('class_id')->nullable(); // add class_id column
            $table->foreign('class_id')->references('id')->on('class'); // add foreign key in class_id column
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student', function (Blueprint $table) {
            $table->string('class'); 
            $table->dropForeign(['class_id']); 
        });
    }
}
