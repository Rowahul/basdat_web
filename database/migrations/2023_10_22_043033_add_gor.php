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
        Schema::create("gors", function (Blueprint $table) {
            $table->bigIncrements("id");
            $table -> string("nama");
            $table -> longText("description");
            $table -> integer("price");
            $table -> longText("image_gor");
            $table ->  time("senin_open");
            $table ->  time("senin_close");
            $table -> boolean("senin_is_closed") -> default(false);
            $table ->  time("selasa_open");
            $table ->  time("selasa_close");
            $table -> boolean("selasa_is_closed") -> default(false);
            $table ->  time("rabu_open");
            $table ->  time("rabu_close");
            $table -> boolean("rabu_is_closed") -> defaut(false);
            $table ->  time("kamis_open");
            $table ->  time("kamis_close");
            $table -> boolean("kamis_is_closed") -> default(false);
            $table ->  time("jumat_open");
            $table ->  time("jumat_close");
            $table -> boolean("jumat_is_closed") -> default(false);
            $table ->  time("sabtu_open");
            $table ->  time("sabtu_close");
            $table -> boolean("sabtu_is_closed") -> default(false);
            $table ->  time("minggu_open");
            $table ->  time("minggu_close");
            $table -> boolean("minggu_is_closed") -> default(false);
            $table -> foreignId("user_id") -> constrained() -> onDelete('cascade');
            $table -> timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
