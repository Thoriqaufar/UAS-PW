<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IKLC</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body style="background-image: url(background1.jpg); background-size: cover;">
        <main>
            <section>
                <form method="POST" action="#">
                    <table class="center box">
                        <tr>
                            <td colspan="2">
                                <h1>Register</h1>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <label for="name">Name :</label>
                                <br>
                                <input required name="name" placeholder="Your First Name">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="email">Email :</label>
                                <br>
                                <input required name="email" placeholder="Your Email">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="username">Username :</label>
                                <br>
                                <input required name="username" placeholder="Create Your Own Username">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="password">Password :</label>
                                <br>
                                <input required name="password" placeholder="Create Your Own Password">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input required type="checkbox" name="checkbox" value="on">
                                <label for="checkbox">I agree to the Terms and Conditions and Privacy Policy.</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" value="Submit">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="Login.html">Already Have an Account? Login</a>
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