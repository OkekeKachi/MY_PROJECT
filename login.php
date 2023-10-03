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
                        <img src="img/car-removebg-preview.png" alt="logo" width="6%">
                    </div>                                
                    <br><br>               
                    <form class="center-align container" >                             
                        <div class="input-field  center-align">
                            <i class=" material-icons prefix">person</i>
                            <input type="text" id="fname">
                            <label for="fname">Enter your username</label>
                        </div>                        
                        <div class="input-field center-align" style="margin-top:50px;">
                            <i class=" material-icons prefix">lock</i>
                            <input type="password" id="lname">
                            <label for="lname">Enter your password</label>
                        </div> 
                        <div class="right">                            
                            <a href="#" class="links">Sign up</a>   
                        </div>
                        <br><br><br><br>                        
                        <div class="buttons center-align">
                            <button class="white-text"><a href="index.php" class="white-text">LOGIN</a></button>
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