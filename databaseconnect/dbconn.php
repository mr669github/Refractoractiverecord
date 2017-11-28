<?php
    namespace databaseconnect;
    use \PDO ;
    define('SERVERNAME', 'sql2.njit.edu');
    define('USERNAME','mr669');
    define('PASSWORD','abHYFGPw');
    define('DBNAME','mr669');
    class dbConn
    {
        protected static $dbconn;
        function __construct()
        {
            try {
                self::$dbconn = new PDO('mysql:host='.SERVERNAME.';dbname='.DBNAME , USERNAME, PASSWORD);
                self::$dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
        static function getConnection(){
            if(!self::$dbconn) {
                new dbConn;
            }
            return self::$dbconn;
        }
    }
?>