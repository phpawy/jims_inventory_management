<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAttributesMastervalues extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('attributes_mastervalues', function(Blueprint $table) {
            $sql = "DROP TABLE IF EXISTS `attributes_mastervalues`;
            CREATE TABLE `attributes_mastervalues` (
              `id` int(11) NOT NULL AUTO_INCREMENT,
              `attributes_id` int(11) NOT NULL,
              `master_value` varchar(255) NOT NULL,
              PRIMARY KEY (`id`),
              KEY `attributes_id` (`attributes_id`),
              CONSTRAINT `attributes_mastervalues_ibfk_1` FOREIGN KEY (`attributes_id`) REFERENCES `attributes` (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
            DB::connection()->getPdo()->exec($sql);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
