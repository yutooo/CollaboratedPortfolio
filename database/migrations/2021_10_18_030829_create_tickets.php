<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTickets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->text('ticket_contents')->nullable();
            $table->string('title');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('open');
            $table->string('progress');
            $table->unsignedBigInteger('status');
            $table->unsignedBigInteger('priority');
            $table->time('work_hour');
            $table->date('sceduled_start_at');
            $table->date('sceduled_finsh_at');
            $table->date('start_at');
            $table->date('finsh_at');
            $table->timestamps();

            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users');
            $table
                ->foreign('category_id')
                ->references('id')
                ->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
