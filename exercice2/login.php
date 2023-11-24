<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Login Form</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        header {
            background-color:cornflowerblue;
            color: black;
            padding: 10px;
display: flex; justify-content: space-between;
        }

        .login-container {
            border: 3px solid black;
            width: fit-content;
            text-align: center;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.1);
        }
a{
    color: black;
    text-decoration: none;
    border: 1px solid black;
    border-radius: 5px ;
    box-shadow: 2px 2px 2px grey;
}
        footer {
            margin-top: 50px;
            width: 95%;
        }
    </style>
</head>
<body>

<header>
    <h1>Hanouti</h1>
    <nav><a href="logout.php" >Logout</a></nav>
</header>

<div class="container login-container">
    <form style="width: 300px; margin: 0 auto;">
        <h2 class="mb-3">Login</h2>
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email adresse ..." required>
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Mot de Passe</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Mot de Passe ..." required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>
