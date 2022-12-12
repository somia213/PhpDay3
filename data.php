<?php 
$students = [
    ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'Science'],
    ['name' => 'Shamy', 'email' => 'ali@test.com', 'status' => 'AAST'],
    ['name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'AAST'],
    ['name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => 'Science'],
    ['name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'AAST'],
];
echo " <h1>Application name : AAST_BIS class Registration</h1>";
 echo "<table>";
 echo "<th>Name</th>" , "<th>Email</th>" , "<th>status</th>";
 foreach($students as $data){
    if($data['status']=='Science'){
        echo "<tr style = 'color:red;'>";
     }else{
         echo "<tr>";
     }
    echo "<td>".$data['name'] . "<br>" . "</td>";
    echo "<td>".$data['email'] . "<br>" . "</td>";
    echo "<td>".$data['status'] . "<br>" . "</td>";
    echo "</tr>";
 }
 echo"</table>";
            
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Show Data</title>
  <!-- <link rel="stylesheet" href="css/form.css"> -->
</head>

<body>
  
    
</body>

</html>