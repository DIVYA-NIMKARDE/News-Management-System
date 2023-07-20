<html>
    <head>
    <title>feedback</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <style>
        body{
            background-image: url("images/2.jpg");
            background-repeat: repeat;
            background-size: cover;
            height: 100%;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 15px;
            overflow: hidden;
            background-color: black;
        }

        li{
            display: inline;
            
        }

        li a {
            
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: gray;
            color: black;
            font-size: 18px;
        }
        .floatleft {
            float:left;
        }
        .floatright {
            float:right;
        }
        .box{
            background-color: white;
        }
       

    </style>

    </head>
    <body>
        
     
        <ul>
        <div class="floatleft">   
            <li><a href="" style="align:left">WORLD TODAY</a></li>
          </div>  
        
        <div class="floatright">
            <li><a href="aboutus.php" >About us</a></li>
            <li><a href="contactus.php" class="titles">Contact us</a></li>
            <li><a href="newlogin.php" class="titles">Login</a></li>
            <li><a href="newsignup.php" class="titles">Sign-up</a></li> 
            <li><a href="feedback" class="titles">Feedback</a></li>
            <li><a href="logout.php" class="titles">Logout</a></li>
         </div>
         </ul>
       
         <div class="container">
        <div class="box" style="margin-top : 10px;">
            <h1 class="text-center text-white p-3" style="background-color: black; font-family: 'Courier New', Courier, monospace; font-weight: bolder;">Feedback</h1>
            <hr>

            <div class="row">
                <div class="col-md-7 p-3">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                        <div class="formgroup m-3">
                            <input type="text" class="form-control" placeholder="Enter your name">
                        </div>

                        <div class="formgroup m-3">
                            <input type="email" class="form-control" placeholder="Enter your email">
                        </div>
                        <div class="formgroup m-3">
                            <textarea name="" id="" cols="65" rows="5" placeholder="Type your enquiries here"></textarea>
                        </div>
                        <div class="formgroup text-center">
                            <button onclick="myFunction()">Submit</button>
                            <script>
                                function myFunction() {
                                  alert("Are you sure you want to continue?");
                                }
                                </script>
                                
                        </div>
                    </form>
                </div>

                <div class="col-md-5 p-5">
                    <h2 class="text-center" style="font-family: 'Courier New', Courier, monospace; color: rgb(3, 27, 29); font-weight: bolder;">
                        <i class="fas fa-map-marker-alt"></i> World Today <br>
                        <small class="h5" style="font-weight: bolder;"> Pune, Maharashtra</small> <br>
                        <small class="h5" style="font-weight: bolder;">411051</small>
                        
                    </h2>
                    <br>

                   <h2 class="text-center" style="font-size:20px;font-family: 'Courier New', Courier, monospace; color: black; font-weight: bolder;">
                   <span><i class="fas fa-phone-square-alt"></i>(020)2435374400 <br> <br></span>
                    </h2>

                    <h3 class="text-center" style="font-family: 'Courier New', Courier, monospace; color: rgb(3, 27, 29); font-weight: bolder;">
                        <i class="fas fa-envelope"></i>
                       <span style="font-size: 20px;"> worldtoday@gmail.com</span>
                    </h3>
                </div>
            </div>
        </div>

    </div>

    </body>    


</html>