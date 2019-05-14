<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactpersoonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactpersoons', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('voornaam');
            $table->string('familienaam');
            $table->string('relatie');
            $table->string('straat');
            $table->string('huisnummer');
            $table->string('bus')->nullable();
            $table->string('postcode');
            $table->string('gemeente');
            $table->string('telefoon')->nullable();
            $table->string('gsm')->nullable();
            $table->string('email')->nullable();
            $table->enum('rubriek', ['hotel', 'dagverblijf', 'therapie']);
            $table->string('vraag');     
 /*
            $table->boolean('factuurIsAnders')->default(0);
            $table->string('fvoornaam')->nullable();
            $table->string('ffamilienaam')->nullable();
            $table->string('fstraat')->nullable();
            $table->string('fhuisnummer')->nullable();
            $table->string('fbus')->nullable();
            $table->string('fpostcode')->nullable();
            $table->string('fgemeente')->nullable();
            $table->string('ftelefoon')->nullable();
            $table->string('fgsm')->nullable();
            $table->string('femail')->nullable();
  */
            $table->boolean('openstaand')->default(1);   
            
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
        Schema::dropIfExists('contactpersoons');
    }
}
