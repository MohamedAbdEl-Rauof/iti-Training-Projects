<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Registration</title>
    </head>

    <body>
        <h1>User Registration</h1>
        <form action="register.php" method="post">
            <input type="text" name="fname" placeholder="First Name" required>
            <input type="text" name="lname" placeholder="Last Name" required>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="submit" name="Add" value="Register">

            <?php
            $conn = new mysqli('localhost', 'root', '', 'user_registration');

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            if (isset($_POST['Add'])) {
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
    
                $sql = "INSERT INTO users (first_name, last_name, email) VALUES ('$fname', '$lname', '$email')";
    
                if ($conn->query($sql) === TRUE) {
                    echo "User registered successfully!";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            $conn->close();

            ?>
        </form>
        <br><br>

        <form action="register.php" method="post">
            <input type="submit" name="Show" value="Show Users">

            <?php
             $conn = new mysqli('localhost', 'root', '', 'user_registration');

             if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
             }
             if (isset($_POST['Show'])) {
                echo "<h2>User List:</h2>";
                $sql = "SELECT * FROM users";
                $result = $conn->query($sql);
    
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "User ID: " . $row['user_id'] . ", Name: " . $row['first_name'] . " " . $row['last_name'] . ", Email: " . $row['email'] . "<br>";
                    }
                } else {
                    echo "No users found.";
                }
            }
            $conn->close();

            ?>
        </form>
        <br><br>

        <form action="register.php" method="post">
            <label for="updateUserId">Select User to Update:</label>
            <select name="updateUserId" required>
                <option value="" disabled selected>Select user ID to update</option>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'user_registration');

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT user_id, first_name, last_name FROM users";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['user_id'] . "'>" . $row['user_id'] . ": " . $row['first_name'] . " " . $row['last_name'] . "</option>";
                    }
                }
                
                if (isset($_POST['UpdateById'])) {
                    $updateUserId = $_POST['updateUserId'];
        
                    $sql = "SELECT * FROM users WHERE user_id = '$updateUserId'";
                    $result = $conn->query($sql);
        
                    if ($result->num_rows === 1) {
                        $user = $result->fetch_assoc();
                        $updateFirstName = $user['first_name'];
                        $updateLastName = $user['last_name'];
                        $updateEmail = $user['email'];
        
                        echo "<form action='register.php' method='post'>
                            <input type='hidden' name='updateUserId' value='$updateUserId'>
                            <input type='text' name='updateFirstName' placeholder='First Name' value='$updateFirstName' required>
                            <input type='text' name='updateLastName' placeholder='Last Name' value='$updateLastName' required>
                            <input type='email' name='updateEmail' placeholder='Email' value='$updateEmail' required><br>
                            <input type='submit' name='SaveUpdate' value='Save Update'>
                        </form>";
                    } else {
                        echo "User not found.";
                    }
                }
        
                if (isset($_POST['SaveUpdate'])) {
                    $updateUserId = $_POST['updateUserId'];
                    $updateFirstName = $_POST['updateFirstName'];
                    $updateLastName = $_POST['updateLastName'];
                    $updateEmail = $_POST['updateEmail'];
        
                    $sql = "UPDATE users SET first_name='$updateFirstName', last_name='$updateLastName', email='$updateEmail' WHERE user_id='$updateUserId'";
                    if ($conn->query($sql) === TRUE) {
                        echo "User data updated successfully!";
                    } else {
                        echo "Error updating user data: " . $conn->error;
                    }
                }
        
                $conn->close();
             ?>
            </select>
            <input type="submit" name="UpdateById" value="Update by User ID">
        </form>
        <br><br>


        <form action="register.php" method="post">
            <label for="deleteUserId">Select User to Delete:</label>
            <select name="deleteUserId" required>
                <option value="" disabled selected>Select user ID to delete</option>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'user_registration');

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT user_id, first_name, last_name FROM users";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['user_id'] . "'>" . $row['user_id'] . ": " . $row['first_name'] . " " . $row['last_name'] . "</option>";
                    }
                }

                if (isset($_POST['DeleteById'])) {
                    $deleteUserId = $_POST['deleteUserId'];
                    $sql = "DELETE FROM users WHERE user_id = '$deleteUserId'";
        
                    if ($conn->query($sql) === TRUE) {
                        echo "User with ID $deleteUserId has been deleted.";
                    } else {
                        echo "Error deleting user: " . $conn->error;
                    }
                }
                
                $conn->close();
                ?>
            </select>
            <input type="submit" name="DeleteById" value="Delete by User ID">
        </form>
    </body>
</html>
