<?php
include 'database/user_migration.php';

$user = new User_migration();
$data = $user->CrtTbl();

echo json_encode($data);

?>