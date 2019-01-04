<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoricalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historical', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        DB::table('historical')->insert(
            Array(
                ["name"=>"Maximilien Robespierre, French Republic"],
                ["name"=>"Napoleon Bonaparte, French Republic"],
                ["name"=>"Louis XVI, King of France"],
                ["name"=>"George III, King of Great Britain"],
                ["name"=>"Francis II, Emperor of the Holy Roman Empire"],
                ["name"=>"Frederick William II, King of Prussia"],
                ["name"=>"Catherine II, Tsar of the Russian Empire"],
                ["name"=>"George Washington, President of the United States of America"],
                ["name"=>"Charles IV, King of Spain"],
                ["name"=>"Maria I, Queen of Portugal"],
                ["name"=>"Christian VII, King of Denmark-Norway"],
                ["name"=>"Gustav IV Adolph, King of Sweden"],
                ["name"=>"Selim III, Sultan of the Ottoman Empire"],
                ["name"=>"Pius VI, Pope, Leader of the Papal State"],
                ["name"=>"Ferdinand IV, King of Naples-Sicily"],
                ["name"=>"William V, King of the United Netherlands"],
                ["name"=>"Ludovico Manin, Doge of the Republic of Venice"],
                ["name"=>"Stanislav Poniatovski, King of the Polish-Lithuanian Commonwealth"]
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historical');
    }
}
