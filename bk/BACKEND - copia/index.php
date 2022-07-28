<?php
    /*echo("Hello Worrld");
    print("Hello again");
    //comentario 
    /*multi
    linea

    $var1 = 10;
    $var2 = 20;
    $var3 = "Hola";

    /*echo $var1;
    echo $var2;
    echo $var3;

    echo($var1 + $var2 + $var3);

    echo("La suma de ".$var1." mas ".$var2." es ".($var1+$var2)." ".$var3);
    */

    header("Content-Type: application/json; chartset=UTF-8");
    header("Access-Control-Allow-origin: *");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


    $data = array (
        "data" => [
            array("id"=>"1", "contact"=>"Norma","status"=>"Activ"),
            array("id"=>"2","status"=>"No Active")
        ]
    );

    echo json_encode($data);

?>