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
        <label style="background: white;"><?php if(empty($n)){
          $err=" Name is required";
            echo "<font color=red >" . $err . "</font>" ."<br>" ;
      }?></label>
      </div>
      <br>
      <div class="allDivs">
        <label>E_Mail</label>
        <input type="email" name="email" value="<?php echo $mail;?>">
        <label style="background: white;">
          <?php  if(empty($mail)){
        $err=" E-Mail is required";
        echo "<font color=red >" . $err . "</font>"  . "<br>";
    }?>
        </label>
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
          <label style="background: white;">
            <?php if(empty($gn)){
      $err=" Gender is required";
      echo "<font color=red >" . $err . "</font>" . "<br>" ;
    }elseif ((!empty($gn)) && ($gn == 'male')) {
      $gn='checked="checked"';
    }else{
      $gn='checked="checked"';
    }
    ?>
          </label>
        </div>
      </div>
      <br>
      <div class="allDivs">
        <label>Select Courses</label>
        <select name="courses[]"  multiple>
          <option <?php if(isset($cour) && in_array( "HTML" , $_GET['courses'])) echo 'selected';?> value="HTML">HTML</option>
          <option <?php if(isset($cour) && in_array( "CSS" , $_GET['courses'])) echo 'selected';?> value="CSS">CSS</option>
          <option <?php if(isset($cour) && in_array( "JS" , $_GET['courses'])) echo 'selected';?> value="JS">JS</option>
          <option <?php if(isset($cour) && in_array( "GIT" , $_GET['courses'])) echo 'selected';?> value="GIT">GIT</option>
          <option <?php if(isset($cour) && in_array( "PHP" , $_GET['courses']))  echo 'selected';?> value="PHP">PHP</option>
          <option <?php if(isset($cour) && in_array( "MYSQL" , $_GET['courses'])) echo 'selected';?> value="MYSQL">MYSQL</option>
        </select>
      </div>
      <br>
      <div class="allDivs">
        <label >Agree</label>
        <input type="checkbox" name="agree"  <?php echo $ag;?>>
        <label style="background: white;">
          <?php if(empty($ag)){
      $err=" You must agree to terms ";
      echo "<font color=red >" . $err . "</font>" . "<b>";
    }else{
      $ag='checked="checked"';
    }?>
        </label>
      </div>
      <br>
      <input type="submit" class="btn" value="submit" name="submit">
  </div>
  </form>
</body>

</html>