<?php
$connection = mysqli_connect("localhost","root",null,"foodPost");


//check connection
    if($sql_connection){
        echo "SAVE YOUR NOTE HERE";
    }

    echo "<br><br>";

    if(isset($_POST['save'])) {
        $name = $_POST['NAME'];
        $date=$_POST['DATE'];
        $email = $_POST['EMAIL'];
        $title = $_POST['TITLE'];
        $notes = $_POST['NOTES'];

        $sql = "INSERT INTO users (ID, NAME, DATE, EMAIL,TITLE,NOTES) VALUES(null,'$name','$date','$email','$title','$notes')";
        if (mysqli_query($sql_connection, $sql)) {
            echo "New data has been update successfully.";
        } else {
            echo "Error " . $sql . "" . mysqli_error($sql_connection);
        }
    }
    $all="SELECT NAME, DATE, EMAIL, TITLE, NOTES FROM users";
    $result=mysqli_query($sql_connection, $all);
    $data=mysqli_fetch_all($result,MYSQLI_ASSOC) ;
    mysqli_close($sql_connection);

    ?>    
 