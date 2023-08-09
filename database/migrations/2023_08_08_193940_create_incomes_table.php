<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('income_category_id');
            $table->foreign('income_category_id')->references('id')->on('income_categories')
                ->restrictOnDelete()
                ->cascadeOnUpdate();

            $table->string( 'title' );
            $table->string( 'description' )->nullable();
            $table->decimal( 'amount', 10, 2 );
            $table->date( 'income_date' );

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incomes');
    }
};
