 <html>
<head>
<title>online voting using bluetooth enabled mobile system</title>
<link rel="stylesheet" href="stylecss.css">
</head>
<body>
	<div id="img1">
		<img src="votingn.png" alt="error">
	</div>
<form action ="voting.php" method="POST" id="form" onsubmit="return validate_voting_Form()">
 <div class="onlinebox">
<p>Today's date:*<input type="date" name="date" id="date"required></p>
<p>Name:*<input type = "text" placeholder="enter your name" name="Name" id="name"required><span id="div_name"></span></p>
<div id="genderbox">
	<p>Gender:*<div id="male_female"><input type="radio" name="gender" id="male"required>Male<input type="radio" name="gender" id="female"required>Female</div></p>
</div>
<p>Student id:*<input type="text" placeholder="enter your id" name="stid" id="stid" required><span id="div_stid"></span></p>
<p>Email:*<input type="email" placeholder="enter your email"name="email" id="email"required><span id="div_email"></span></p>
<p>university:*
<select name="university"id="university"required>
<option value="">----select the university----</option>
<option value="GEU">GEU</option>
<option value="GEHU">GEHU</option>
<option value="GEHU_BHIMTAL">GEHU BHIMTAL</option>
<option value="GEHU_HALDWANI">GEHU HALDWANI</option>
</select>
</p>
<p>Choose the candidate for voting*
<select name="choose_candidate"id="candidate"required>
<option value=" ">------select a candidate-------</option>
<option value="candidate_1">candidate 1</option>
<option value="candidate_2">candidate 2</option>
<option value="candidate_3">candidate 3</option>
<option value="candidate_4">candidate 4</option>
<option value="candidate_5">candidate 5</option>
</select>
</p>
<p><input type="Submit" value="Now submit" class="submit" id="save"></p>
<p id="req">required fields are marked by *</p>
</div>
</form>
</body>
<script src="localstorage1.js">
		</script>
</html>