<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->text('invoice_id');
            $table->text('token_id');
            $table->text('order_id');
            $table->float('price_amount');
            $table->text('price_currency');
            $table->boolean('status');
            $table->text('auth_token');
            $table->float('rate');
            $table->float('charge');
            $table->text('user_id');
            $table->text('invoice_url');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
