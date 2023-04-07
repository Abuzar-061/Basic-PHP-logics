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
            background-color: blue;
        }
        .login{
            width: 40%;
            height: 40vh;
            display: flex;
            background-color: whitesmoke;
            justify-content: space-evenly;
            align-items: center;
            flex-direction: column;
            border: 2px solid black;
            border-bottom-right-radius: 100px;
            border-top-left-radius: 100px;
        }
        input[type="submit"]{
            width: 50%;
            height: 30px;
            border: 1px solid gray;
            border-radius: 20px;
            cursor: pointer;
        }
        input[type="email"],input[type="password"]{
            width: 80%;
            height: 30px;
            padding: 0 20px;
        }

    </style>
</head>
<body>
    <div class="container">
        <form action="connection-login.php" method="post" class="login">
        <h1>Form</h1>
        
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password"> 
            <input type="submit" name="Login" value="LOGIN">
        </form>
    </div>
</body>
</html>