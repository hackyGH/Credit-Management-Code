<?php
      include '../dbcon.php';
      include '../includes/header.php';
      $Name = $KevinSpacey["Name"];
 ?>

 <div class="container">
   <form action="KevinSpacey.php" method="post">
        <div class="form-group">
          <div>
            <label for="Name" class="form-control">Username:</label>
            <input class="form-control" type="text" name="user" value="<?php echo $KevinSpacey['Name'] ?>" placeholder="<?php echo $KevinSpacey['Name']; ?>" disabled> <br/>
            <label for="E-mail" class="form-control">Email:</label>
            <input class="form-control" type="text" name="E-mail" value="<?php echo $KevinSpacey['E-mail']; ?>" placeholder="<?php echo $KevinSpacey['E-mail']; ?>" disabled><br/>
            <label for="Credit" class="form-control">Current Credit:</label>
            <input type="text" name="currentcredit" value="<?php echo $KevinSpacey['Credit']; ?>" class="form-control" placeholder="<?php echo $KevinSpacey['Credit']; ?>" disabled><br/>
            <label for="transfer" class="form-control">How much credit you want to transfer from <?php echo $KevinSpacey['Name']; ?>?</label>
            <input type="number" name="Credit" class="form-control" ><br/>
           <select name="touser" class="form-control">
         <option>Johnny Depp</option>
  <option>Al Pacino</option>
  <option>Russell Crowe</option>
  <option>Brad Pitt</option>
  <option>Angelina Jolie</option>
  <option>John Travolta</option>
  <option>Kate Winslet</option>
  <option>Morgan Freeman</option>
  <option>Will Smith</option>
        </select>

            <input type="submit" name="transfer" value="Transfer Credit" class="btn btn-success">
          </div>
        </div>
   </form>
 </div>

<?php

    if (isset($_POST['transfer'])) {
      $touser = $_POST['touser'];
      $Credit = $_POST['Credit'];
      $q = " SELECT * FROM `name` WHERE '$touser' = `Name` ";
      $r = mysqli_query($con, $q);
      if (mysqli_num_rows($r) < 1) {
        ?>
        <script type="text/javascript">
          alert("User doesnot Exist!");
          window.open("KevinSpacey.php", "_self");
        </script>
        <?php
      }
      $s = mysqli_fetch_assoc($r);
      $t = (int)$KevinSpacey['Credit'];
      if ($t < $_POST['Credit']) {
        ?>
          <script type="text/javascript">
            alert("Not Enough Credit!");
            window.open("KevinSpacey.php", "_self");
          </script>
        <?php
      }
      else{
        $transfered = $t - $Credit;
        $updated = intval($s['Credit']) + $transfered;
        $v = " UPDATE `name` SET `Credit`= $updated WHERE `Name` = '$touser' ";
        $w = mysqli_query($con, $v);
        $x = " UPDATE `name` SET `Credit`= $transfered WHERE `Name` = 'KevinSpacey' ";
        $y = mysqli_query($con, $x);

        ?>
          <script type="text/javascript">
            alert("Credit Transfered!");
          </script>
        <?php
      }
    }

 ?>

<?php include '../includes/footer.php'; ?>
