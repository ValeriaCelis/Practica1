<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Formulario</title>
  </head>
<body>
  <div class="container">
    <div class="row">
      <div class="col">

      </div>
      <div class="col">
        <div class="text-end">
          <img src="img/logo.png" width="48" alt="">
        </div>
        <h2 class="fw-bold text-center pt-5 mb-5">Solicita información</h2>

        <!----LOGIN----->
        
        <form action="#">
          <div class="mb-4">
            <label for="email" class="form-label">Correo Electronico</label>
            <input type="email" class="form-control" name="email">
          </div>
          <div class="mb-4"></div>
          <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
          <div class="mb-4 forme-check">
            <input type="checkbox" name="connected" class="form-check-input">
            <label for="connected" class="form-check-label">Mantenerme Conectado</label>
          </div>

          <div class="d-grid">
            <button type="submit" class="btn btn-primary"> Iniciar Sesión</button>
          </div>
          <div class="my-3">
            <span>¿No tienes cuenta? <a href="#">Registrate</a></span> <br>
            <span><a href="#">Recuperar Password</a></span>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>