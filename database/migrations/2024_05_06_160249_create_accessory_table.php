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
        Schema::create('accessories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description', 1000);
            $table->float('price');
            $table->decimal('discount')->default(0.0);
            $table->string('image_url')->nullable();
            $table->string('dimensions')->nullable();
            $table->string('weight')->nullable();
            $table->string('color')->nullable();
            $table->string('type')->nullable();
            $table->integer('amount')->nullable(0);

            $table->foreignId('category_id')->nullable()->index()->constrained('categories')->onDelete('cascade');;
            $table->foreignId('manufacturer_id')->nullable()->index()->constrained('manufactures')->onDelete('cascade');;

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accessories');
    }
};
