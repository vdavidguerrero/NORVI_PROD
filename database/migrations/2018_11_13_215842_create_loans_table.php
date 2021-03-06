<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->float('amount');
            $table->integer('term');
            $table->float('origination_fee');
            $table->float('interest');
            $table->enum('type',['amortized','interest_only','fixed_interest','open_term']);
            $table->enum('state',['active','paid','application','rejected'])->default('application');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loans');
    }
}
