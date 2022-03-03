<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Playball&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <img src="registerimage.png" alt="error while loading image">
    <h2 id="registerh2">enter your details and register yourself</h2>
    <nav id="mainbox">
    <form action="signuphelp.php" method="POST" id="submainbox" onsubmit="return validateForm()">
        <div class="row">Name*:<input type="text" placeholder="enter your name" name="name" id="stud_name" required><div id="span_name"></div></div>
        <!-- <div class="row">Gender*:<input type="radio" name="gender" id="male"required>Male<input type="radio" name="gender" id="female" required>Female</div> -->
        <div class="row">Student id*:<input type="number" placeholder="enter the student id"name="id" id="stud_id" required><div id="span_number"></div></div>
        <div class="row">Email*:<input type="email" placeholder="enter your email" name="email" id="stud_email"required><div id="span_email"></div></div>
        <div class="row">password*:<input type="password" placeholder="enter your password" name="pswrd" id="stud_pswrd"required><div id="span_pswrd"></div></div>
        <div class="row">confirm password*:<input type="password" placeholder="Re-enter your password" name="cpswrd" id="stud_re_pswrd"required><div id="span_re_pswrd"></div></div>
        <div class="row">Nickname*:<input type="password" placeholder="enter your Nickname" name="nickname" id="stud_nickname"required><div id="span_re_nickname"></div></div>
        <div class="row">university*:
            <select name="" id="stud_university">
            <option value="">----select the university----</option>
            <option value="GEU">GEU</option>
            <option value="GEHU">GEHU</option>
            <option value="GEHU_BHIMTAL">GEHU BHIMTAL</option>
            <option value="GEHU_HALDWANI">GEHU HALDWANI</option>
            </select>
        </div>
        <button id="btn">Submit Now</button>
    </form>
    <section id="submainbox2">
        we welcome you in our community....your vote is precious for us also we want you to enter the details carefully so that your vote can be counted. At last but not the least we want you to be blessed and stay safe.
    </section>
   </nav>
</body>
<script src="localstorage1.js"></script>
</html>