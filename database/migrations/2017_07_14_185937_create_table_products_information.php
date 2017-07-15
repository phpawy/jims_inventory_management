<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProductsInformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products_information', function(Blueprint $table) {
            $sql = 'DROP TABLE IF EXISTS `products_information`;';
            DB::connection()->getPdo()->exec($sql);

            $sql = "CREATE TABLE `products_information` (
                      `id` int(11) NOT NULL AUTO_INCREMENT,
                      `products_id` int(11) NOT NULL,
                      `locations_id` int(11) NOT NULL,
                      `sku` varchar(255) NOT NULL,
                      `buy_price` int(11) NOT NULL,
                      `wholesale_price` int(11) NOT NULL,
                      `retail_price` int(11) NOT NULL,
                      PRIMARY KEY (`id`),
                      KEY `products_id` (`products_id`),
                      KEY `locations_id` (`locations_id`),
                      CONSTRAINT `products_information_ibfk_1` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`),
                      CONSTRAINT `products_information_ibfk_2` FOREIGN KEY (`locations_id`) REFERENCES `locations` (`id`)
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
