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
        Schema::create('eatings', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['morging', 'noon', 'evennig', 'snack']);
            $table->enum('result', ['comp', '8th', '5th', '3th', 'none']);
            $table->time('time');
            $table->date('date'); // 追加：日付カラム
            $table->unsignedBigInteger('member_id');
            $table->timestamps();

            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eating');
    }
};
