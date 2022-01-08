//AINA SYARAFINA BINTI ROSLAN(148450)
//AQILAH SYAZANI BINTI NOORAZIZ(146410)

<?php
$connection = mysqli_connect("localhost","root",null,"ass1");
 $textnote = 'textnote';
 $id = 'id';
 echo "<div class=\"load\">YOUR NOTE IS SAVED</div>";
 echo "<div class=\"newone\">To store new note, you will need to wait for 15 seconds<br></div>";
    if(!$connection)
    {
        echo "CONNECTION IS NOT SUCCESSFUL";
    }
    if(isset($_POST['save']))
    {

        $user_note = $_POST['textnote'];
        $instruction = "INSERT INTO user VALUES (null, '$user_note')";
        echo "<br>";

        mysqli_query($connection, $instruction);
    }
    echo"<br>";

    $data = "SELECT * FROM user ORDER BY id ASC";

    $instruction_sent= mysqli_query($connection, $data);

    while ($instruction_accepted = mysqli_fetch_array($instruction_sent, MYSQLI_ASSOC))
    {
        echo "ID : ";
        printf( $instruction_accepted['id']);
        echo " : ";
        printf( $instruction_accepted['note']);
        echo"<br>";
    }
    
    mysqli_free_result($instruction_sent);

    mysqli_close($connection);

    echo "<br>";

    $connection = mysqli_connect("localhost","root",null,"ass1");
    $textnote = 'textnote';
    $id = 'id';
    if(isset($_POST['delete']))
    {

        $user_id = $_POST['id'];
        $padam = "DELETE FROM user WHERE id = $user_id";
        echo "<br>";

        mysqli_query($connection, $padam);

    }
    echo"<br>";
    
    header("refresh:15; url=ass1.html");  
?>
<form method ="POST">
<input type ="text" placeholder="id" name="id"><br>
<button type="submit" name="delete">DELETE</button>
</form>
<style>
    
    body {
        background: linear-gradient(-50deg, wheat,lightgreen,lightblue);
        font-size: 20px;
    }
    .load{
        background: linear-gradient(-50deg, pink,salmon,orchid);
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-size: 30px;
        text-align: center;
        margin: 10px;
        padding: 10px;
        border: 5px solid orchid;
    }
    .newone{
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        width: 400px;
        height: 90px;
        font-size: 20px;
        text-align: center;
        left:40%;
        background-color: mediumspringgreen;
        position: absolute;
        padding: 30px;
        box-sizing: border-box;
        border: 5px dashed steelblue;
    }
 
</style>

