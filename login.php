<?php      
    include('connection.php');  
    $username = $_POST['Shop_Number'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from shop_d where Shop_number = '$username' and Password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header("location: http://localhost//online/userpage.html");
        }  
        else{  
            echo "<script>alert('Login failed. Invalid username or password.')</script>";
        }  
        mysqli_close($con);           
?>  