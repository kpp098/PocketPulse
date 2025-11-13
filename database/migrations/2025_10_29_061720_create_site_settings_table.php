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
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->default('PocketPulse');
            $table->string('tagline')->nullable();
            $table->string('main_logo_path')->nullable();
            $table->string('footer_logo')->nullable();
            $table->string('favicon_path')->nullable();
            $table->text('home_message')->nullable();
            $table->text('contactus_content')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_phone')->nullable();
            $table->text('address')->nullable();
            $table->text('footer_text')->nullable();
            $table->string('footer_link_type')->nullable();
            $table->string('footer_custom_link')->nullable();
            $table->json('footer_page_link')->nullable();

            $table->boolean('maintenance_mode')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
