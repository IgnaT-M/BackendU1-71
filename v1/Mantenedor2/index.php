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
    if ($_mantenedor =='Mantenedor2'){
        switch ($metodo) {
            case 'GET':
                if ($header == $_token_get){
                    $lista = [
                        "mision" => [
                            "titulo" => [
                                "esp" => "Misión"
                            ],
                            "contenido" => [
                                "esp" => "Nuestra misión es ofrecer soluciones digitales innovadoras y de alta calidad que impulsen el éxito de nuestros clientes, ayudándolos a alcanzar sus objetivos empresariales a través de la tecnología y la creatividad."
                            ]
                        ],
                        "vision" => [
                            "titulo" => [
                                "esp" => "Visión"
                            ],
                            "contenido" => [
                                "esp" => "Nos visualizamos como líderes en el campo de la consultoría y desarrollo de software, reconocidos por nuestra excelencia en el servicio al cliente, nuestra capacidad para adaptarnos a las necesidades cambiantes del mercado y nuestra contribución al crecimiento y la transformación digital de las empresas"
                            ]
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