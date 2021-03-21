<?php
    require_once("php/class/Contato.php");
    require_once("php/class/Eventos.php");
    $eventos = new Eventos();
    $contato = new Contato();


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Lohr</title>
</head>

<body>
    <header>

    </header>

    <main>
    <div class="row">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Contatos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="groups.php">Grupos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Events.php">Eventos</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
        <section class="events container col-md-9 my-4">
            <h1 class="text-center">Eventos</h1>
            

            <div class="col-12 text-right mb-3">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEvento">+ Adicionar</button>
            </div>

            <div class="eventos row mx-0">   
                <?php $eventos->getEventos(); ?>
            </div>


            <!-- Modal Add Evento -->
            <div class="modal fade" id="addEvento" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Adicionar Evento</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class=" mx-auto my-2 " method="POST" enctype="multipart/form-data" action="php/actions/eventos/adicionar.php">
                                <img src="" style="border-radius: 50%;">
                                <input class="col-md-4 mb-3 form-control" name="name" type="text" placeholder="Nome do Evento"><br>
                                <input class="col-md-4 mb-3 form-control" name="data" type="date" placeholder="Data "><br>
                                <input class="col-md-4 mb-3 form-control" name="horario" type="time" placeholder="Horario "><br>
                                <textarea class="mb-3" cols="60" rows="4" name="descricao" placeholder="Descrição"></textarea>
                                <input class="col-md-4 mb-3 form-control" name="contato" type="text" placeholder="Numero de Contato"><br>
                                
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!----/Modal Add Evento--->

            <!-- Modal Contatos Evento --->
            <div class="modal fade" id="editarGroup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="staticBackdropLabel">Editar Evento</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class=" mx-auto my-2 " method="POST" enctype="multipart/form-data" action="php/actions/eventos/adicionar.php">
                                <img src="" style="border-radius: 50%;">
                                <input class="col-md-4 mb-3 form-control" name="name" type="text" placeholder="Nome"><br>
                                <input class="col-md-4 mb-3 form-control" name="last" type="text" placeholder="Sobrenome"><br>
                                <input class="col-md-4 mb-3 form-control" name="phone" type="text" placeholder="Celular"><br>
                                <input class="col-md-4 mb-3 form-control" name="email" type="email" placeholder="Email"><br>
                                <input class="col-md-6 mb-3 form-control" name="image" type="file"><br>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- /Modal Contatos Evento --->
        </section>
    </div>
    </main>

    <footer>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>