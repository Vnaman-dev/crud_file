<?php

define('DB_HOST','localhost:3308');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','my_crud2');
define('SHOW_CONN',FALSE);

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
try{
    if($conn){
              if(SHOW_CONN == TRUE){
                echo 'connection sucessfull';
              }
    }else{
        echo throw new mysqli_sql_exception();
    }

}catch(mysqli_sql_exception){
    echo 'error code '.mysqli_connect_errno();
}


?>