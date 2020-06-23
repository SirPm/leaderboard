<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up Page</title>

    <style>


        #logo{
            background: #6ADBE5;
            color: white;
            padding: 5px;
            padding-top: 0px;
            font-size: 40px;
            margin-left: 10px;
            border: 1px solid grey;
        }
        #logoText{
            margin-left: 1000px;
            color: grey;
            font-size: x-large;
        }

        form{
            background: #adbcbc;
            width: 40%;
            margin: 50px auto;
            padding-top: 30px;
            padding-bottom: 60px;
            padding-left: 120px;
            border-radius: 50px;
            /* padding-right: 120px; */
            height: 60vh;
        }
        form p{
            margin-left: 100px;
            margin-top: 40px;
            color: grey;
        }

        #user{
            border: 2px solid rgb(224, 219, 219);
            border-top: none;
            border-left: none;
            border-right: none;
            margin-top: 30px;
            margin-left: 100px;
            background: transparent;
        }
        #pw{
            border: 2px solid rgb(224, 219, 219);
            border-top: none;
            border-left: none;
            border-right: none;
            margin-top: 30px;
            margin-left: 100px;
            background: transparent;
        }

        button{
            border: 1px solid #adbcbc;
            border-radius: 1px;
            margin-top: 10px;
            margin-left: 100px;
            padding-left: 70px;
            padding-right: 70px;
            border-radius: 50px;
            height: 5vh;
        }
        button:hover{
            background: black;
            color: white;
        }

        @media screen and (max-width: 900px) {
            
            header{
                margin-top: 20px;
            }

            #logo{
            background: #6ADBE5;
            color: white;
            padding: 5px;
            padding-top: 0px;
            font-size: 40px;
            margin-left: 10px;
        }
        #logoText{
            margin-left: 190px;
            color: grey;
            font-size: large;
        }

            form p{
            margin-left: -50px;
            /* margin-top: 40px;
            color: grey; */
        }

        #user{
            /* border: 1px solid white;
            border-top: none;
            border-left: none;
            border-right: none;
            margin-top: 30px; */
            margin-left: -50px;
            background: transparent;
        }
        #pw{
            /* border: 1px solid white;
            border-top: none;
            border-left: none;
            border-right: none;
            margin-top: 30px; */
            margin-left: -50px;
            background: transparent;
        }

        button{
            /* border: 1px solid #adbcbc;
            border-radius: 1px;
            margin-top: 10px; */
            margin-left: -50px;
            /* padding-left: 70px;
            padding-right: 70px;
            border-radius: 50px;
            height: 5vh; */
        }

        }

        @media screen and (max-width: 380px) {
            
        }
        #logoText{
            margin-left: 100px;
            color: grey;
            font-size: large;
        }

            form p{
            margin-left: -80px;
        }

        #user{
            margin-left: -80px;
            background: transparent;
        }
        #email{
            margin-left: -80px;
            background: transparent;
        }
        
        #pw{
            margin-left: -80px;
            background: transparent;
        }

        button{
            margin-left: -80px; 
        }

        }


    </style>

</head>
<body>
    
    <header>
        <span id="logo">[]</span> <span id="logoText">HNG LEADERBOARD</span>
    </header>

    <form method="POST" action="login_Process.php">
        <p>LOGIN</p>

        <input type="text" name="email" placeholder="email" id="user">
        <br><br><br>
        <input type="password" name="password" placeholder="Password" id="pw">
        <br><br><br>
        <button type="submit" >Login</button>
    </form>

</body>
</html>