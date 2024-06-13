<?php
require('conn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacations</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="header">
        <h1 class="logo">Sky-High</h1>
        <div class="quick-acctions">
            <nav>
                <a href="../index.html" id="home-link">Home</a>
                <a href="#" title="Your in vacations" id="vacation-link">Vacations</a>
                <a href="">Deals</a>
                <a href="contact.php" id="contact-link">Contact</a>
            </nav>
        </div>
        <div class="search-container input-user ">
            <input name="search" type="text" class="userinput" id="search-input" placeholder="">
            <label for="name" class="userlabel">Search your vacation</label>
            <ul id="search-suggestions">
            </ul>
        </div>
        <div class="login-account">
            <a href="inlog.php"><button>login</button></a>
        </div>

    </div>
    <div class="vaction-page">
        <div class="container">
            <?php
            $stmt = $conn->query("SELECT * FROM placemeta");

            while ($row = $stmt->fetch()) {
              echo  "<div class='box'>";
                echo "<div class='box-img'><img src='../assets/img/" . $row['imgname'] . "'></div>";
                echo "<div class='informatie'>";
                 echo   "<div class='name-vacation'>";
                 echo       "<h1 >" . $row['name'] . "</h1 >";
                 echo   "</div >";
                 echo   "<div class='description-vacation' >";
                  echo      "<p >" . $row['description'] . "</p >";
                  echo  "</div >";
                  echo   "<div class='description-price'>";
                  echo      "<button class='button-price'> Check available price</button >";
                  echo  "</div>";
              echo  "</div >";
           echo "</div >";
            }
            ?>
        </div>
    </div>
</body>

</html>