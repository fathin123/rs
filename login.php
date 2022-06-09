<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form action="loginProses.php" method="post">
      <h1 class="h3 mb-3 font-weight-normal">LOGIN</h1>
      <label for="inputEmail" class="sr-only">Username</label>
      <input type="text" name="username" class="form-control" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" class="form-control" required>
      <div class="checkbox mb-3">
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="Login" value="Proses">Masuk</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2020 BY KELOMPOK</p>
    </form>
  </body>
</html>

</html>