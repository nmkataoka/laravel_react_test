<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned()->unique()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('year')->nullable();

            $table->text('past_research')->nullable();
            $table->text('bio')->nullable();
            $table->string('major')->nullable();
            $table->double('gpa')->nullable();
            $table->string('linkedin_user')->nullable();
            $table->integer('belongs_to_lab_id')->nullable();
            $table->text('faculty_endorsements')->nullable();
            $table->text('classes')->nullable();
            $table->string('profilepic_path')->nullable();

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
        Schema::dropIfExists('students');
    }
}
