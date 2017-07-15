<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCustomers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function(Blueprint $table) {
            $sql = 'DROP TABLE IF EXISTS `customers`;';
            DB::connection()->getPdo()->exec($sql);

            $sql = "CREATE TABLE `customers` (
                `id` int(11) NOT NULL AUTO_INCREMENT,
                `title` varchar(255) NOT NULL,
                `code` varchar(255) NOT NULL,
                `tax_number` varchar(255) NOT NULL,
                `phone` varchar(255) NOT NULL,
                `fax` varchar(255) NOT NULL,
                `website` varchar(255) NOT NULL,
                `email` varchar(255) NOT NULL,
                `description` text NOT NULL,
                PRIMARY KEY (`id`)
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
