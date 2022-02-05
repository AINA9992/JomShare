<!DOCTYPE html>
<html lang= "en">
<head>
    <title>Food Post</title>
</head>
  
<body>
    <center>
        <h1>Upload New Post</h1>
  
        <form action=:"foodPost.php" method="post">
              
<p>
                <label for="username">Username:</label>
                <input type="varchar" name="username" id="username">
            </p>
             
<p>
                <label for="picture">Picture:</label>
                <input type="tinyblob" name="picture" id="picture">
            </p>
             
<p>
                <label for="contact_detail">Contact detail:</label>
                <input type="int" name="contact_detail" id="contact_detail">
            </p>
  
<p>
                <label for="pickup_location">Address:</label>
                <input type="varchar" name="pickup_location" id="pickup_location">
            </p>
              
<p>
                <label for="expired_date">Expired date:</label>
                <input type="date" name="expired_date" id="expired_date">
            </p>

<p> 
            <label for="food_description">Food description:</label>
                <input type="text" name="food_description" id="food_description">
            </p>

<p>    
            <input type="submit" value="Submit">
        </form>
    </center>
</body>
  
</html>