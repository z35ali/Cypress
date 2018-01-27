<!DOCTYPE html>
<html>
<head>

<title>Cypress System</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style> 
</style>
</head>


<body>
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card-2">
    <a href="index.html" class="w3-bar-item w3-button"><b>Cypress</b> System</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="about.html" class="w3-bar-item w3-button">About</a>
    </div>
  </div>
</div>

<?php
if(isset($_POST['username']) && isset($_POST['password']))
if($_POST['username'] == 'Civil' && $_POST['password'] == password) {
} elseif($_POST['username'] == 'Zaf' && $_POST['password'] == pass1){
} elseif($_POST['username'] == 'Dannie' && $_POST['password'] == pass2){
} elseif($_POST['username'] == 'Cassandra' && $_POST['password'] == pass3){
} elseif($_POST['username'] == 'Nishita' && $_POST['password'] == pass4){
} elseif($_POST['username'] == 'Malcolm' && $_POST['password'] == pass5){
} else {
        header('Location: fail.html');
}

?>
<br><br><br>
<h1 align="center">Welcome <?php echo ($_POST['username']) ?> </h1>
<h2 align="center">Access Granted</h2>

<br> <h2>
<a href ="civilcp.html"> Map Page
<br><br>
<a href="front.html">Front Page</a>
<br><br>
<a href ="problems.txt">Reports Page</a>
</br>
</h2>
</body>

</html>
