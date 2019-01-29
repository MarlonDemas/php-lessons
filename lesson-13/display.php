<?php
    include_once("connect.php");

    // $sql = "SELECT * FROM films;";
    // $result = mysqli_query($conn, $sql);

    // if(mysqli_num_rows($result) > 0) {
    //     while ($row = mysqli_fetch_assoc($result)) {
    //         echo "____________________________________________________<br>";
    //         echo "| id: ". $row['id']. " | title: ". $row['title']. " | director: ". $row['director']. " | year: ". $row['year']. " |<br>";
    //     }
    // } else {
    //     echo "0 results";
    // }

    // echo '<br><a href="index.php">home</a>';

    // mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Display Table</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.min.css"/>
    </head>
    <body>
        <table class="table is-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Title</td>
                    <td>Director</td>
                    <td>Year</td>
                </tr>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT * FROM films;";
            $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['title'] ?></td>
                    <td><?php echo $row['director'] ?></td>
                    <td><?php echo $row['year'] ?></td>
                </tr>
            <?php } } ?>
            </tbody>
        </table>

        <?php
            mysqli_close($conn);
        ?>

        <a href="index.php" class="button is-primary">Home</a>
    </body>
</html>