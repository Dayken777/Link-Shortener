<?php 
    class DB
	{
        private $db;

		public function __construct()
		{
			$dbinfo = require './config/db-info.php';
            $this->db = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $pass);
		}

        public function query($sql, $params = [])
		{
			$stmt = $this->db->prepare($sql);
			
			if ( !empty($params) ) {
				foreach ($params as $key => $value) {
					$stmt->bindValue(":$key", $value);
				}
			}
			
			$stmt->execute();

			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
        public function getLastStr(){
            $stmt = $this->db->prepare("SELECT short_url FROM `url-shortener` ORDER BY `id` DESC");
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

	}
?>