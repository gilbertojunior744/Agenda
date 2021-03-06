<?php
    require_once("php/class/Contato.php");
    require_once("php/class/Grupos.php");
    require_once("php/class/Eventos.php");
    $contato = new CONTATO();
    $grupo = new Grupo();

    if(isset($_GET['id'])){
        $id = $_GET['id'];

    }
    

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>Lohr</title>
</head>

<body class="">

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

        
        <section class="schedule col-8 container  ">
        <h1 class="text-center">Contatos</h1>
            
            <div class="col-md-8 text-right ">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">+ Adicionar</button>
            </div>
            <table class="table col-md-10 mx-0">
                <tr>
                    <th scope="col-md-2">Foto</th>
                    <th scope="col-md-2">Nome</th>
                    <th scope="col-md-2">Sobrenome</th>
                    <th scope="col-md-2">Celular</th>
                    <th scope="col-md-2">Email</th>
                    <th scope="col-md-2">A????es</th>
                </tr>
                <?php $contato->getContatos(); ?>
            </table>


            <!-- Modal Add Contato -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Adicionar Contato</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class=" mx-auto my-2 text-center" method="multiplaform/form-data" action="php/actions/contato/adicionar.php">
                                <img class="mb-2" src="img/padrao.jpg" height="80" width="80" style="border-radius: 50%;">
                                <input class="col-md-4 mb-3 form-control" name="nome" type="text" placeholder="Nome"><br>
                                <input class="col-md-4 mb-3 form-control" name="sobrenome" type="text" placeholder="Sobrenome"><br>
                                <input class="col-md-4 mb-3 form-control" name="celular" type="text" placeholder="Celular"><br>
                                <input class="col-md-4 mb-3 form-control" name="email" type="email" placeholder="Email"><br>
                                

                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <!--/ Add Modal -->

            <!-- Modal Edit Contato -->
            <div class="modal fade" id="editarContato" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Editar Contato</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class=" mx-auto my-2 text-center" method="POST" action="php/actions/contato/editar.php">
                                <img class="mb-2" src="img/padrao.jpg" height="80" width="80" style="border-radius: 50%;">
                                <input class="col-md-4 mb-3 form-control" name="nome" type="text" value=""><br>
                                <input class="col-md-4 mb-3 form-control" name="sobrenome" type="text" value=""br>
                                <input class="col-md-4 mb-3 form-control" name="celular" type="text" value=""><br>
                                <input class="col-md-4 mb-3 form-control" name="email" type="email" value=""><br>

                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <!--/ Edit Modal -->

        </section>
    </div>
        <section class="groups container d-none">
            <h1 class="text-center">Grupos</h1>
            
            <div class="col-12 text-right">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addGroup">+ Adicionar</button>
            </div>
            <table class="table col-6">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nome do Grupo</th>
                    <th scope="col">Data de Cadastro</th>
                    <th scope="col">Data Atualiza????o</th>
                    <th scope="col">A????es</th>
                </tr>
                <?php $grupo->getGrupos();?>
            </table>

            <!-- Modal Add Group -->
            <div class="modal fade" id="addGroup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Adicionar Grupo</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class=" mx-auto my-2 " method="POST" action="php/actions/grupo/adicionar.php">
                                <img src="" style="border-radius: 50%;">
                                <input class="col-md-4 mb-3 form-control" name="nome" type="text" placeholder="Nome do Grupo"><br>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!----/Modal Add Group--->

        </section>

        



    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>