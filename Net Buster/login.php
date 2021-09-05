<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Net Buster</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .headnail
        {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            font-family:cursive;
            padding-top:10%;
            /*text-decoration: underline;*/
        }
        div.loginform
        {
            width:80%;
            margin:50px auto;
            padding:20px;
            border:4px solid #d50000;
            background:white;
            border-radius:10px  0px 10px 0px;
        }
        .input-group input
        {
            font-family:cursive;
            height:20px;
            width:92%;
            padding:5px 10px;
            font-size:16px;
            border-radius:5px;
            border:1px solid gray;
        }
        .btn1 /* reset btn*/
        {
            height:30px;
            width:60%;
            margin-left:20%;
            border-radius:10%;
            border-radius: 25px;
            border: none;
            background-color: black;
            color:white;
            font-size: 14px;
            font-weight: bold;
            font-family:cursive;
        }
        .btn2 /* login btn*/
        {
            height:30px;
            width:60%;
            margin-left:20%;
            border-radius:10%;
            border-radius: 25px;
            border: none;
            background-color: black;
            color:white;
            font-size: 14px;
            font-weight: bold;
            font-family:cursive;
        }
        .btn3 /* back btn*/
        {
            height:30px;
            width:60%;
            margin-left:20%;
            
            
            border-radius:10%;
            border-radius: 25px;
            border: none;
            background-color: black;
            color:white;
            font-size: 14px;
            font-weight: bold;
            font-family:cursive;
        }
        .btn1:hover /* reset btn*/
        {
            /*background-color: #ff8f00;*/
            background: linear-gradient(90deg, #0162c8, #55e7fc);
            color: black;
            border: none;
        }
        .btn2:hover /* login btn*/
        {
            /*background-color: #ff8f00;*/
            background: linear-gradient(90deg, #0162c8, #55e7fc);
            color: black;
            border: none;        
        }
        .btn3:hover /* back btn*/
        {
            /*background-color: #ff8f00;*/
            background: linear-gradient(90deg, #0162c8, #55e7fc);
            color: black;
            border: none;        
        }
        .linked
        {
            font-size: 14px;
            font-weight: bold;
            font-family:cursive;
            margin-left:-10px;
            margin-top: 50px;
            
        }
        .linked:hover
        {
            color:red;
        }

        
        @media only screen and (min-width: 768px) 
        {
            .input-group input
            {
                width:96%;
            }
            .btn1 /* reset btn*/
            {
                margin-bottom:3%;
            }

        }

        @media only screen and (min-width: 1000px) 
        {
            .headnail
            {
                padding-top:1%;
            }
            div.loginform
            {
                margin:20px auto;
                width:40%;
            }
            .input-group input
            {
                width:98%;
            }
            .btn1 /* reset btn*/
            {
                margin-bottom:3%;
                height:40px;
                outline:none;
            }
            .btn2 /* login btn*/
            {
                margin-bottom:3%;
                height:40px;
                outline:none;
            }
            .btn3 /* back btn*/
            {
                margin-bottom:3%;
                height:40px;
                outline:none;
            }

        }


    </style>
</head>
<body>
    <h1 class="headls">Net Buster</h1>

    <h1 class="headnail">Please Login to your Account</h1>

    <div class="loginform">
        <form method="post" action="#"  enctype="multipart/form-data">
        
            <div class="input-group">
                    <input type="text"  name="adname" onfocus="this.value=''" placeholder="Enter Name" required><br>
                    <br>
                    <input type="password"  name="adpassword" onfocus="this.value=''" placeholder="Enter Password" required>		
            </div>

            <div class="input-group">
                <br>
                <button class="btn1" type="reset" value="reset">Reset </button>
            </div>

            <div class="input-group">
                <button class="btn2" type="submit" value="Submit">Login </button>
            </div>
            
            <div class="input-group">
                <button class="btn3" type="button" onclick="document.location='main.php'">Back</button>
            </div>

            <a class="linked" href="login.php">Forget Password</a>

        </form>

    </div>

</body>
</html>

