<!-- Donor page (3) -->

<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Architects+Daughter">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="styleindex.css">
        <title>JomShare - Be a Donor!</title>
    </head>

    <body>
        <!-- Aqilah Syazani Binti Nooraziz -->
        
        <section id="banner">
            <div class="logo">
                <img src="https://lh3.googleusercontent.com/eLTXbEDVn_zkysaPGOZiG2jKxnr9wMTYkJ3qiybIm2uZd7AKm-kyG7OFr7WJ_gqZGKaQ=s153" style="width:120%">
            </div>
            <div class="banner-text">
                <div class="banner-btn">
                    <a href="index.html?"><span></span>Back</a>
                    <a href="index.html?"><span></span>Delete</a>
                </div>
                <div class="rectangle"></div>
                <p><b>FOOD POST TITLE</b></p>
            </div>
        
        <div class="descript">
            <form action="/foodPost.php" method="get">
                <label for="photo">Add photo here:</label><br>
                <input type="image" id="photo" name="photo"><br><br><br>
                <label for="amount">Amount of food:</label>
                <input type="text" id="amount" name="amount"><br><br><br>
                <label for="description">Description:</label>
                <input type="text" id="description" name="description"><br><br><br>
                <label for="contact">Contact (telephone number/email):</label>
                <input type="text" id="contact" name="contact"><br><br>
            
              </form>
        </div>
        <div class="post">
                <input type="submit" value="Post">
                
                <?php if (isset($_GET['error'])): ?>
                <p><?php echo $_GET['error']; ?></p>
                <?php endif ?>
                <form action="upload.php"
                    method="post"
                    enctype="multipart/form-data">
            
                    <input type="file" 
                            name="my_image">
            
                    <input type="submit" 
                            name="submit"
                            value="Upload">
                    
                </form>
        </div>
        
         <!-- Aina -->

        <div class="expiredDate">
            <p><b>&nbsp; EXPIRED DATE:</b></p>
        </div>

        <div class="currentLot">
            <p><b>&nbsp; YOUR CURRENT LOCATION:</b></p>
        </div>

        <div class="categories">
            <p><b>&nbsp; CATEGORIES:</b></p>
                <!-- <form action="/action_page.php"> -->
                <input type="checkbox" id="food1" name="food1" value="Halal">
                <label for="food1"> Halal</label><br>
                <input type="checkbox" id="food2" name="food2" value="Vegetarian">
                <label for="food2"> Vegetarian</label><br>
                <input type="checkbox" id="food3" name="food3" value="Vegan">
                <label for="food3"> Vegan</label><br>
                <input type="checkbox" id="food4" name="food4" value="Canned">
                <label for="food4"> Canned</label><br>
                <input type="checkbox" id="food5" name="food5" value="Dry">
                <label for="food5"> Dry</label><br>
                <input type="checkbox" id="food6" name="food6" value="Raw">
                <label for="food6"> Raw</label><br><br>
                <!-- <input type="submit" value="Submit"> -->
                </form>
        </div>
        <div class="categories2">
                <!-- <form action="/action_page.php"> -->
                <input type="checkbox" id="food7" name="food7" value="Non-halal">
                <label for="food7"> Non-halal</label><br>
                <input type="checkbox" id="food8" name="food8" value="Non-dairy">
                <label for="food8"> Non-dairy</label><br>
                <input type="checkbox" id="food9" name="food9" value="Meat">
                <label for="food9"> Meat</label><br>
                <input type="checkbox" id="food10" name="food10" value="Fresh">
                <label for="food10"> Fresh</label><br>
                <input type="checkbox" id="food11" name="food11" value="Wet">
                <label for="food11"> Wet</label><br>
                <input type="checkbox" id="food12" name="food12" value="Cooked">
                <label for="food12"> Cooked</label><br><br>
                <!-- <input type="submit" value="Submit"> -->
                </form>
        </div>
        
        
    </section>

    
    </body>
</html>