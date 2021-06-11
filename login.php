<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body style="background-image: url(image/background1.jpg); background-size: cover;">
        <main>
            <section>
                <form method="POST" action="aksi_login.php">
                    <table class="center box">
                        <tr>
                            <td><h1>Login</h1></td>
                        </tr>
                        <tr>
                            <td>
                                <label for="username">Username :</label>
                                <br>
                                <input name="username" type="text" placeholder="Your Username">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="password">Password :</label>
                                <br>
                                <input name="password" type="password" placeholder="Your Password">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input required type="checkbox" name="checkbox" value="on">
                                <label for="checkbox">Keep me login later</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input class="button" type="submit" value="Login">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="Register.html">Create a new Account</a>
                            </td>
                        </tr>
                    </table>
                </form>
            </section>
        </main>
    </body>

    <footer>
        <p>&copy; 2021 IKLC All RIghts Reserved.</p>
    </footer>
</html>