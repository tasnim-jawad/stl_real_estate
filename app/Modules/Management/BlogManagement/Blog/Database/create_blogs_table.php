<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     php artisan migrate --path='/app/Modules/Management/BlogManagement/Blog/Database/create_blogs_table.php'
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('blog_category_id')->unsigned()->nullable();
            $table->string('title', 100)->nullable();
            $table->longText('description')->nullable();
            $table->text('tags')->nullable();
            $table->datetime('publish_date')->nullable();
            $table->string('writer', 100)->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords', 100)->nullable();
            $table->string('thumbnail_image', 100)->nullable();
            $table->string('image', 100)->nullable();
            $table->string('blog_type', 100)->nullable();
            $table->string('url', 100)->nullable();
            $table->string('show_top', 100)->nullable();

            $table->bigInteger('creator')->unsigned()->nullable();
            $table->string('slug', 50)->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
