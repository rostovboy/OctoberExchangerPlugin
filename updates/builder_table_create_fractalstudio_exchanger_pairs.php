<?php namespace Fractalstudio\Exchanger\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFractalstudioExchangerPairs extends Migration
{
    public function up()
    {
        Schema::create('fractalstudio_exchanger_pairs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('sell');
            $table->integer('buy');
            $table->decimal('tax', 10, 0);
            $table->boolean('reverse')->default(0);
            $table->integer('rank');
            $table->boolean('active')->default(1);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('fractalstudio_exchanger_pairs');
    }
}
