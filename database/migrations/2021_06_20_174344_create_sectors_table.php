<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectors', function (Blueprint $table) {
            $table->id();
            $table->ipAddress('ipmonitoring')->default(0);
            $table->ipAddress('ippublic')->default(0);
            $table->integer('pci')->default(0);
            $table->double('frecuency')->default(0);
            $table->integer('earfcn')->default(0);
            $table->integer('bandwidth')->default(0);
            $table->string('ssid')->default(0);
            $table->string('password')->default(0);
            $table->string('position')->default(0);
            $table->string('direction')->default(0);
            $table->string('comments')->default(0);
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
        Schema::dropIfExists('sectors');
    }
}
