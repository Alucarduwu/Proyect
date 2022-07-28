<?php
    header("Content-Type: application/json; chartset=UTF-8");
    header("Access-Control-Allow-origin: *");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    include_once '../config/database.php'; //importando bd
    include_once '../class/user.php'; //importanto clase USer

    $database = new Database();
    $db = $database->getConnection();
    $item = new User($db);
    $item->contactid = isset($_GET['contactid']) ? $_GET['contactid'] : die();

    $item->getSingleUser();

    if ($item->name != null) {
        $data = array(
            "contactid" => $item->contactid,
            "name" => $item->name,
           
            "status" => $item->status
        );
        echo json_encode($data);
    } else {
        http_response_code(404);
        echo json_encode(
            array("message " => "User not found")
        );
    }

?>