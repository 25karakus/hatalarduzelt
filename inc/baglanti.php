<?php

class Baglanti {
    private static $db;

    public static function getDB() {
        if (self::$db === null) {
            $db_host = 'localhost';
            $db_adi = 'version2';
            $db_kullanici = 'root';
            $db_sifre = '';

            try {
                self::$db = new PDO("mysql:host=$db_host;dbname=$db_adi;charset=utf8", $db_kullanici, $db_sifre);
                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                hata_kaydet($e->getMessage());
                die("Veritabanı bağlantısı başarısız!");
            }
        }
        return self::$db;
    }
}

?>