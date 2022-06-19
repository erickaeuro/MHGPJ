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
        Schema::create('jewelryloan', function (Blueprint $table) {
            $table->id();
            $table->string("customer_no");
            $table->string("firstname");
            $table->string("lastname");
            $table->string("middle_initial");
            $table->string("address");
            $table->string("cpnum");
            $table->date("birthdate");
            $table->string("valid_id");
            $table->string("pawn_ticket_no");
            $table->string("principal");
            $table->string("appraised_value");
            $table->string("description");
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
        Schema::dropIfExists('jewelryloan');
    }
};
