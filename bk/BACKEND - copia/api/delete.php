<?php
    header("Content-Type: application/json; chartset=UFT-8");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: DELETE");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    include_once '../config/database.php'; //importando bd
    include_once '../class/user.php'; //importanto clase USer

    $database = new Database();
    $db = $database->getConnection();
    $item = new User($db);
    $data = json_decode(file_get_contents("php://input"));
    
    $item->contactid = $data->contactid;


    //echo $data->contactid;
    
    try {
        $item->deleteUser();
        echo json_encode("OK");
    } catch(PDOException $exception) {
        echo "Database error: " . $exception->getMessage(); //solo para desarrollo
    }

?>