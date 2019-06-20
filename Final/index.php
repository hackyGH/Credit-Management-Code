<?php
      include 'dbcon.php';
      include 'includes/header.php';

?>
<div class="container">
  <div class="well">
    <table class="table table-responsive table-bordered">
      <tr>
        <th>SERIAL NO.</th>
        <th>USERS</th>
        <th>View Profile</th>
      </tr>
      <tr>
        
        <td> <?php echo $AlPacino['ID']; ?> </td>
        <td> <?php echo $AlPacino['Name']; ?> </td>
       <td> <a href="card1.php">View Profile</a> </td>
      </tr>
      <tr>
        <td> <?php echo $JohnnyDepp['ID']; ?> </td>
        <td> <?php echo $JohnnyDepp['Name']; ?> </td>
        <td> <a href="card2.php">View Profile</a> </td>
      </tr>
      <tr>
        <td> <?php echo $KevinSpacey['ID']; ?> </td>
        <td> <?php echo $KevinSpacey['Name']; ?> </td>
        <td> <a href="card3.php">View Profile</a> </td>
      </tr>
      <tr>
        <td> <?php echo $RussellCrowe['ID']; ?> </td>
        <td> <?php echo $RussellCrowe['Name']; ?> </td>
        <td> <a href="card4.php">View Profile</a> </td>
      </tr>
     <tr>
        <td> <?php echo $BradPitt['ID']; ?> </td>
        <td> <?php echo $BradPitt['Name']; ?> </td>
        <td> <a href="card5.php">view Profile</a> </td>
      </tr>
      <tr>
        <td> <?php echo $AngelinaJolie['ID']; ?> </td>
        <td> <?php echo $AngelinaJolie['Name']; ?> </td>
        <td> <a href="card6.php">View Profile</a> </td>
      </tr>
      <tr>
        <td> <?php echo $JohnTravolta['ID']; ?> </td>
        <td> <?php echo $JohnTravolta['Name']; ?> </td>
        <td> <a href="card7.php">View Profile</a> </td>
      </tr>
      <tr>
        <td> <?php echo $KateWinslet['ID']; ?> </td>
        <td> <?php echo $KateWinslet['Name']; ?> </td>
        <td> <a href="card8.php">View Profile</a> </td>
      </tr>
      <tr>
        <td> <?php echo $MorganFreeman['ID']; ?> </td>
        <td> <?php echo $MorganFreeman['Name']; ?> </td>
        <td> <a href="card9.php">View Profile</a> </td>
      </tr>
      <tr>
        <td> <?php echo $WillSmith['ID']; ?> </td>
        <td> <?php echo $WillSmith['Name']; ?> </td>
        <td> <a href="card10.php">View Profile</a> </td>
      </tr>
    </table>
  </div>
</div>
</body>
</html>
