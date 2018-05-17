<?php
$con=mysqli_connect('localhost','root','Admin619','arokia');
?>
<?php
extract($_POST);
if(isset($caseOne)){
  if(isset($deleteOne)){
    $trun="TRUNCATE TABLE cases";
    $suc=mysqli_query($con,$trun) or die(mysql_error($con));
  }
$count=count($case1data);
for($i=0;$i<$count;$i++){
  $insert = "insert into cases(no) values($case1data[$i])";
  $query  = mysqli_query($con,$insert) or die(mysql_error($con));
}
if($query){
  $msg= "CaseOne data Inserted successfully";
}
}


if(isset($caseTwo)){
  if(isset($deleteTwo)){
    $trun="TRUNCATE TABLE cases";
    $suc=mysqli_query($con,$trun) or die(mysql_error($con));
  }
$count=count($case2data);
for($i=0;$i<$count;$i++){
  $insert = "insert into cases(no) values($case2data[$i])";
  $query  = mysqli_query($con,$insert) or die(mysql_error($con));
}
if($query){
  $msg= "CaseTwo data Inserted successfully";
}
}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Coding Challange</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<style media="screen">
  .col-sm-4{
    padding:10px;
    margin:10px;
  }
  h1{
    text-align:center;
  }
  .menu{
    background:#17a2b8;
    padding:10px;
    color:white;
  }
</style>

</head>
<body>
<div class="menu">
  <h1>Coding Challange</h1>
  <!-- <a href="version2.php" style="float:right;margin-top:-1cm;color:white;">Version two</a> -->
</div>
<div class="container">
<div class="row">
    <div class="col-sm-2"></div>
  <div class="col-sm-4">
<div class="card">

  <div class="card-header">
<h1 class='text-info'>Case One</h1>

  </div>
  <div class="card-body">
  <form action="" method="post">
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="checkbox" name="case1data[]" class="form-check-input" value="1"

        <?php
        // if(isset($_POST['case1data']) && isset($_POST['caseOne']))
        // echo $_POST['case1data'];
         // echo "checked='checked'";
          ?>
         >1
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="case1data[]" value="2"
        <?php
        // if(isset($_POST['case1data']) && isset($_POST['caseOne']))
        //  echo "checked='checked'";
          ?>
          >2
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" value="3" name="case1data[]"
        <?php
        // if(isset($_POST['case1data']) && isset($_POST['caseOne']))
        //  echo "checked='checked'";
          ?>
        >3
      </label>
    </div>
<br>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="case1data[]" value="4"
    <?php

    if(isset($_POST['case1data']) && isset($_POST['caseOne'])){
    $data = $_POST['case1data'];
    if($data==4)
     echo "checked='checked'";
   }

      ?>
    >4
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="case1data[]" value="5"
    <?php
   //  if(isset($_POST['case1data']) && isset($_POST['caseOne'])){
   //  $data = $_POST['case1data'];
   //  if($data==5)
   //   echo "checked='checked'";
   // }
      ?>
    >5
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="case1data[]" value="6"
    <?php
   //  if(isset($_POST['case1data']) && isset($_POST['caseOne'])){
   //  $data = $_POST['case1data'];
   //  if($data==6)
   //   echo "checked='checked'";
   // }
      ?>
    >6
  </label>
</div>
<br>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="case1data[]" value="7"
    <?php
    // if(isset($_POST['case1data']) && isset($_POST['caseOne']))
    //  echo "checked='checked'";

      ?>
    >7
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="case1data[]" value="8"
    <?php
    // if(isset($_POST['case1data']) && isset($_POST['caseOne']))
    //  echo "checked='checked'";
      ?>
    >8
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="case1data[]" value="9"
    <?php
    // if(isset($_POST['case1data']) && isset($_POST['caseOne']))
    //  echo "checked='checked'";
      ?>
    >9
  </label>
</div>

</div>
<div class="card-footer">
  <div class="row">
    <div class="col-sm-1"></div>
        <div class="col-sm-7">
          <input type="checkbox" class="form-check-input" name="deleteOne" id="one" value="8" onclick="myFunction1()">
          <span>delete previus records</span>
        </div>
    <div class="col-sm-2">
  <button type="submit" class="btn btn-info" name="caseOne">Submit</button>
</div>
</div>
</div>
  </form>


</div>
</div>


  <div class="col-sm-4">
<div class="card">

  <div class="card-header">
<h1 class='text-info'>Case Two</h1>
  </div>
  <div class="card-body">
  <form action="" method="post">
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="checkbox" name="case2data[]" class="form-check-input" value="1"
        <?php
        // if(isset($_POST['one']) && isset($_POST['caseTwo']))
        //  echo "checked='checked'";
          ?>
         >1
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="case2data[]" value="2"
        <?php
        // if(isset($_POST['two']) && isset($_POST['caseTwo']))
        //  echo "checked='checked'";
          ?>
          >2
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" value="3" name="case2data[]"
        <?php
        // if(isset($_POST['three']) && isset($_POST['caseTwo']))
        //  echo "checked='checked'";
          ?>
        >3
      </label>
    </div>
<br>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="case2data[]" value="4"
    <?php
    // if(isset($_POST['four']) && isset($_POST['caseTwo']))
    //  echo "checked='checked'";
      ?>
    >4
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="case2data[]" value="5"
    <?php
    // if(isset($_POST['five']) && isset($_POST['caseTwo']))
    //  echo "checked='checked'";
      ?>
    >5
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="case2data[]" value="6"
    <?php
    // if(isset($_POST['six']) && isset($_POST['caseTwo']))
    //  echo "checked='checked'";
      ?>
    >6
  </label>
</div>
<br>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="case2data[]" value="7"
    <?php
    // if(isset($_POST['seven']) && isset($_POST['caseTwo']))
    //  echo "checked='checked'";
      ?>
    >7
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="case2data[]" value="8"
    <?php
    // if(isset($_POST['eight']) && isset($_POST['caseTwo']))
    //  echo "checked='checked'";
      ?>
    >8
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="case2data[]" value="9"
    <?php
    // if(isset($_POST['nine']) && isset($_POST['caseTwo']))
    //  echo "checked='checked'";
      ?>
    >9
  </label>
</div>
</div>
<div class="card-footer">
  <div class="row">
    <div class="col-sm-1"></div>
        <div class="col-sm-7">
          <input type="checkbox" class="form-check-input" id="two" name="deleteTwo" value="8" onclick="myFunction2()">
          <span>delete previus records</span>
        </div>
    <div class="col-sm-2">
  <button type="submit" class="btn btn-info" name="caseTwo">Submit</button>
</div>
</div>
</div>
  </form>

</div>
</div>
    <div class="col-sm-2"></div>
</div>




<br>
<br>
<h1 class="text-info">
  <?php
if(isset($msg)){
  echo $msg;
}

   ?>
  </h1>

</div>
<script type="text/javascript">
function myFunction1(){
      r=confirm("By Cheking this your previus data will be erazed");
      if(r==true){
document.getElementById("one").checked = true;
      }
      if(r==false){
document.getElementById("one").checked = false;
      }
}

function myFunction2(){
      r=confirm("By Cheking this your previus data will be erazed");
      if(r==true){
document.getElementById("two").checked = true;
      }
      if(r==false){
document.getElementById("two").checked = false;
      }
}
</script>
</body>
</html>
