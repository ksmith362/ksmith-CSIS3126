<?php
	$_G_NO_LOGIN = true;
    include("header.php");
    include("global.php");
?>
 <div class="content">
        <h2>Welcome to HashtagTwitter!</h2>
        <p>You can search any hashtag and find the 15 most recent tweets in the hashtag!</p>
        <div class="content">
          <form action="LoginProcess.php" method="POST">
            Username: <input  type="text" name="username" ><br ><br />
            Password: <input type= "text" name="password" ><br ><br ><br />
            <button type="value">Log Me In Bitch</button>
          </form>
          <img src="TwitterLogo.png" alt="Walmart Bird" width="300" height="auto">
        </div>