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
        Schema::create('redeem', function (Blueprint $table) {
            $table->id();
            $table->string("customer_no");
            $table->string("firstname");
            $table->string("lastname");
            $table->string("middle_initial");
            $table->string("address");
            $table->string("pawn_ticket_no");
            $table->string("date_loan_granted");
            $table->string("maturity_date");
            $table->string("expiry_date");
            $table->string("description");
            $table->string("appraised_value");
            $table->string("principal");
            $table->string("interest");
            $table->string("penalty");
            $table->string("redemption_amount");
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
        Schema::dropIfExists('redeem');
    }
};
