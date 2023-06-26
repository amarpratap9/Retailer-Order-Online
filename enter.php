<?php      
    include('connection.php'); 
    $Name = $_POST['S_name']; 
    $Number = $_POST['S_number'];
    $Emailid = $_POST['Email'];
    $Area= $_POST['Area'];
    $Pincode =$_POST['pincode'];
    $Phone = $_POST['phone'];
    $password = $_POST['pass'];
    $sq="select * from shop_d where (Shop_number='$Number');";

      $res=mysqli_query($con,$sq);

      if (mysqli_num_rows($res) > 0) {
        
        $row = mysqli_fetch_assoc($res);
        if($Number==isset($row['Shop_number']))
        {
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Shop Number already Register")'; 
            echo '</script>';
        }
		}
else{
        $sql = "INSERT INTO `shop_d` (`Shop_name`, `Shop_number`, `email`, `Area`, `Pincode`, `Phone`, `Password`) VALUES ('$Name', '$Number', '$Emailid', '$Area', '$Pincode', '$Phone', '$password');";  
        $result = mysqli_query($con, $sql);   
          
        if($result){  
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Register Sucessfuly")';  
            echo '</script>';
        }  
       
    else{
        echo "not register";
    }  
} 
?>  