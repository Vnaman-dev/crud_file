<?php
include("connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Register employee</h1>
            </div>
            <div class="card-body">
            <form action="controller.php" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">name</label>
    <input type="text" class="form-control" name="name">
    
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">email</label>
    <input type="email" class="form-control" name="email">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">mobile</label>
    <input type="number" class="form-control" name="mobile">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">password</label>
    <input type="password" class="form-control" name="pass">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">photo</label>
    <input type="file" class="form-control" name="image">
  </div>

  <button type="submit" class="btn btn-light" name="submit-btn">submit</button>
<button type="button" class="btn btn-dark">cancle</button>
</form>

  
            </div>
        </div>
    </div>
</body>
</html>