<?php
    
    require_once("conexao/conexao.php");
    require_once("php/class/Contato.php");
    require_once("php/class/Eventos.php");

    $id = $_GET['event'];

    $evento = new Eventos();

    $contatos = new Contato();
    
    
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
    <main class="container">
        
    <section class="">
     <div class="row mx-0 text-center">
        <div class="col-md-12">
            <?php $evento->getEvento($id); ?>
        </div>
        <h2 class="text-center my-3">Convidar contatos</h2>
        <table class="table col-4">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ação </th>
                </tr>
                <?php $contatos->envioEmail($id);?>
        </table>
     </div>
    </section>
    </main>
</body>
</html>