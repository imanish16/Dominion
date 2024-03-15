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
        $table->string('address_1')->nullable();
        $table->string('address_2')->nullable();
        $table->string('state')->nullable();
        $table->string('postcode')->nullable();
        $table->string('city')->nullable();
        $table->string('country')->nullable();
        $table->enum('status', [0,1])->nullable();
    });
}


    /**
     * Reverse the migrations.
     */
public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('address_1');
        $table->dropColumn('address_2');
        $table->dropColumn('state');
        $table->dropColumn('postcode');
        $table->dropColumn('city');
        $table->dropColumn('country');
        $table->dropColumn('status');
    });
}

};