<?php
include 'database/db.php';

class User extends Database{

    public function getAll(){

    $this->init();
    $allUser = $this->conn->query("SELECT * FROM users");
    $users = $allUser->fetch_all(MYSQLI_ASSOC);

        return ($users);
    }
}

?>
