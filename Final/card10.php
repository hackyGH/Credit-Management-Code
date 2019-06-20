<?php
      include 'dbcon.php';
      include 'includes/header.php';
      ?>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 900px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: green;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: green;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">User Profile</h2>

<div class="card">
  <h1><?php echo $WillSmith['Name']; ?></h1>
        <p class="E-mail" title="E-mail">E-mail:-<?php echo $WillSmith['E-mail']; ?></p>
        <p class="Monile No.">Mobile No.:-<?php echo $WillSmith['Mobile No.']; ?></p>
        <p class="Current Credit">Current Credit:-<?php echo $WillSmith['Credit']; ?></p> 
  <p><button type="button"> <a href="users/WillSmith.php">Transfer Credit</a></button></p>
</div>

</body>
</html>
