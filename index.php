<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
  <link href="./assets/style.css" rel="stylesheet">

  <title>Login</title>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-12 col-md-8">
        <div class="row justify-content-center">
          <div class="col-sm-12 col-md-8 tela">
            <h2 class="text-center">Login</h2>
            <form action="login.php" method="POST">
              <label for="">Username</label>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><img src="https://img.icons8.com/ios-glyphs/30/000000/user--v1.png" /></span>
                <input type="text" name="username" class="form-control" placeholder="type your username" aria-label="Username" aria-describedby="basic-addon1" />
              </div>
              <label for="">Password</label>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><img src="https://img.icons8.com/material-outlined/30/000000/password.png" /></span>
                <input type="password" name="password" class="form-control" placeholder="type your password" aria-label="password" aria-describedby="basic-addon1" />
              </div>
              <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">LOGIN</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>
