<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>About</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/cachestyles.css">
    <script src="main.js"></script>
</head>
<body>
        <div class="navigation">
                <nav>                  
                     <ul id="nav">
                            <li><a href="index.html"><strong>Home</strong></a></li>
                            <li><a href="cache.html"><strong>Cache</strong></a></li>
                            <li><a href="links.html"><strong>References</strong></a></li>
                            <li><a href="aboutContact.php"><strong>Contact</strong></a></li>
                          </ul>
                          </nav>
                        </div>
                        <br>
                        <div class="row">
                                <div class="column">
                                  <h2>About Me</h2>
                                  <p>My name is Mandy Powell and I am addicted to all things crochet. Here at the Crochet Cache, I intend to provide you with new weekly content consisting of a pattern tested by yours truly, and a long bit of rambling (they call it a blog) about my thoughts on said pattern. Some of these patterns will be created by me, while others will come straight from my favorite crochet sites that are listed on the References page. </p>
                                
                                  <br>
                                  <h2>Contact Me</h2>
                                  <p>Please feel free to fill out the form below to contact me with any questions or comments you might have about the Crochet Cache. Thanks for stopping by!</p>
                                  <br>
                                 
                                 
 <!-- This is to call the PHP process -->
<?php require_once "php/insert.php"; ?>
<?php
//Connection to database
$mysqli = new mysqli('localhost', 'infs3080', 'webclass', 'infs3080') or
die(mysqli_error($mysqli)); ?>
                                  
<div class="container">
  <form action="/action_page.php">
  <div class="row">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Last Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="email">Email</label>
    </div>
    <div class="col-75">
      <input type="text" id="email" name="email" placeholder="name@something.com">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="country">Country</label>
    </div>
    <div class="col-75">
      <select id="country" name="country">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Subject</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>

</body>
</html>