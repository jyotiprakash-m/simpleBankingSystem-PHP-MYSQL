    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create User</title>
        <link rel="stylesheet" href="./css/style.css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    </head>

    <body>
        <?php include "navbar.php" ?>
        <h1 class="heading-section">Create User</h1>
        <section class="create-user animate__animated animate__fadeInUp">
            <div class="form-body">
                <form action="" method="post">
                    <div class="input">
                        <div>
                            <label for="name">Name</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="name" placeholder="Enter Your Name" required>
                        </div>
                    </div>
                    <div class="input">
                        <div>
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field">
                            <input type="email" name="email" placeholder="Enter Your Email" required>
                        </div>
                    </div>
                    <div class="input">
                        <div>
                            <label for="amount">Amount</label>
                        </div>
                        <div class="input-field">
                            <input type="number" name="amount" placeholder="Amount" required>
                        </div>
                    </div>

                    <div class="input-submit">
                        <div>
                            <input type="submit" value="Register User" name="submit">
                        </div>
                    </div>
                </form>
            </div>

        </section>
        <?php include "footer.php" ?>

        <?php
        include 'connection.php';
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $amount = $_POST['amount'];
            $insertQuery = "INSERT INTO `users`(`name`, `email`, `amount`) VALUES ('{$name}','{$email}','{$amount}')";
            $result = mysqli_query($conn, $insertQuery);

            if ($result) {
        ?>
                <script>
                    alert("Data Inserted Successfully");
                    window.location = "sendMoney.php";
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert("Something went wrong");
                </script>
        <?php

            }
        }

        ?>

    </body>

    </html>