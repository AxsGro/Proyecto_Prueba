<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

        });

        Schema::table('students', function (Blueprint $table) {
            $table->unsignedBigInteger('program_id');
            $table->foreign('program_id')
                ->references('id')->on('programs')
                ->onDelete('cascade');

            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->dropForeign('student_program_id_foreign');
            $table->dropColumn('program_id');
        });
    }
};
