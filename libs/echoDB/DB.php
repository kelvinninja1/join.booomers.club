<?php
class DB {

        private $pdo;

        public function __construct($host, $dbname, $username, $password) {
                $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $username, $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->pdo = $pdo;
        }

        public function query($query, $params = array()) {
                $statement = $this->pdo->prepare($query);
                $statement->execute($params);

                if (explode(' ', $query)[0] == 'SELECT') {
                $data = $statement->fetchAll();
                return $data;
                } else {
									return $statement;
								}
        }

        public static function count($query, $params = array()) {
                $statement = self::connect()->prepare($query);
                $statement->execute($params);

                $data = $statement->rowCount();
                return $data;

        }

}