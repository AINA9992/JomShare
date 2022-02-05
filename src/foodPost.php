<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    <center>
        <?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost","root",null,"foodpost");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $username =  $_REQUEST['username'];
        $picture = $_REQUEST['picture'];
        $contact_detail =  $_REQUEST['contact_detail'];
        $pickup_location = $_REQUEST['pickup_location'];
        $expired_date = $_REQUEST['expired_date'];
        $food_description = $_REQUEST['food_description'];

          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO foodpost  VALUES ('$username', 
            '$picture','$contact_detail','$pickup_location','$expired_date','$food_description')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$username\n $picture\n "
                . "$contact_detail\n $pickup_location\n $expired_date\n $food_description");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>
 