<?php
$day = date("l");

switch ($day) {
  case "Monday":
    echo "Welcome to Monday!";
  break;
  case "Tuesday":
    echo "Welcome to Tuesday!";
  break;
  case "Wednesday":
    echo "Welcome to Wednesday!";
  break;
  case "Thursday":
    echo "Welcome to Thursday!";
  break;
  case "Friday":
    echo "Welcome to Friday!";
  break;
  case "Saturday":
    echo "Welcome to Saturday!";
  break;
  case "Sunday":
    echo "Welcome to Sunday!";
  break;
}

echo "<br>";
echo "<br>";

if ($day == "Monday") {
  echo "Welcome to Monday!";
} else if ($day == "Tuesday") {
  echo "Welcome to Tuesday!";
} else if ($day == "Wednesday") {
  echo "Welcome to Wednesday!";
} else if ($day == "Thursday") {
  echo "Welcome to Thursday!";
} else if ($day == "Friday") {
  echo "Welcome to Friday!";
} else if ($day == "Saturday") {
  echo "Welcome to Saturday!";
} else if ($day == "Sunday") {
  echo "Welcome to Sunday!";
} else {
  echo "Invalid day of week.";
}

?>
