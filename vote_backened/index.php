<html>
    <head>
        <title>online voting</title>
        <link rel="stylesheet" href="logincss.css">
    </head>
        <body>
            <nav id="topbox">
                <img src="image5.png" alt="error while loading image">
                <li><a href="index.php">home</a></li>
                <li><a href="help.php">help</a></li>
                <li><a href="contact.php">contact us</a></li>
            </nav>
            <div class="container">
                <img src="login1.png" id="loginu">
                <div class="loginbox">
                    <h1>Login Here</h1>
                    <form action="phpindex.php" method="POST" onsubmit="return fdata()">
                        <p>Username*</p>
                        <input type="text" placeholder="enter username"id="username" name="username" required>
                        <p>Password*</p>
                        <div>
                            <input type="password" placeholder="enter password"id="password" name="pass" required>
                        </div>
                        <div>
                            <input type="submit" name=""value="Login" id="loginboxid">
                        </div>
                        <div class="lower"><a href="lostpage.php">Lost your password?</a></div>
                        <div class="lower"><a href="register.php">don't have an account?</a></div>
                    </form>
                </div>
            </div>
        </body>
        <script src="localstorage1.js"></script>
</html>
