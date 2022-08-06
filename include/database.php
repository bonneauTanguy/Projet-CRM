<?php
/** 
 * Classe d'accès aux données. 
 * Utilise les services de la classe PDO pour l'application 
 * L'attribut $monPdo matérialise la connexion avec le serveur MySql 
 * @package default
 * @author ilieva
 */
        class PdoDatabase{

            private static $dbName = 'projetCRM';
            private static $dbHost = '51.75.255.249';
            private static $dbUsername = 'admin';
            private static $dbUserPassword = 'admin';
            private static $cont = null;
        
            public function __construct()
            {
                die('Init function is not allowed');
            }
        
            public static function connect()
            {
                if (null == self::$cont) {
                    try {
                        self::$cont = new PDO("mysql:host=" . self::$dbHost . ";" . "dbname=" . self::$dbName, self::$dbUsername, self::$dbUserPassword);
                    } catch (PDOException $e) {
                        die($e->getMessage());
                    }
                }
                return self::$cont;
            }
        
            public static function disconnect()
            {
                self::$cont = null;
            }
        }

    
?>
