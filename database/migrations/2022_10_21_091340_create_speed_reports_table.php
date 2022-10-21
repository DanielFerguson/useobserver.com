<?php

use App\Models\Endpoint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speed_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Endpoint::class)->onDelete('cascade');

            $table->double('speed_ms', 10, 6);
            $table->integer('status_code');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('speed_reports');
    }
};
