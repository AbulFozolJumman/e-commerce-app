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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            // $table->foreignId('seller_id')->constrained('users')->onDelete('cascade');

            // Foreign Key
            $table->unsignedBigInteger('seller_id');
            $table->foreign('seller_id')->references('id')->on('users')
            ->restrictOnDelete()->cascadeOnUpdate();
            $table->string('title');
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->string('image_url');
            $table->integer('stock');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');

            // $table->foreignId('category_id')->constrained('categories')->onDelete('set null')->nullable();
            
            // Foreign Key
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')
            ->restrictOnDelete()->cascadeOnUpdate();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
