


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>create Account</title>
</head>
<body>
<main>
    <form action="register.php" method="post">
        <h1>Create Account</h1>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="phone">phone:</label>
            <input type="text" name="phone" id="phone">
        </div>
        <div>
        <label for="address">address:</label>
        <textarea class="form-control" name="address" rows="5" placeholder="address" required></textarea>
        </div>
        <button type="submit">Register</button><br>
        <button type="submit">submit</button><br>
    
        <div class="input-group mt-3">
            <b>Already have an Account ? <a href="login.php">Login here </a>
            </div>
    </form>
</main>
</body>
</html>