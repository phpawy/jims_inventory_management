<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSalesProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sales_products', function(Blueprint $table) {
            $sql = 'DROP TABLE IF EXISTS `sales_products`;';
            DB::connection()->getPdo()->exec($sql);

            $sql = "CREATE TABLE `sales_products` (
                  `id` int(11) NOT NULL AUTO_INCREMENT,
                  `sales_id` int(11) NOT NULL,
                  `products_id` int(11) NOT NULL,
                  `price` decimal(10,2) NOT NULL,
                  `discount` decimal(10,2) NOT NULL,
                  `tax` decimal(10,2) NOT NULL,
                  `total` decimal(10,2) NOT NULL,
                  PRIMARY KEY (`id`),
                  KEY `sales_id` (`sales_id`),
                  KEY `products_id` (`products_id`),
                  CONSTRAINT `sales_products_ibfk_1` FOREIGN KEY (`sales_id`) REFERENCES `sales` (`id`),
                  CONSTRAINT `sales_products_ibfk_2` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`)
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
