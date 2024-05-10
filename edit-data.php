<?php
include("connection.php")

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
                <h1>Edit Employee Data</h1>
            </div>
            <div class="card-body">
            <form action="controller.php" method="POST">
                <?php
     $pkid = $_GET['id'];
     $edit = "SELECT * FROM student WHERE id='{$pkid}'";
     $edit_run=mysqli_query($conn,$edit);
     try{
                 if(mysqli_num_rows($edit_run)>0){
                               while($value=mysqli_fetch_array($edit_run)){
                                   
                               
                


?>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">id</label>
    <input type="text" class="form-control" name="id" value="<?php echo $value['id'];?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">name</label>
    <input type="text" class="form-control" name="name" value="<?php echo $value['name']; ?>">
    
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">email</label>
    <input type="email" class="form-control" name="email" value="<?php echo $value['email']; ?>">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">mobile</label>
    <input type="number" class="form-control" name="mobile" value="<?php echo $value['mobile']; ?>">
  </div>

  <input type="submit" value="update" class="btn btn-dark" name="update">
  <?php } ?>
  <?php
 }else{
   echo "<h1 style='color:red;text-align:center;'>oops</h1>";
 }
}catch(mysqli_sql_exception $e){
$e->getMessege();
}
  ?>
</form>
            </div>
        </div>
    </div>
</body>
</html>