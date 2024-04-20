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
                            "id" => "1",
                            "titulo" => [
                                "esp" => "Consultoría digital"
                            ],
                            "texto" => [
                                "esp" => "Identificamos las fallas y conectamos los puntos entre tu negocio y tu estrategia digital. Nuestro equipo experto cuenta con años de experiencia en la definición de estrategias y hojas de ruta en función de tus objetivos específicos."
                            ],
                            "activo" => true
                        
                        ],
                        [
                            "id" => "1",
                            "titulo" => [
                                "esp" => "Consultoría digital"
                            ],
                            "texto" => [
                                "esp" => "Identificamos las fallas y conectamos los puntos entre tu negocio y tu estrategia digital. Nuestro equipo experto cuenta con años de experiencia en la definición de estrategias y hojas de ruta en función de tus objetivos específicos."
                            ],
                            "activo" => true
                        
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