<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Azienda
// Stazione di partenza
// Stazione di arrivo
// Orario di partenza
// Orario di arrivo
// Codice Treno
// Numero Carrozze
// In orario
// Cancellato

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string(`company`);
            $table->string(`train_code`);
            $table->string(`wagon_number`);
            $table->string(`departure_station`);
            $table->string(`arrival_station`);
            $table->dateTime(`departure_time`);
            $table->dateTime(`arrival_time`);
            $table->boolean(`suppressed`)->default(0);
            $table->boolean(`on_time`)->default(0);
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
        Schema::dropIfExists('trains', function (Blueprint $table) {
            $table->id();
            $table->dropColumn(`company`);
            $table->dropColumn(`train_code`);
            $table->dropColumn(`wagon_number`);
            $table->dropColumn(`departure_station`);
            $table->dropColumn(`arrival_station`);
            $table->dropColumn(`departure_time`);
            $table->dropColumn(`arrival_time`);
            $table->dropColumn(`suppressed`)->default(0);
            $table->dropColumn(`on_time`)->default(0);
            $table->timestamps();
        });
    }
};
