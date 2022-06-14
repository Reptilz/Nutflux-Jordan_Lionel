<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('users', function ($table) {
            $table->foreignId('profil_id')
                ->constrained()
                ->onUpdate('restrict')
                ->onDelete('restrict');
        });
    }


    public function down()
    {
        //
    }
};
