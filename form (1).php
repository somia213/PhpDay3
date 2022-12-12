<?php
$fnamEerr = $emailErr = $genderErr = $GroupErr  =$agreEerr= $detailserr=$coursesErr="";
$fname = $email = $gender = $Group = $course =$agree=$details=$courses[]= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["userName"])) {
    $fnamEerr = "Name is required";
  } else {
    $fname = test_input($_POST["userName"]);
    }

    if (empty($_POST['email'])) {
      $emailErr = " E-Mail is required";
    }
    else{
      $email =test_input($_POST["email"]);
    }
    if (empty($_POST['details'])) {
      $detailserr = " course details is required";
    }
    else{
      $details =test_input($_POST["details"]);
    }

    if (empty($_POST['gender'])) {
      $genderErr = " Gender is required";
    }
    else{
      $gender =test_input($_POST["gender"]);
    }
    if (empty($_POST['Group'])) {
      $GroupErr = " Gender is required";
    }
    else{
      $Group =test_input($_POST["Group"]);
    }


    if (empty($_POST["agree"])) {
      $agreeerr = "select is required";
    } else {
      $agree = test_input($_POST["agree"]);
    }
    if(isset($_POST['submit'])){
      if(!empty($_POST['courses'])){
        foreach($_POST['courses'] as $checked){
          $courses[]=  $checked ;
        }
      } else {
        $coursesErr = "Checkbox is not selected!";
      }
    }
    
  }
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
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
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div class="allDivs">
        <label>Name</label>
        <input type="text" name="userName" value="<?php echo $fname;?>">
        <span class="error" style="color: red;"> <?php echo $fnamEerr;?></span>
      </div>
      <br>
      <div class="allDivs">
        <label>E_Mail</label>
        <input type="email" name="email" value="<?php echo $email;?>">
        <span class="error" style="color: red;"> <?php echo $emailErr;?></span>
      </div>
      <br>
      <div class="allDivs">
        <label>Group NO.</label>
        <input type="number" name="Group" value="<?php echo $Group;?>">
        <span class="error" style="color: red;"> <?php echo $GroupErr;?></span>
      </div>
      <br>
      <div class="allDivs">
        <label>Class details</label>
        <textarea name="details" value="<?php echo $details;?>">
       </textarea> <span class="error" style="color: red;"> <?php echo $detailserr;?></span>
      </div>
      <br>
      <div class="allDivs">
        <label>Gender</label>
        <div class="gender">
          <input type="radio" name="gender" value="male">
          <label for="louie">male</label>
          <input type="radio" name="gender" value="female"> 
          <label for="louie">female</label>
          <span class="error" style="color: red;"> <?php echo $genderErr;?></span>
        </div>
      </div>
      <br>
      <div class="allDivs">
        <label>Select Courses</label>
         <label for="php"> php 
        <input type="checkbox" id="php" name="courses[]" value="php"  > </label>
          <label for="Mysql"> Mysql
           <input type="checkbox" id="Mysql" name="courses[]" value="Mysql" >
             </label><br>
             <label for="HTML"> HTML
             <input type="checkbox" id="HTML" name="courses[]" value="HTML" >
             </label>
             <label for="Java"> Java Script
              <input type="checkbox" id="Java" name="courses[]" value="Java" >
               <span class="error" style="color: red;"> <?php echo $coursesErr;?>
             </label><br><br> 
      </div>
      <br>
      <div class="allDivs">
        <label>Agree</label>
        <input type="checkbox" name="agree"  value="<?php echo $agree;?>">
        <span class="error" style="color: red;"> <?php echo $agreEerr;?></span>
      </div>
      <br>
      <input type="submit" class="btn" value="submit" name="submit">
  </div>


  <?php
  echo "Your Name is : " . $fname . "<br>";
  echo " E_Mail is : " . $email . "<br>";
  echo "Group NO. is : " . $Group . "<br>";
  echo " class details is : " . $course . "<br>";
  echo " Gender is : " . $gender . "<br>";
  foreach($courses as $key => $value)
   {
  echo  $value.'<br>';
   }
  echo " your agree is : " .$agree . "<br>";
  ?>
  </form>
</body>

</html>