<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('tasks', function (Blueprint $table) {

       $table->increments('id');

       # This generates two columns: `created_at` and `updated_at` to
       # keep track of changes to a row
       $table->timestamps();

       # The rest of the fields...
       $table->string('name');
       $table->string('priority');
       $table->string('type');
       $table->string('date');
       $table->string('status')->default('Incomplete');

     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tasks');
    }
}
