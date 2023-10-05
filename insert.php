<?php  
include('templates/connect.php');
    // Declare empty variables
    $carName='';
    $people='';    
    
    // Check if the submit button is clicked
    if(isset($_POST['upload'])){
        // Record the inputs
        $carName=$_POST['carName'];
        $people=$_POST['people'];
        
        // Write the query
        $save_query="INSERT INTO `rent_tb`(`carName`) VALUES ('$carName')";
        // send this query to the server
        $send_to_server = mysqli_query($connect, $save_query);
        // check if the data is sent to the database        
        if($send_to_server){
            $send_car_query = "SELECT FROM `car_tb` WHERE car_name='$carName'";
            $send_query = mysqli_query($connect, $send_car_query);
            $carData = mysqli_fetch_assoc($send_query);
            session_start();
            $_SESSION['car_name']= $carData['car_name'];
            $_SESSION['car-image']= $carData['car-image'];
            
            header('Location: home.php');
        }
        else{
            echo 'Error Loging in' . mysqli_error(($connect));
        }
    };
    mysqli_close($connect);                  
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
<body class="grey lighten-2">
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
    <div class="container">
        <div class="container">
            <div class="container white">
                <h3 class=" red-text text-darken-4 center-align">Upload Rented Vehicles</h3>
                <br><br>
                <form action="" method="POST">
                    <div class="row">
                        
                        <div class="input-field col s12 l12">
                        <i class=" material-icons prefix">directions_car</i>
                            <select>
                                <option value="">Choose your Vehicle </option>
                                <option value="Toyota" name="carName">Toyota</option>
                                <option value="Cadillac" name="carName">Cadillac</option>
                                <option value="Cadillac" name="carName">mercedes</option>
                            </select>
                        </div>        
                        
                        <!-- <div class="input-field col s12 l6 center-align">
                            <i class=" material-icons prefix">call_to_action</i>
                            <input type="text" name="year" id="year">
                            <label for="year">Enter the price</label>
                        </div> 
                        <div class="input-field col s12 l6 center-align">
                            <i class=" material-icons prefix">border_all</i>
                            <input type="text" name="price" id="price">
                            <label for="price">Enter the model year</label>
                        </div> 
                        <div class="input-field col s12 l6 center-align">
                            <i class=" material-icons prefix">directions_railway</i>
                            <input type="text" name="fuel" id="fuel">
                            <label for="fuel">Fuel consumption (amount of km/l)</label>
                        </div> 
                        <div class="input-field col s12 l6 center-align">
                            <i class=" material-icons prefix">store</i>
                            <input type="text" name="brand" id="brand">
                            <label for="brand">Enter brand name</label>
                        </div>                                              -->
                    </div>  
                    <div class="row">                        
                        <div class="input-field col s12 l12 center-align">
                            <i class=" material-icons prefix">event_seat</i>
                            <input type="number" name="people" id="people">
                            <label for="people">Enter the amount of seat</label>
                        </div>                         
                    </div>  
                    <br><br> 
                    <div class="buttons center-align">
                        <input type="submit" name="upload" id="upload" value="UPLOAD" class="btn red darken-4 white-text" >
                    </div>
                    <br>                      
                </form>
            </div>
        </div>        
    </div>


    <script src="js/jQuery.js"></script>
    <script src="js/materialize.js"></script>
    <script>
        $(document).ready(function(){
            $('select').formSelect();
        });
    </script>
</body>
</html>