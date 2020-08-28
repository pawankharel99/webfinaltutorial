<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .submit{
            background-color:blue;
            color:white;
        }
        
        .container{
            border:1px solid grey;
            padding:5px;
        }
    </style>
</head>
<body>
    <div class='container'>
        <h1>Login</h1>
        <form action="validation.php" method='post'>
            <input type="text" name="user">
            <input type='password' name='password'>

            <button type="submit" class='submit'>Login</button>
            <p>Don't have an account?</p><a href="signup.php">Sign up now</a>
        </form>
    </div>
</body>
</html>