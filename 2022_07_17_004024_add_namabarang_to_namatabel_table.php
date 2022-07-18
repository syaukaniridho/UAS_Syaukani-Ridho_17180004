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
        Schema::table('namatabel', function (Blueprint $table) {
            //
            $table->integer('namabarang')->after('id');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('namatabel', function (Blueprint $table) {
            //
            $table->dropColumn('namabarang');
        });
    }
};
