<?php 
include('templates/connect.php');

//create sql query to get data from the database
$get_data = 'SELECT * FROM rent_tb';
//send query command to server
$send_query = mysqli_query($connect, $get_data);
//retreive and store data from database
$cardData = mysqli_fetch_all($send_query, MYSQLI_ASSOC);
//close database connection
mysqli_close($connect);

session_start();


// print_r($cardData);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">    
</head>
<style>
    .welcome{
        font-size: 25px;
        text-align: justify;
    }
    .spacing{
        padding-left: 19px;
    }    
    .pagesLinks{
        color: black;
    }
    .pagesLinks:hover{
        color: #990000;
    }
    button{
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        padding: 10px;        
    }
    strong span.red-text{
        font-size: 50px;
    }        
    .spanner{
        font-size: 300px;
    }
    h3 span.red-text{
        font-size: 48px;
    }
</style>
<body>
    <header>
        <div class=" navbar-fixed">
            <nav class="nav-wrapper white z-depth-1">
                <div class=" container navbar">                    
                    <a href="#" class="brand-logo left hide-on-med-and-up">                        
                        <img src="img/car-logo.png" alt="" class="responsive-img" width="20%">
                    </a>                                      
                    <a href="#" class="brand-logo left hide-on-small-only">                                                
                        <img src="img/car-logo.png" alt="" class="responsive-img" width="10%">
                    </a>                  
                    <ul class="right"> 
                        <li>
                            <button class="btn red darken-4 pulse"><a href="insert.php">Rent a Car</a></button>                  
                        </li>                       
                        <li style="padding-left: 10px; padding-top: 2px;" class=" hide-on-small-only">                            
                            <a href="logout.php" class="red-text text-darken-4">
                                <i class="material-icons small left ">settings_power</i>    
                                logout
                            </a>                
                        </li> 
                        <li style="padding-left: 10px; padding-top: 2px;" class=" hide-on-med-and-up">                            
                            <a href="index.php" class="red-text text-darken-4">
                                Login   
                            </a>                
                        </li>                  
                    </ul>                    
                </div>
            </nav>
        </div>
        <div class="container">            
            <br><hr><br><br>
            <h4 class="red-text text-darken-4">Recently Rented</h4> <br>
            <div class="row">            
                <?php foreach($cardData as $card){?>
                    <div class="col s12 l4 m6">
                        <div class="card">
                            <div class="card-image">
                                <img src="<?php echo $card['image']; ?>" alt="" style="border-radius:10px;">
                            </div>
                            <div class="card-content">
                                <span style="font-size:25px;"><?php echo $card['carName']?></span>
                                <span class="right" style="font-size: large; padding: 5px; border: 2px #990000 solid; border-radius: 10px; border-style: dotted;"><?php echo $card['year']?></span>
                                <br><br>
                                <span><?php echo $card['people']?>people</span>
                                <span class="right">Gasoline</span>
                                <br><br>
                                <span><?php echo $card['suspension']?></span>
                                <span class="right"><?php echo $card['fuel']?>km/1 litre</span>
                            </div>
                            <div class="card-action">
                                <span style="font-size: 30px;">$<?php echo $card['price']?></span><span >/month</span>
                                <button class="right" style="background-color: #990000; padding-right: 0%; padding-left: 20px;border-radius: 15px;"><a href="#" class=" white-text">Rent now</a></button>
                            </div>
                        </div>
                    </div>                    
                <?php } ?>                                                                        
            </div>            
        </div>
    </main>
    <footer>
        <?php include('templates/footer.php'); ?>
    </footer>

    
    <script src="js/jQuery.js"></script>
    <script src="js/materialize.js"></script>
    <script>
        $(document).ready(function(){
            $('.slider').slider(
                {                
                interval: 1500,
                height: 600              
                }
            )            
            $('.sidenav').sidenav();
            
        })
    </script>
</body>
</html>