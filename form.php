<?php
error_reporting(0);
$n=$_GET['userName'];
$mail=$_GET['email'];
$gno=$_GET['gno'];
$d= $_GET['details'];
$gn=$_GET['gender'];
$cour=[];
$cour=$_GET['courses[]'];
$ag=$_GET['agree'];
if(isset($_GET['submit'])){
      $err=[];
      if(empty($n)){
          $err=" Name is required";
            echo "<font color=red >" . $err . "</font>" ."<br>" ;
      }
      if(empty($mail)){
        $err=" E-Mail is required";
        echo "<font color=red >" . $err . "</font>"  . "<br>";
    }
    
    if(empty($gn)){
      $err=" Gender is required";
      echo "<font color=red >" . $err . "</font>" . "<br>" ;
    }elseif ((!empty($gn)) && ($gn == 'male')) {
      $gn='checked="checked"';
    }else{
      $gn='checked="checked"';
    }

    if(empty($ag)){
      $err=" You must agree to terms ";
      echo "<font color=red >" . $err . "</font>" . "<b>";
    }else{
      $ag='checked="checked"';
    }
    if(empty($err)){
      echo "Your Name is : " . ($_GET['userName']) . "<br>";
      echo " E_Mail is : " . ($_GET['email']). "<br>";
      echo "Group NO. is : " . ($_GET['gno']). "<br>";
      echo " class details is : " .($_GET['details']). "<br>";
      echo " Gender is : " . ($_GET['gender']). "<br>";
         foreach($_GET['courses'] as $cours){
          $cour=$cours ;
        echo " you choose course :  " . $cour. "<br>";
        
         }
      echo " your agree is : " . ($_GET['agree']). "<br>";
    }
  }
 ?>
 

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <link rel="stylesheet" href="css/form.css">
</head>

<body>
  <div class="main">
    <div class="h1">
      <h1>Application name : AAST_BIS class Registration</h1>
    </div>
    <form action="<?php $_PHP_SELF ?>" method="GET" >
      <div class="allDivs">
        <label>Name</label>
        <input type="text" name="userName" value="<?php echo $n;?>">
      </div>
      <br>
      <div class="allDivs">
        <label>E_Mail</label>
        <input type="email" name="email" value="<?php echo $mail;?>">
      </div>
      <br>
      <div class="allDivs">
        <label>Group NO.</label>
        <input type="number" name="gno" value="<?php echo $gno;?>">
      </div>
      <br>
      <div class="allDivs">
        <label>Class details</label>
        <textarea name="details"><?php echo $d;?></textarea>
      </div>
      <br>
      <div class="allDivs">
        <label>Gender</label>
        <div class="gender">
          <input type="radio" name="gender" <?php echo $gn;?> value="male">
          <label for="louie">male</label>
          <input type="radio" name="gender" <?php echo $gn;?> value="female"> 
          <label for="louie">female</label>
        </div>
      </div>
      <br>
      <div class="allDivs">
        <label>Select Courses</label>
        <select name="courses[]" value="<?php echo 'selected';?>" multiple>
          <option name="courses[]" value="HTML">HTML</option>
          <option name="courses[]" value="CSS">CSS</option>
          <option name="courses[]" value="JS">JS</option>
          <option name="courses[]" value="GIT">GIT</option>
          <option name="courses[]" value="PHP">PHP</option>
          <option name="courses[]"value="MYSQL">MYSQL</option>
        </select>
      </div>
      <br>
      <div class="allDivs">
        <label>Agree</label>
        <input type="checkbox" name="agree"  <?php echo $ag;?>>
      </div>
      <br>
      <input type="submit" class="btn" value="submit" name="submit">
  </div>
  </form>
</body>

</html>