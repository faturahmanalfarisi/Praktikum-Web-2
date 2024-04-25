<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa; /* Warna latar belakang */
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        padding: 0;
    }

    .login-container {
        background-color: #343a40; /* Warna latar belakang kontainer */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        width: 300px;
        text-align: center;
        transition: transform 0.3s ease;
    }

    .login-container:hover {
        transform: translateY(-5px);
    }

    .login-container input[type="email"],
    .login-container input[type="password"] {
        width: calc(100% - 40px);
        padding: 10px;
        margin: 10px 0;
        border-radius: 5px;
        border: none;
        background-color: #fff; /* Warna latar belakang input */
    }

    .login-container button[type="submit"] {
        width: calc(100% - 40px);
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #fff; /* Warna tombol submit */
        color: #343a40; /* Warna teks tombol submit */
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .login-container button[type="submit"]:hover {
        background-color: #e9ecef; /* Warna saat tombol submit dihover */
    }
</style>

</head>

<?php
if(isset($_POST["submit"])){
    require_once "dbkoneksi.php";

    $user = $dbh->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $user->execute([
        $_POST["email"], $_POST["password"],
    ]);
    // var_dump($user->fetch());
    $count = $user->rowCount(); //untuk memastikan user tersedia atau tidak

    if($count > 0){
        session_start();

        $_SESSION["user"] = $user->fetch();
        header("location:index.php");
    }else { //jika login gagal
        header("location:login.php");
    }
}
?>

<body>
    <div class="login-container">
        <form action="" method="POST">
            <div>
                <label for="">Email</label>
                <input type="email" name="email" required>
            </div>
            <br>
            <div>
                <label for="">Password</label>
                <input type="password" name="password" required>
            </div>
            <br>
            <div>
                <button type="submit" name="submit">Login</button>
            </div>
        </form>
    </div>
</body>
</html>