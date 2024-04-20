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
                            "id" => "2",
                            "titulo" => [
                                "esp" => "Soluciones multiexperiencia"
                            ],
                            "texto" => [
                                "esp" => "Deleitamos a las personas usuarias con experiencias interconectadas a través de aplicaciones web, móviles, interfaces conversacionales, digital twin, IoT y AR. Su arquitectura puede adaptarse y evolucionar para adaptarse a los cambios de tu organización."
                            ],
                            "activo" => true
                        
                        ],
                        [
                            "id" => "3",
                            "titulo" => [
                                "esp" => "Evolución de ecosistemas"
                            ],
                            "texto" => [
                                "esp" => "Ayudamos a las empresas a evolucionar y ejecutar sus aplicaciones de forma eficiente, desplegando equipos especializados en la modernización y el mantenimiento de ecosistemas técnicos. Creando soluciones robustas en tecnologías de vanguardia."
                            ],
                            "activo" => true
                        
                        ],
                        [
                            "id" => "4",
                            "titulo" => [
                                "esp" => "Soluciones Low-Code"
                            ],
                            "texto" => [
                                "esp" => "Traemos el poder de las soluciones low-code y no-code para ayudar a nuestros clientes a acelerar su salida al mercado y añadir valor. Aumentamos la productividad y la calidad, reduciendo los requisitos de cualificación de los desarrolladores."
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