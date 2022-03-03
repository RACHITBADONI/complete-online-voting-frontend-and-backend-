<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lost_page</title>
    <link rel="stylesheet" href="lostpage.css">
</head>
<body>
        <nav id="topbox">
            <img src="image5.png" alt="error while loading image">
            <li><a href="index.php">home</a></li>
            <li><a href="help.php">help</a></li>
            <li><a href="contact.php">contact us</a></li>
        </nav>
        <form action="lostp.php" method="POST" onsubmit="return check()">
            <section id="mainbox">
          <section id="box1">
             <div>Student id*
                 <input type="number" placeholder="enter your student id" id="stuid" name="sid" required>
             </div>
             <div>Email*
                <input type="email" placeholder="enter your email" name="semail" required>
             </div>
             <div>Nickname*
                 <input type="text" placeholder="enter your Nickname" name="snickname" required>
             </div>
             <div>New password*
                 <input type="text" placeholder="enter your New password" name="snewp" required>
             </div>
          </section>
          <section id="box2">
              <h3>keep patience</h3>
              <p>“The two hardest tests on the spiritual road are the patience to wait for the right moment and the courage not to be disappointed with what we encounter.”
              </p>
          </section>
        </section>
        <button id="btn">submit</button>
        </form>
</body>
<script src="localstorage1.js"></script>
</html>