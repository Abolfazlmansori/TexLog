<?php

namespace App\Config;

use PDO;
use PDOException;

class Database
{
    // این متغیر اتصال فعال دیتابیس را در خود نگه می‌دارد
    private static ?PDO $connection = null;


    public static function connect(): PDO
    {
        if (self::$connection === null) {
            $host = '127.0.0.1';
            $db   = 'texlog';
            $user = 'root';
            $pass = ''; 
            $charset = 'utf8mb4';

            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // پرتاب Exception در صورت بروز خطای SQL
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // دریافت داده‌ها به صورت آرایه کلید و مقدار
                PDO::ATTR_EMULATE_PREPARES   => false,                  // استفاده از Prepared Statements واقعی برای امنیت بالا ضد SQL Injection
            ];

            try {
                self::$connection = new PDO($dsn, $user, $pass, $options);
            } catch (PDOException $e) {
                die("خطا در اتصال به دیتابیس وبلاگ: " . $e->getMessage());
            }
        }

        return self::$connection;
    }

    public static function Insert_Into(string $table,string $filed,array $data,$num)
    {
        $placeholder = str_repeat('?,',$num - 1) . '?';
        $sql = "INSERT INTO $table ( $filed ) VALUES ($placeholder)";
        $stmt = self::$connection->prepare($sql);
        $stmt->execute($data);
    }

    public static function Select(string $table)
    {
        $sql = "SELECT * FROM $table";
        $stmt = self::$connection->query($sql);
        return  $stmt->fetchAll();
    }

    public static function SelectOne(string $table,$id)
    {
        $sql = "SELECT * FROM $table WHERE id=?";
        $stmt = self::$connection->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}
