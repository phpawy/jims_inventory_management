<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProductsAttributes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products_attributes', function(Blueprint $table) {
            $sql = 'DROP TABLE IF EXISTS `products_attributes`;';
            DB::connection()->getPdo()->exec($sql);

            $sql = "CREATE TABLE `products_attributes` (
                  `id` int(11) NOT NULL AUTO_INCREMENT,
                  `products_id` int(11) NOT NULL,
                  `attributes_id` int(11) NOT NULL,
                  `value` varchar(255) NOT NULL,
                  PRIMARY KEY (`id`),
                  KEY `products_id` (`products_id`),
                  KEY `attributes_id` (`attributes_id`),
                  CONSTRAINT `products_attributes_ibfk_1` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`),
                  CONSTRAINT `products_attributes_ibfk_2` FOREIGN KEY (`attributes_id`) REFERENCES `attributes` (`id`)
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
