<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirstModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('first_models', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->timestamps();
        });

        DB::statement('ALTER TABLE `first_models` ADD `short_id` BIGINT AUTO_INCREMENT UNIQUE AFTER `id`;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('first_models');
    }
}
