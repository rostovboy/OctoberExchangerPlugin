<?php namespace Fractalstudio\Exchanger\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFractalstudioExchangerCurrencies extends Migration
{
    public function up()
    {
        Schema::create('fractalstudio_exchanger_currencies', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('code')->nullable();
            $table->decimal('avg_price_btc', 10, 0);
            $table->decimal('price_btc', 10, 0);
            $table->decimal('reserve', 10, 0);
            $table->decimal('min_sum', 10, 0);
            $table->decimal('max_sum', 10, 0);
            $table->string('wallet')->nullable();
            $table->boolean('manual_rate')->default(0);
            $table->integer('rank');
            $table->boolean('active')->default(1);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('fractalstudio_exchanger_currencies');
    }
}
