<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Animated Login From</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            letter-spacing: 1px;
            background-color: #0c1022;
        }

        .login_form_container {
            position: relative;
            width: 400px;
            height: 470px;
            max-width: 400px;
            max-height: 470px;
            background: #040717;
            border-radius: 50px 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            margin-top: 70px;
        }

        .login_form_container::before {

            position: absolute;
            width: 170%;
            height: 170%;
            content: '';
            background-image: conic-gradient(transparent, transparent, transparent, #ee00ff);
            animation: rotate_border 6s linear infinite;

        }

        .login_form_container::after {

            position: absolute;
            width: 170%;
            height: 170%;
            content: '';
            background-image: conic-gradient(transparent, transparent, transparent, #00ccff);
            animation: rotate_border 6s linear infinite;
            animation-delay: -3s;
        }

        @keyframes rotate_border {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .login_form {
            position: absolute;
            content: '';
            background-color: #0c1022;
            border-radius: 50px 5px;
            inset: 5px;
            padding: 50px 40px;
            z-index: 10;
            color: #00ccff;

        }

        h2 {
            font-size: 40px;
            font-weight: 600;
            text-align: center;
        }

        .input_group {
            margin-top: 40px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: start;
        }

        .input_text {
            width: 95%;
            height: 30px;
            background: transparent;
            border: none;
            outline: none;
            border-bottom: 1px solid #00ccff;
            font-size: 20px;
            padding-left: 10px;
            color: #00ccff;

        }

        ::placeholder {
            font-size: 15px;
            color: #00ccff52;
            letter-spacing: 1px;

        }

        .fa {
            font-size: 20px;
        }

        #login_button {
            position: relative;
            width: 300px;
            height: 40px;
            transition: 1s;
            margin-top: 70px;


        }

        #login_button input {
            color: #00ccff;
            position: absolute;
            width: 100%;
            height: 100%;
            text-decoration: none;
            z-index: 10;
            cursor: pointer;
            font-size: 22px;
            letter-spacing: 2px;
            border: 1px solid #00ccff;
            border-radius: 50px;
            background-color: #0c1022;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .fotter {
            margin-top: 30px;
            display: flex;
            justify-content: space-between;

        }

        .fotter a {
            text-decoration: none;
            cursor: pointer;
            font-size: 18px;
            color:#00ccff;
        }
        #eye{
            cursor: pointer;
            z-index: 1000;
        }
    </style>
</head>

<body>
    <div class="login_form_container">
        <form action="Login-Connection.php" method="post" class="login_form">
            <h2>Login</h2>
            <div class="input_group">
                <i class="fa fa-user" id="user"></i>
                <input type="text" id="email" placeholder="Email" name="email" class="input_text" autocomplete="on">
            </div>
            <div class="input_group">
                <i class="fa fa-unlock-alt" id="lock"></i>
                <input type="password" id="password" name="password" placeholder="Password" class="input_text" autocomplete="on">
                <a class="password-visibility"><i id="eye" class="fas fa-eye"></i></a>
            </div>
            <div class="button_group" id="login_button">
                <input type="submit" name="send" value="Submit">
            </div>
            <div class="fotter">
                <a href="Signup-Form.php">Forgot Password ?</a>
                <a href="Signup-Form.php">Sign-Up</a>
            </div>
        </form>
    </div>

    
    <script>
        var input = document.getElementById("email");
        var useri = document.getElementById("user");
        var password = document.getElementById("password");
        var passwordi = document.getElementById("lock");
        var password_visibility = document.getElementById("eye");

        input.addEventListener("focus", ()=>{
            useri.style.textShadow = "0 0 20px #00ccff , 0 0 40px #00ccff, 0 0 60px #00ccff";
        });
        input.addEventListener("focusout",()=>{
            useri.style.textShadow= "none";
        });

        password.addEventListener("focus", ()=>{
            passwordi.style.textShadow = "0 0 20px #00ccff , 0 0 40px #00ccff, 0 0 60px #00ccff";
        });
        password.addEventListener("focusout",()=>{
            passwordi.style.textShadow= "none";
        });

        password_visibility.addEventListener("click",()=>{
            if(password.type == "password"){
                password.type = "text";
            }else{
                password.type = "password";
            }
        })
    </script>
</body>

</html>