<?php namespace Fractalstudio\Exchanger\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFractalstudioExchangerOrders extends Migration
{
    public function up()
    {
        Schema::create('fractalstudio_exchanger_orders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user');
            $table->string('currency_buy')->nullable();
            $table->string('currency_sell')->nullable();
            $table->decimal('price', 10, 0);
            $table->decimal('order_sum', 10, 0);
            $table->decimal('order_tax', 10, 0);
            $table->integer('status');
            $table->text('user_comment')->nullable();
            $table->text('manager_comment')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('fractalstudio_exchanger_orders');
    }
}
