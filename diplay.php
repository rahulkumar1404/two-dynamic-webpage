<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all the works</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">username</th>
      <th scope="col">email</th>
      <th scope="col">workTitle</th>
      <th scope="col">workTitle</th>
      <th scope="col">companyName</th>
      <th scope="col">phoneNo</th>
      <th scope="col">files</th>
    </tr>
  </thead>
</table>

</body>
</html>

<?php
include 'dbconn.php';

$selectquery = "select * from registration";

$query = mysqli_query($con,$selectquery);
while($result = mysqli_fetch_array($query))
?>

<tr>
    <td><?php echo $result['id'] ;?></td>
    <td><?php echo $result['username'] ;?></td>
    <td><?php echo $result['email'] ;?></td>
    <td><?php echo $result['workTitle'] ;?></td>
    <td><?php echo $result['companyName'] ;?></td>
    <td><?php echo $result['phoneNo'] ;?></td>
    <td><img src="<?php echo $result['file'] ;?>" width="100" height="50"></td>
</tr>