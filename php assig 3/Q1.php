<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>

  <body>

    <form method="post" action="">
    <br><br>
      <label for="gender">Gender:</label>
      <select id="gender" name="gender" required>
      <option value="Mr.">Mr.</option>
      <option value="Miss">Miss</option>
      </select>
      <br><br>
      <label for="first_name">First Name:</label>
      <input type="text" id="first_name" name="first_name" required>
      <br><br>
      <label for="last_name">Last Name:</label>
      <input type="text" id="last_name" name="last_name" required>
      <br><br>
      <label for="address">Address:</label>
      <input type="text" id="address" name="address" required>
      <br><br>
      <label for="department">Department:</label>
      <input type="text" id="department" name="department" required>
      <br><br>
      <input type="submit" value="Submit">
    </form>


    <?php
      if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $gender = $_POST['gender'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $address = $_POST['address'];
        $department = $_POST['department'];

        if (empty($gender) || empty($first_name) || empty($last_name) || empty($address) || empty($department)) {
        echo "<p>Please fill in all fields.</p>";
      } else {

      echo "<h2>Submitted Information:</h2>";
      echo "<p>Name: $gender $first_name $last_name</p>";
      echo "<p>Address: $address</p>";
      echo "<p>Department: $department</p>";
      }
    }
    
    ?>


  </body>

</html>