<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        body {
            overflow-x: visible;
        }
    </style>

</head>

<body>
    <?php include "navbar.php" ?>

    <h1 class="heading-section">Transfer Money</h1>
    <div class="table-body">
        <?php
        include "connection.php";
        $selectQuery = "SELECT * FROM users ORDER BY id DESC";
        $result = mysqli_query($conn, $selectQuery);

        ?>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Total Amount</th>
                <th>Transfer</th>
            </tr>
            <?php while ($rows = mysqli_fetch_array($result)) {
            ?>
                <tr data-aos="fade-up">
                    <td><?php echo $rows['name'] ?></td>
                    <td><?php echo $rows['email'] ?></td>
                    <td><?php echo $rows['amount'] ?></td>
                    <td style="text-align: center;"><a style="background-color: skyblue;padding: 5px 15px;border-radius: 3px;" href="./transaction.php?id=<?php echo $rows['id']; ?>">Send</a></td>
                </tr>
            <?php
            } ?>
        </table>
    </div>
    <?php include "footer.php" ?>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- Sweet alert -->

    <script>
        AOS.init({
            delay: 100, // values from 0 to 3000, with step 50ms
            duration: 400,
            offset: 0
        });
    </script>
</body>

</html>