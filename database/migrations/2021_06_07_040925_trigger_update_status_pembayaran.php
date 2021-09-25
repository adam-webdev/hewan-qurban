<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TriggerUpdateStatusPembayaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    DB::unprepared("
        CREATE TRIGGER update_status_pembayaran AFTER INSERT ON transaksis
        FOR EACH ROW BEGIN
        UPDATE sapis
        SET status = 'Terjual';
        WHERE
        id = NEW.id;
        END
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER update_status_pembayaran');
        
    }
}
