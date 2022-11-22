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
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string('candidate_name')->require();
            $table->string('candidate_email')->unique()->require();
            $table->string('desired_job_title')->require();
            $table->unsignedBigInteger('education_level_id')->require();
            $table->foreign('education_level_id')->references('id')->on('education_levels');
            $table->longText('observations')->nullable();
            $table->dateTime('available_until')->require();
            $table->string('sender_ip')->require();
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
        Schema::dropIfExists('resumes');
    }
};
