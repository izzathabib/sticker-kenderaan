<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>Login</title>
</head>
<body>
  <div class="container mt-5 col-5">
    <div class="card">
      <div class="card-header bg-primary text-white">
        LOGIN
      </div>
      <div class="card-body">
        <div class="mb-3">
          <label for="username" class="form-label">
            Username
          </label>
          <input id="username" name="username" type="text" class="form-control" placeholder="Masukkan Username...">
        </div>
        <div class="mb-3">
          <label for="inputPassword" class="form-label">
            Password
          </label>
          <input id="inputPassword" name="password" type="password" class="form-control" placeholder="Masukkan password...">
        </div>
        <div class="mb-3">
          <input type="submit" name="login" class="btn btn-primary" value="LOGIN">
        </div>
      </div>
    </div>
  </div>
</body>
</html>