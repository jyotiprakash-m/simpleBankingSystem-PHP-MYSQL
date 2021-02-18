<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Transaction</title>
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
    <h1 class="heading-section">Transfer History</h1>
    <div class="table-body">
        <?php
        include "connection.php";
        $selectQuery = "SELECT * FROM `transaction` ORDER BY slno DESC";
        $result = mysqli_query($conn, $selectQuery);

        ?>
        <table>
            <tr>
                <th>Sl. No.</th>
                <th>Sender</th>
                <th>Receiver</th>
                <th>Amount</th>
                <th>Date & Time</th>
            </tr>
            <?php while ($rows = mysqli_fetch_array($result)) {
            ?>
                <tr data-aos="fade-up">
                    <td><?php echo $rows['slno'] ?></td>
                    <td><?php echo $rows['sender'] ?></td>
                    <td><?php echo $rows['receiver'] ?></td>
                    <td><?php echo $rows['amount'] ?></td>
                    <td><?php echo $rows['datetime'] ?></td>
                </tr>
            <?php
            } ?>
        </table>
    </div>
    <?php include "footer.php" ?>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        AOS.init({
            delay: 100, // values from 0 to 3000, with step 50ms
            duration: 400,
            offset: 0
        });
    </script>
</body>

</html>