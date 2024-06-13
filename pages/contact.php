<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="header">
        <h1 class="logo">Sky-High</h1>
        <div class="quick-acctions">
            <nav>
                <a href="../index.html" id="home-link">Home</a>
                <a href="vakanties.php" id="vacation-link">Vacations</a>
                <a href="">Deals</a>
                <a id="contact-link">Contact</a>
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
    <div class="contact-form">
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

</html>