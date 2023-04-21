<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('sleep_log', function($table) {
            $table->dropColumn('mood');
        });
    }

    public function down()
    {
        Schema::table('sleep_log', function($table) {
            $table->string('mood', 255);
        });
    }

};
