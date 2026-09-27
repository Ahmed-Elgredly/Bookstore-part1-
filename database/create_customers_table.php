<?php

require_once __DIR__ . "/../core/Database.php";

class create_customers_table
{
    public static function up(){
        Database::getConnection()->exec("CREATE TABLE IF NOT EXISTS customers(
                id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL UNIQUE
        );");
    }

    public static function down(){
        Database::getConnection()->exec("DROP TABLE IF EXISTS customers;");
    }
}