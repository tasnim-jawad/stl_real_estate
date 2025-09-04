<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     php artisan migrate --path='/app/Modules/Management/BannerManagement/Banner/Database/create_banners_table.php'
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('short_title', 100)->nullable();
            $table->text('short_description')->nullable();
            $table->string('video_url', 200)->nullable();
            $table->string('video_file', 200)->nullable();
            $table->string('video_type', 50)->nullable();
            $table->boolean('display_status')->default(1)->after('status'); ; 
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
        Schema::dropIfExists('banners');
    }
};