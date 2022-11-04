<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    
    <header>
    <nav class="navbar navbar-light" style="background-color:red;">
  <a class="navbar-brand">LA PAGINA DE GAMALIEL</a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button type="button" class="btn btn-primary btn-lg">Large button</button>
  </form>
    </nav>
</header>
<h1> 
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
</h1>
<article>
<form>
  <div class="alert alert-primary" role="alert">
    <label for="exampleInputEmail1">correo electronico</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ingrese su correo">
    <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu correo electrónico con nadie más.</small>
  </div>
  <div class="alert alert-primary" role="alert">
    <label for="exampleInputPassword1">contraseña</label>
    <input type="contraseña" class="form-control" id="exampleInputPassword1" placeholder="ingrese su contraseña">
  </div>
  <div class="alert alert-danger" role="alert">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">mostrar la contraseña</label>
  </div>
  <button type="submit" class="btn btn-primary">INICIAR SECCION</button>
</form>


</article>
</body>

</html>