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
        .reset{
            background-color:white;
            color:black;
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
        <small>Please fill this form to create an account.</small>
        <form action="registration.php" method='post'>
            <label for='user'>Username</label>
            <input type="text" id='user' name="user">
            <label for='pass'>Password</label>
            <input type='password' id='pass' name='password'>

            <button type="submit" class='submit'>SignUp</button>
            <button type="reset" class='reset'>Reset</button>
            <p>Already have an account ? </p> <a href="./login.php">Login here</a>
        </form>
    </div>
</body>
</html>