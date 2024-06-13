<?php
require('pages/conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sky-High</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="header">
    <h1 class="logo">Sky-High</h1>
    <div class="quick-acctions">
        <nav>
            <a id="home-link">Home</a>
            <a id="vacation-link">Vacations</a>
            <a href="">Deals</a>
            <a id="contact-link" >Contact</a>
        </nav>
    </div>
    <div class="search-container input-user ">
        <input name="search" type="text" class="userinput" id="search-input" placeholder="">
        <label for="name" class="userlabel">Search your vacation</label>
        <ul id="search-suggestions">
        </ul>
    </div>
    <div class="login-account">
        <a href="pages/inlog.php"><button>login</button></a>
    </div>

</div>
<div class="home-page" id="homes">
    <div class="container">
        <h1 class="title">Welcome to Sky-High</h1>
    </div>
    <div class="information">
        <p class="information-home">Sky-High is the premier booking site for all your travel needs,
            whether you're exploring the beauty of your own country or embarking on an adventure to a destination you've never visited before.
            We offer an unparalleled selection of travel options, ensuring that your journey is as seamless and enjoyable as possible.
            Our comprehensive platform caters to every type of traveler,
            from the seasoned globetrotter to the occasional vacationer,
            providing a wide range of flights, accommodations, and experiences.
            With Sky-High, you can trust that all your travel arrangements will be handled with the utmost professionalism and care,
            allowing you to focus on creating unforgettable memories. Let us take you higher—Sky-High, your gateway to the world.
            <br>
            "Reach your limits with Sky-High"
            <br>
            <br>
            <br>
            <span class="get-started">Get started, right now!</span>
        </p>
    </div>

    <div class="button-home">
        <button id="getgoing" class="get-started-home">Get started!</button>
    </div>

</div>

<div id="vacationss" class="vaction-page">
    <div class='container'>
    <?php
     $stmt = $conn->query("SELECT * FROM coins");
       while ($row = $stmt->fetch()) {
        echo "<div class='container'>";
            echo "<div class='box'>";
                echo "<div class='box-img'><img src='../assets/". $row['image']. "'></div>";
                echo "<div class='informatie'>";
                    echo "<div class='name-vacation'>";
                        echo "<h1>". $row['name']. "</h1>";
                        echo "</div>";
                    echo "<div class='description-vacation'>";
                        echo "<p>". $row['description']. "</p>";
                        echo "</div>";
                    echo "<div class='description-price'>";
                        echo "<button class='button-price'>Check available price</button>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
        }
        ?>
    </div>
</div>

<div class="contact-form" id="contact-form-container">
    <h2 class="text-contact">Contact Us</h2>
    <form id="contact-form">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button class="submit-form-contact" type="submit">Send Message</button>
    </form>
</div>
</body>
<script src="assets/js/main.jsx"></script>
</html>