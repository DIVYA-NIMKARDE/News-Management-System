<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

            echo '<script>alert("Signed up successfully !"); window.location = "home.php";</script>';
			die;
		}else
		{
            echo '<script>alert("Please enter valid information!"); window.location = "signup.php";</script>';
		}
	}
?>



<html>
    <head>
    <link rel="stylesheet" href="/style.css">
    <style>
        body{
            background-image: url('images/2.jpg');
            background-repeat: repeat;
            background-size: cover;
            height: 100%;
            width: 100%;
        }
        .box{
            width: 500px;
            height: 600px;
            border: 5px solid black;
            padding: 10px;
            
            margin-top: 10px;
            margin-bottom : 0px;
            background-color: black;
            margin-left: 270px;
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
       .login{
           text-align:center;
       }
       input[type=text] {
            width: 250px;
            padding: 12px 10px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        input[type=password] {
            width: 250px;
            padding: 12px 10px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        input[type=submit]{
            text-align:center;

        }
        .display{
            width:750px;
            height:100px;
            text-align:center;
            border:5px solid white;
            margin-left : 100px;
            margin-top : 20px;
            margin-right : 20px;
            padding: 30px;
            background-color: black;
            color: white;
            font-size: 25px;
        }
        .sub-class{
            width= 100px;
            height= 50px;
            border: 5px solid black;
            padding: 30px;
            margin: 00px;
            background-color: white;
        }
        .login{
            width:200px;
            height: 50px;
            border: 2px solid black;
            padding : 5px;
            text-align: center;
            margin-left: 150px;
            background-color: black;
            color: white;
        }
        .error {color: #FF0000;}
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
            <li><a href="feedback.php" class="titles">Feedback</a></li>
         </div>
         </ul>

        <div class="box">
                <div class="center" style="text-align:center;">
                <h1 class="login">Signup</h1>
                <div class="sub-class">
                <form method = "post" action = "<?php 
         echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         <table>
            <tr>
               <td>Userame:</td>
               <td><input type = "text" name = "user_name">
                  <!--<span class = "error">* <?php echo $nameErr;?></span>-->
               </td>
            </tr>
           
            <tr>
               <td>Password </td>
               <td><input type = "password" name = "password">
                 <!-- <span class = "error">* <?php echo $emailErr;?></span>-->
               </td>
            </tr>
           
        
			
        <td>
              <input type = "submit" name = "submit" value = "Sign up">
            </td>
		  		
         </table>
			
      </form>
      <h3>Already have an account?</h3>
      <a href="newlogin.php" style="color: blue">Login here</a>
      
                </div>
                </div>
        </div>
</body>
</html>