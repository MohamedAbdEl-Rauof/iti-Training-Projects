<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>say hello with class</title>
    </head>

    <body>
        <?php
            class User {
                private $username;
                
                public function setUsername($name) {
                    $this->username = $name;
                }
                
                public function getUsername() {
                    return $this->username;
                }
            }

            class Admin extends User {
                public function expressYourRole() {
                    return "Admin";
                }
                
                public function sayHello() {
                    return "hello admin, " . $this->getUsername();
                }
            }

            $admin1 = new Admin();
            $admin1->setUsername("ahmed");

            echo $admin1->sayHello();

            
            /*
                problem is sayHello() method in the Admin class is trying to
                access the private property $username of the User class 
                To fix this we can use the getUsername() method to access the username

            */
        ?>
    </body>
</html>
