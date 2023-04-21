<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabeleleila Leila</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> 
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Cabeleireira Leila</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="<?php echo (in_array($_SERVER['REQUEST_URI'], ["/", "", "/index.php"])) ? "nav-link active" : "nav-link"; ?>" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="<?php echo ($_SERVER['REQUEST_URI'] == "/agendar") ? "nav-link active" : "nav-link"; ?>" href="agendar">Agendar Serviço</a>
                    </li>
                    <li class="nav-item">
                    <a class="<?php echo ($_SERVER['REQUEST_URI'] == "/listarAgenda") ? "nav-link active" : "nav-link"; ?>" href="listarAgenda">Lista de Agedamentos</a>
                    </li>
                </ul>
                
                <button class="btn btn-danger" type="submit">Sair</button>
            </div>
        </div>
    </nav>
    <div class="container corpo">
        <div class="row">
            <div class="col">
                <?php
                    $request = $_SERVER['REQUEST_URI'];

                    switch ($request) {
                        case '/' :
                            require __DIR__ . '/views/home.php';
                            break;
                        case '' :
                            require __DIR__ . '/views/home.php';
                            break;
                        case '/index.php' :
                            require __DIR__ . '/views/home.php';
                            break;

                        case '/agendar' :
                            require __DIR__ .'/views/agendamento.php';
                            break;
                        case '/criarAgendamento':
                            require __DIR__ .'/views/Controles/criar_agendamento.php';
                            break;

                        case '/listarAgenda':
                            require __DIR__ .'/views/listarAgenda.php';
                            break;
                        
                        default:
                            http_response_code(404);
                            require __DIR__ . '/views/404.php';
                            break;
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>