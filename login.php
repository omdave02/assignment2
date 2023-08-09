




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
      <title>login</title>
</head>
<body>
<main>
    <form action="register.php" method="post">
        <h1>login</h1>
       
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div><br>
       
        <div class="input-group mt-3">
                <input type="submit" name="add_login" value="Login" class="btn btn-md btn-primary text-white">
              

            </div><br>

          
            <div class="input-group mt-3">
            <b>Dont  have an Account ? <a href="createaccount.php">Create account </a>
            </div>
    
    </form>
</main>
</body>
</html>