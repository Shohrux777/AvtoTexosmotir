<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->date('sana');
            $table->string('manzil');
            $table->string('d_raqami');
            $table->string('dv_raqami');
            $table->string('kuzov');
            $table->string('sh_raqami');
            $table->string('avto_turi');
            $table->string('rusumi');
            $table->string('model');
            $table->string('ishlab_sana');
            $table->string('yoqilgi_turi');
            $table->string('rangi');
            $table->string('texnik_pass');
            $table->string('t_number');
            $table->date('tex_otgan_sana');
            $table->string('gaz_raqam')->nullable();
            $table->string('gaz_abyom')->nullable();
            $table->biginteger('gaz_vazn')->nullable();
            $table->date('gaz_ishlab_chiq')->nullable();
            $table->date('gaz_oxir_sana')->nullable();
            $table->date('oxirgi_tek')->nullable();
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
        //
    }
}
