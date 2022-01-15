<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cat_id')->constrained('categories');
            $table->string('name');
            $table->longText('description');
            $table->string('image');
            $table->decimal('rating')->nullable();
            $table->integer('views')->nullable();
            $table->enum('levels',['beginner','intermediate','high']);
            $table->integer('hours');
            $table->enum('active',['0','1'])->default('1');
            $table->softDeletes();
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
        Schema::dropIfExists('courses');
    }
}
