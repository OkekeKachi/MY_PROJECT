<?php
// Connect to Database
include('templates/db_connect.php');

//Create blank variables 
$username = $password = '';
$userr ='';
$pswd ='';
//Check if the Login Button is clicked
if(isset($_POST['login'])){

    //Store POST values in a variable
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    //Write SQL query to get login details from the database
    $sql = "SELECT * FROM login_tb WHERE username = '$username'";

    //check the username from the input is found on the database
    if(mysqli_num_rows(mysqli_query($connect,$sql))>0){

        //If true, run the query below
        $run = mysqli_query($connect,$sql);

        //Store result in an associative array
        $login_result = mysqli_fetch_all($run,MYSQLI_ASSOC);

        //if username is found, get the password attached to that username
        $login_details = $login_result[0];
        $password = $login_details['password'];

        //Check the rerieved password, if it matches the user input
        if($password == $_POST['password']){
            //Redirect to landing page 
            header('Location:home.php');
    } else {
       //if username or password is not found set the error variable and the blank_input values
        $error = 'Check  password';
        $userr = $_POST['username'];
     
        }
    }else {

        //if username or password is not found set the error variable and the blank_input values
         $error = 'Wrong username';
         $userr = $_POST['username'];
         $pswd = $_POST['password'];
         }
}

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
    <style>
        button{        
            padding: 10px;
            width: 15%;
            font-size: larger;
            font-weight: bold;            
            border-radius: 20px;
            background-color: #990000;
        }    
        .links{
            padding-left: 40px;
            font-size: 17px;
            color: black;
        } 
        .links:hover{            
            color: #990000;
        }       
        .text2{
            font-size: 25px;
            font-weight: lighter;
        }
    </style> 
</head>
<body style="background-image: url(https://images.unsplash.com/photo-1619262107253-774b9a27d66b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1587&q=80); background-size: cover; background-repeat:no-repeat; ">
    <div class="container">
        <div class="row" style="padding-top: 100px;">
            <div class="card col s12 l12 z-depth-2" style="border-radius: 20px;">
                <div class="card-content">
                    <div class="center-align">
                        <span style="font-size: 40px;"> <strong class="red-text text-darken-4" style="font-size: 50px;">R</strong >entWheel</span>
                        <img src="img/car-logo.png" alt="logo" width="6%">
                    </div>                                
                    <br><br>               
                    <form class="center-align container" method="POST">                             
                        <div class="input-field  center-align">
                            <i class=" material-icons prefix">person</i>
                            <input type="text" name="username" id="username" required>
                            <label for="username">Enter your username</label>
                        </div>                        
                        <div class="input-field center-align" style="margin-top:50px;">
                            <i class=" material-icons prefix">lock</i>
                            <input type="password" name="password" id="password" required>
                            <label for="password">Enter your password</label>
                        </div> 
                        <div class="right">                            
                            <a href="#" class="links">Sign up</a>   
                        </div>
                        <br><br><br><br>                        
                        <div class="buttons center-align">
                            <input type="submit" name="login" id="login" value="LOGIN" class="red darken-4 white-text btn-flat">
                        </div>                        
                    </form>                                
                </div>
            </div>
        </div>
    </div>

    <script src="js/jQuery.js"></script>
    <script src="js/materialize.js"></script>
    <script>
        $(document).ready(function(){

        });
    </script>
</body>
</html>