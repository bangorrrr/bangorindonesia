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
        Schema::create('magz', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('image');
            $table->text('link');
            $table->string('created_by')->default(0);
            $table->string('updated_by')->default(0);
            $table->timestamps();
            $table->softDeletes();
            $table->string('deleted_by')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('magz');
    }
};