<?php

include("connection.php");
$msg = isset($_GET['msg']) ? $_GET['msg']: "";

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
            <div class="card-head">
                <h1>employee record</h1>
            </div>
            <div class="card-body">
            <table class="table table-striped">
                <?php

                
$select_query = "SELECT * FROM student";
$select= mysqli_query($conn,$select_query);
try{
    if(mysqli_num_rows($select)>0){
           
            
           

   

?>
              <tr>
                <th>sr.no</th>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>mobile</th>
                <th>password</th>
                <th>photo</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
              <?php  $i=1; ?>
              <?php while($data = mysqli_fetch_array($select)){   ?>
              <tr>
                <th><?php echo $i; ?></th>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['email'];  ?></td>
                <td><?php echo $data['mobile'];  ?></td>
                <td><?php echo $data['password']; ?></td>
                <td><img src="<?php  echo'uploads/'. $data['photo']; ?>" style=width:100px;></td>
                <td><a href="edit-data.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">edit</td>
                <td>
                    <form action="controller.php" method="POST">
                        <input type ="hidden" value="<?php echo $data['id']; ?>" name="id">
                        <input type ="hidden" value="<?php echo $data['photo']; ?>" name="del_img">
                        <input type ="submit" value="delete" name="delete_btn" class="btn btn-danger">
              </form>
                </td>

                
              </tr>
              <?php $i++;  ?>
              <?php 
        
            }  ?>
</table>
<?php

}else{
    throw new mysqli_sql_exception();
}

}catch(mysqli_sql_exception $e){
   //$e->getmessege();
}

?>
<a href="registration.php" class="btn btn-primary" value="register">register</a>
            </div>
        </div>
    </div>
</body>
</html>