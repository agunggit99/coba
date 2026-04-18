<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('films', function (Blueprint $table) {
            $table->string('sutradara')->nullable()->after('subtitle');
            $table->string('durasi')->nullable()->after('sutradara'); // e.g. "1 Jam 45 Menit"
        });
    }

    public function down(): void
    {
        Schema::table('films', function (Blueprint $table) {
            $table->dropColumn(['sutradara', 'durasi']);
        });
    }
};
