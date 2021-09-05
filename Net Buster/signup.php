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
        #province
        {
            font-family:cursive;
            height:35px;
            width:99%;
            padding:5px 10px;
            font-size:16px;
            border-radius:5px;
            border:1px solid gray;
        }
        #package
        {
            font-family:cursive;
            height:35px;
            width:99%;
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
            margin-bottom: 10%;
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
            border-radius: 25px;
            border: none;
            background-color: black;
            color:white;
            font-size: 14px;
            font-weight: bold;
            font-family:cursive;
        }
        .btn1:hover /* reset form btn*/
        {
            /*background-color: #ff8f00;*/
            background: linear-gradient(90deg, #0162c8, #55e7fc);
            color: white;
            border: none;
        }
        .btn2:hover /* login btn*/
        {
            /*background-color: #ff8f00;*/
            background: linear-gradient(90deg, #0162c8, #55e7fc);
            color: white;
            border: none;
        }
        .btn3:hover /* back btn*/
        {
            /*background-color: #ff8f00;*/
            background: linear-gradient(90deg, #0162c8, #55e7fc);
            color: white;
            border: none;
        }
        .linked
        {
            font-size: 12px;
            font-weight: bold;
            font-family:cursive;
            margin-left:-10px;
            
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
            .btn2 /* login btn*/
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
            .input-group input
            {
                width:98%;
            }
            .btn1 /* reset btn*/
            {
                margin-bottom:3%;
            }
            .btn2 /* login btn*/
            {
                margin-bottom:3%;
            }
            div.loginform
            {
                margin:20px auto;
                width:60%;
            }
            .btn1
            {
                height:40px;
            }
            .btn2
            {
                height:40px;                
            }
            .btn3
            {
                height:40px;                
            }
        }


    </style>
</head>
<body>
    <h1 class="headls">Net Buster</h1>

    <h1 class="headnail">Please Sign in to your Account</h1>

    <div class="loginform">
        <form method="post" action="#"  enctype="multipart/form-data">
        
            <div class="input-group">
                    <input type="text"  name="name" onfocus="this.value=''" placeholder="Enter Name"  required><br>
                    <br>
                    <input type="password"  name="password" onfocus="this.value=''" placeholder="Enter Password" required><br>
                    <br>
                    <input type="password"  name="conpassword" onfocus="this.value=''" placeholder="Enter Confirm Password" required><br>
                    <br>
                    <input type="text" name="uphone"  onfocus="this.value=''" placeholder="Enter Phone No." required><br>
                    <br>
                    <input type="text" name="ucity"  onfocus="this.value=''" placeholder="Enter City" required><br>
                    <br>
                    <select id="province">
                        <option value="">Select Province</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Sindh">Sindh</option>
                        <option value="KHP">KHP</option>
                        <option value="Balochistan">Balochistan</option>
                        <option value="Gilgit">Gilgit</option>
                    </select><br><br>
                    <select id="package">
                        <option value="">Select Package</option>
                        <option value="1200 / 1-Month">1200 / 1-Month</option>
                        <option value="2400 / 1-Month">2400 / 2-Month</option>
                        <option value="3600 / 1-Month">3600 / 3-Month</option>
                        <option value="4800 / 1-Month">4800 / 4-Month</option>
                    </select>
            </div>

            <div class="input-group">
                <br> <!-- for making some space --->
                <button class="btn1" type="reset" value="reset">Reset Form</button>
            </div>

            <div class="input-group">
                
                <button class="btn2" type="submit" value="Submit">Signup </button>
            </div>
            
            <div class="input-group">
                <button class="btn3" onclick="document.location='main.php'">Back</button>
            </div>

            <a class="linked" href="login.php">Already have a account.</a>
            

        </form>
    </div>

</body>
</html>