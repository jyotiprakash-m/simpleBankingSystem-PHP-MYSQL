<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="./img/logo.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking System</title>
    <link rel="stylesheet" href="./css/style.css">

    <!-- Animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Scorlling Effect -->

</head>

<body>
    <?php include "navbar.php" ?>
    <!-- Banner -->
    <section class="banner">
        <div class="banner-body">
            <div class="banner-left animate__animated animate__fadeInLeft">
                <img src="./img/bank.JPG" alt="Bank Image">
            </div>
            <div class="banner-right animate__animated animate__fadeInRight" data-aos="fade-up">
                <h2 class="heading">Welcome to Smart Banking</h2>
                <p class="para">Make your life simple and easier</p>
                <div class="links">
                    <a class="link" href="createUser.php">Create User</a>
                    <a class="link" href="sendMoney.php">Send Money</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features  -->
    <h1 class="heading-section">Our Features</h1>
    <section class="features">
        <div class="feature">
            <img src="./img/createUser.png" alt="Create User">
            <a class="feature-link" href="createUser.php">Create User</a>
        </div>
        <div class="feature">
            <img src="./img/send.png" alt="Send Money">
            <a class="feature-link" href="sendMoney.php">Send Money</a>
        </div>
        <div class="feature">
            <img src="./img/history.png" alt="">
            <a class="feature-link" href="transactionHistory.php">All Transaction</a>
        </div>
    </section>


    <?php include "footer.php" ?>
</body>

</html>