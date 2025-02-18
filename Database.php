<?php

class Database {
    public $host = DB_HOST;
    public $user = DB_USER;  
    public $password = DB_PASS;  
    public $dbname = DB_NAME;  
    public $error;
    public $link ;

    public function __construct() {
        $this->connectDB();
    }

    private function connectDB() {
        $this->link = new mysqli($this->host, $this->user, $this->password, $this->dbname);

        if (!$this->link) {
            $this->error = "Connection Fail" . $this->link->connect_error;
            echo $this->error;
        }
    }

    public function select($query) {
        $result = $this->link->query($query) or die ($this->link->error.__LINE__);

        if ($result->num_rows > 0) {
            return $result;
        }
        else {
            return false;
        }
    }
}

