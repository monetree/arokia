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
  <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="menu">
  <h1>Coding Challange</h1>
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
         >1
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="case1data[]" value="2"
          >2
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" value="3" name="case1data[]"
        >3
      </label>
    </div>
<br>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="case1data[]" value="4"
    >4
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="case1data[]" value="5"
    >5
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="case1data[]" value="6"
    >6
  </label>
</div>
<br>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="case1data[]" value="7"
    >7
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="case1data[]" value="8"
    >8
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="case1data[]" value="9"
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
         >1
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="case2data[]" value="2"
          >2
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" value="3" name="case2data[]"
        >3
      </label>
    </div>
<br>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="case2data[]" value="4"
    >4
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="case2data[]" value="5"

    >5
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="case2data[]" value="6"
    >6
  </label>
</div>
<br>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="case2data[]" value="7"
    >7
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="case2data[]" value="8"
    >8
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="case2data[]" value="9"
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
<script type="text/javascript" src="script.js">

</script>
</body>
</html>
