<?php 
include('templates/connect.php');

//create sql query to get data from the database
$get_data = 'SELECT * FROM my_tb';
//send query command to server
$send_query = mysqli_query($connect, $get_data);
//retreive and store data from database
$cardData = mysqli_fetch_all($send_query, MYSQLI_ASSOC);
//close database connection
mysqli_close($connect);

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
        <?php include('templates/header.php') ?>        
        <section>
            <div class="slider">
                <ul class="slides">                    
                    <li>
                        <img src="https://images.unsplash.com/photo-1583573181567-d4736e51f61d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" alt="car" width="100%">
                    </li>
                    <li>
                        <img src="https://images.unsplash.com/photo-1610647752706-3bb12232b3ab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1625&q=80" alt="">
                    </li>                    
                    <li>
                        <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" alt="">
                    </li>                                        
                </ul>
            </div>
        </section>
    </header>
    <main>
        <div class="container">
            <h3 class=" hide-on-small-only">Rent on <span class="red-text text-darken-4">R</span>entWheel<span class="red-text text-darken-4"> !!</span></h3>
            <h4 class=" hide-on-med-and-up">Rent on <span class="red-text text-darken-4">R</span>entWheel<span class="red-text text-darken-4"> !!</span></h4>
            <p class="welcome hide-on-small-only">
                RentWheel provides individuals and businesses with the convenience of renting vehicles for short-term use. These services offer a wide range of vehicles, including Cars, Trucks, SUVs, and Vans. Rental periods can vary from a few weeks to months. Ridey provides insurance options and flexible pickup and drop-off locations.
            </p>
            <p class="welcome hide-on-med-and-up">
                RentWheel provides many individuals and businesses with the convenience of renting vehicles for long and short-term use.
            </p>
            <br><hr><br><br>
            <h4 class="red-text text-darken-4">Our Vehicles</h4> <br>
            <div class="row">

                <?php foreach($cardData as $card){?>
                    <div class="col s12 l4 m6 xl4">
                        <div class="card">
                            <div class="card-image">
                                <img src="<?php echo $card['image']?>" alt="" style="border-radius:10px;">
                            </div>
                            <div class="card-content">
                                <span style="font-size:25px;"><?php echo $card['carName']?></span>
                                <span class="right" style="font-size: large; padding: 5px; border: 2px #990000 solid; border-radius: 10px; border-style: dotted;"><?php echo $card['year']?></span>
                                <br><br>
                                <span><?php echo $card['people']?>people</span>
                                <span class="right">Gasoline</span>
                                <br><br>
                                <span>Automatic</span>
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
    <footer></footer>

    
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