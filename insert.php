
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
<body class="grey lighten-2">
    <div class=" navbar-fixed">
        <nav class="nav-wrapper white z-depth-1">
            <div class=" container navbar">
                <a href="index.html" class="brand-logo left hide-on-med-and-up">
                    <img src="img/car-logo.png" alt="" class="responsive-img" width="20%">
                </a>                  
                <a href="index.html" class="brand-logo left hide-on-small-only">                                                
                    <img src="img/car-logo.png" alt="" class="responsive-img" width="10%">
                </a>                
                <ul class="right">          
                    <li>                            
                        <a href="home.php" class="red-text text-darken-4">
                            <i class="material-icons small left ">home</i>                                
                        </a>                
                    </li>                                  
                    <li class=" hide-on-small-only">                            
                        <a href="login.php" class="red-text text-darken-4">
                            <i class="material-icons small left ">settings_power</i>    
                            Logout
                        </a>                
                    </li> 
                    <li style="padding-left: 10px; padding-top: 2px;" class=" hide-on-med-and-up">                            
                        <a href="login.php" class="red-text text-darken-4">
                        Logout   
                        </a>                
                    </li>                  
                </ul>                    
            </div>
        </nav>
    </div>
    <br><br>
    <div class="container white ">
        <h3 class=" red-text text-darken-4 center-align">Upload Rented Vehicles</h3>
        <br><br>
        <form action="">
            <div class="row">
                <div class="input-field col s12 l6 center-align">
                    <i class=" material-icons prefix">directions_car</i>
                    <input type="text" id="name">
                    <label for="name">Enter vehicle name</label>
                </div>                        
                <div class="input-field col s12 l6 center-align">
                    <i class=" material-icons prefix">event_seat</i>
                    <input type="number" id="seat">
                    <label for="seat">Enter the amount of seat</label>
                </div> 
                <div class="input-field col s12 l6 center-align">
                    <i class=" material-icons prefix">call_to_action</i>
                    <input type="text" id="year">
                    <label for="year">Enter the price</label>
                </div> 
                <div class="input-field col s12 l6 center-align">
                    <i class=" material-icons prefix">border_all</i>
                    <input type="text"  id="price">
                    <label for="price">Enter the model year</label>
                </div> 
                <div class="input-field col s12 l6 center-align">
                    <i class=" material-icons prefix">directions_railway</i>
                    <input type="text"  id="fuel">
                    <label for="fuel">Fuel consumption (amount of km/l)</label>
                </div> 
                <div class="input-field col s12 l6 center-align">
                    <i class=" material-icons prefix">store</i>
                    <input type="text" id="brand">
                    <label for="brand">Enter brand name</label>
                </div>                                             
            </div>    
            <br><br> 
            <div class="buttons center-align">
                <button class="white-text red darken-4 btn"><a href="home.php" class="white-text">UPLOAD</a></button>
            </div>
            <br>                      
        </form>
    </div>


    <script src="js/materialize.js"></script>
    <script src="js/jQuery.js"></script>
    <script>
        $(document).ready(function(){

        });
    </script>
</body>
</html>