<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('drones', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->float('price');
            $table->decimal('discount')->default(0.0);
            $table->string('image_url')->nullable();
            $table->integer('amount')->nullable(0);

            $table->foreignId('group_id')->nullable()->index()->constrained('groups');
            $table->foreignId('manufacturer_id')->nullable()->index()->constrained('manufactures');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drones');
    }
};
