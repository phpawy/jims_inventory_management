<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProductsSales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sales', function(Blueprint $table) {
            $sql = 'DROP TABLE IF EXISTS `sales`;';
            DB::connection()->getPdo()->exec($sql);

            $sql = "CREATE TABLE `sales` (
                  `id` int(11) NOT NULL AUTO_INCREMENT,
                  `customers_id` int(11) NOT NULL,
                  `locations_id` int(11) NOT NULL,
                  `created_at` datetime NOT NULL,
                  PRIMARY KEY (`id`),
                  KEY `customers_id` (`customers_id`),
                  KEY `locations_id` (`locations_id`),
                  CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`customers_id`) REFERENCES `customers` (`id`),
                  CONSTRAINT `sales_ibfk_2` FOREIGN KEY (`locations_id`) REFERENCES `locations` (`id`)
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
