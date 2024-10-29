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
    Schema::create('posts', function (Blueprint $table) {
      $table->id();
      $table->foreignId('post_author_id')->constrained('users')->onDelete('cascade');
      $table->string("post_title");
      $table->string("post_url")->unique();
      $table->string("post_description");
      $table->text("post_content");
      $table->enum("post_status", ["publish", "pending", "refused"])->default("pending");
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('posts');
  }
};
