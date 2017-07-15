<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function(Blueprint $table) {
            $sql = 'DROP TABLE IF EXISTS `products`;';
            DB::connection()->getPdo()->exec($sql);

            $sql = "CREATE TABLE `products` (
                  `id` int(11) NOT NULL AUTO_INCREMENT,
                  `categories_id` int(11) NOT NULL,
                  `suppliers_id` int(11) NOT NULL,
                  `title` varchar(255) NOT NULL,
                  `description` text NOT NULL,
                  `image` varbinary(255) NOT NULL,
                  `active` tinyint(4) NOT NULL,
                  PRIMARY KEY (`id`),
                  KEY `categories_id` (`categories_id`),
                  KEY `suppliers_id` (`suppliers_id`),
                  CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`),
                  CONSTRAINT `products_ibfk_2` FOREIGN KEY (`suppliers_id`) REFERENCES `suppliers` (`id`)
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
