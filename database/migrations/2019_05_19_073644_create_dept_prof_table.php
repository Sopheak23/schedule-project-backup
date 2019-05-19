<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeptProfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dept_prof', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('professor_id')->unsigned();
            $table->bigInteger('department_id')->unsigned();
            $table->timestamps();

            $table->foreign('professor_id')->references('id')->on('professors')->onDelete('cascade');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dept_prof');
    }
}
