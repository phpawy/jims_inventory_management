<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAttributes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('attributes', function(Blueprint $table) {
            $sql = 'DROP TABLE IF EXISTS `attributes`;';
            DB::connection()->getPdo()->exec($sql);

            $sql = "CREATE TABLE `attributes` (
              `id` int(11) NOT NULL AUTO_INCREMENT,
              `categories_id` int(11) NOT NULL,
              `title` varchar(255) NOT NULL,
              `type` enum('text, number, dropdown, checkbox') NOT NULL,
              PRIMARY KEY (`id`),
              KEY `categories_id` (`categories_id`),
              CONSTRAINT `attributes_ibfk_1` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`)
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
