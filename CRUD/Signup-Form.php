<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            width: 100%;
            height: 100vh;
            align-items: center;
            justify-content: center;
            display: flex;
            background-color: #0c1022;
        }
        .login{
            min-width: 400px;
            height: 70vh;
            display: flex;
            background-color: transparent;
            justify-content: space-evenly;
            align-items: center;
            flex-direction: column;
            border: 2px solid #00ccff;
            border-bottom-right-radius: 100px;
            border-top-left-radius: 100px;
        }
        input[type="submit"]{
            width: 50%;
            height: 30px;
            border: 1px solid #00ccff;
            color: #00ccff;
            background-color: transparent;
            border-radius: 20px;
            cursor: pointer;
        }
        input[type="username"],input[type="password"],input[type="email"],:checked{
            width: 80%;
            height: 30px;
            padding: 0 20px;
            background-color: transparent;
            border: 0;
            border-bottom: 1px solid #00ccff;
            outline: none;
            color: #00ccff;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <form action="connection-signup.php" method="POST" class="login">
        <h1 style="color:#00ccff">SIGN-UP Form</h1>
            <input type="username" name="firstname" placeholder="FirstName" required> 
            <input type="username" name="lastname" placeholder="LastName" required> 
            <input type="email" name="email" placeholder="Email" required> 
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" name="signup" value="SIGN-UP">
        </form>
    </div>
</body>
</html>