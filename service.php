<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="1.css">
    <link rel="stylesheet" href="service.css">
</head>
<body>

<header>
        <nav>
            
            <div class="mainMenu">
                <a href="home.php"><span>Home</span></a>
                <a href="about.php"><span>About Us</span></a>
                <a href="service.php"><span>Service</span></a>
                <a href="contact.php"><span>Contact Us</span></a>
                <a href="login.php">User Login</a>
            </div class="mainMenu">
        </nav>
    </header>
<br>
<br><br>
    <h3>Our Services.</h3>
    <div class="row">
        <div class="box">
            <img src="org.jpg">
            <h3>User Authentication Services</h3>
            <p>User Authentication Services: You might consider integrating services like Firebase Authentication or
                Auth0 to handle user registration, login, and authentication. These services provide secure user
                management features, including email and password authentication, social media login, and more.</p>
            <button class="btn">See More</button>
        </div>
        <div class="box">
            <img src="2.jpg">
            <h3> Quiz Update</h3>
            <p>Real-time Database: For storing and retrieving quiz questions, options, and user responses, you can
                utilize real-time databases like Firebase Realtime Database or Google Cloud Firestore. These services
                allow you to synchronize data across devices and provide real-time updates.</p>
            <button class="btn">See More</button>
        </div>
        <div class="box">
            <img src="1.jpg">
            <h3>Social Media</h3>
            <p>Integrating social media features can enhance the user experience by allowing
                users to share their quiz scores.You can leverage APIs and SDKs
                provided by platforms like Facebook, Twitter, or Instagram to enable social media integration.</p>
            <button class="btn">See More</button>
        </div>
    </div>
</body>

</html>