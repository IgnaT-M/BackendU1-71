<?php
include_once("../version1.php");

$existeId = false;
$valorId = 0;

if (count($_parametros) > 0){
    foreach ($_parametros as $p) {
        if (strpos ($p, "id") !== false){
            $existeId = false;
            $valorId = explode ('=', $p)[1];
        }
    }
}

if ($_version == 'V1'){
    if ($_mantenedor =='Mantenedor'){
        switch ($metodo) {
            case 'GET':
                if ($header == $_token_get){
                    $lista = [
                        [
                            'dato1' => 1,
                            'dato2' => 2,
                            'dato3' => true,
                        ]
                        
                        ];
                        http_response_code(200);
                        echo json_encode(["data" => $lista]);
                }else {
                    http_response_code(401);
                    echo json_encode(["Error" => "No autorizacion get"]);
                }
                break;
            
            default:
                http_response_code(405);
                echo json_encode(["Error" => "No implementado"]);
                break;
        }
    }
}