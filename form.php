<?php
if(isset($_GET['submit'])){
      $err=[];
      if(empty($_GET['userName'])){
          $err=" Name is required";
            echo "<font color=red >" . $err . "</font>" ."<br>" ;
      }
      if(empty($_GET['email'])){
        $err=" E-Mail is required";
        echo "<font color=red >" . $err . "</font>"  . "<br>";
    }

    if(empty($_GET['gender'])){
      $err=" Gender is required";
      echo "<font color=red >" . $err . "</font>" . "<br>" ;
    }

    if(empty($_GET['agree'])){
      $err=" You must agree to terms ";
      echo "<font color=red >" . $err . "</font>" . "<b>";
    }
    if(empty($err)){
      echo "Your Name is : " . ($_GET['userName']) . "<br>";
      echo " E_Mail is : " . ($_GET['email']). "<br>";
      echo "Group NO. is : " . ($_GET['gno']). "<br>";
      echo " class details is : " .($_GET['details']). "<br>";
      echo " Gender is : " . ($_GET['gender']). "<br>";
         foreach($_GET['courses'] as $cour){
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
        <input type="text" name="userName">
      </div>
      <br>
      <div class="allDivs">
        <label>E_Mail</label>
        <input type="email" name="email">
      </div>
      <br>
      <div class="allDivs">
        <label>Group NO.</label>
        <input type="number" name="gno">
      </div>
      <br>
      <div class="allDivs">
        <label>Class details</label>
        <textarea name="details"></textarea>
      </div>
      <br>
      <div class="allDivs">
        <label>Gender</label>
        <div class="gender">
          <input type="radio" name="gender" value="male">
          <label for="louie">male</label>
          <input type="radio" name="gender" value="female"> 
          <label for="louie">female</label>
        </div>
      </div>
      <br>
      <div class="allDivs">
        <label>Select Courses</label>
        <select name="courses[]" multiple>
          <option value="HTML">HTML</option>
          <option value="CSS">CSS</option>
          <option value="JS">JS</option>
          <option value="GIT">GIT</option>
          <option value="PHP">PHP</option>
          <option value="MYSQL">MYSQL</option>
        </select>
      </div>
      <br>
      <div class="allDivs">
        <label>Agree</label>
        <input type="checkbox" name="agree">
      </div>
      <br>
      <input type="submit" class="btn" value="submit" name="submit">
  </div>
  </form>
</body>

</html>