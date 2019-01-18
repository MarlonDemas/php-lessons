<?php
    require_once('config/conn.php');

    // Creating a query to select columns and rows
    $query = 'SELECT * FROM comments';

    // Get result

    $result = mysqli_query($conn, $query);

    // Fetch Data
    $comments = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // var_dump($comments);

    mysqli_free_result($result);

    // Check for submit
    if (isset($_POST['submit'])) {
        // echo "On point";
        $author = $_POST['author'];
        $body = $_POST['body'];

        // Create query
        $query_insert = "INSERT INTO comments(body, author) VALUES('$body', '$author')";

        if(mysqli_query($conn, $query_insert)){
            header('Location: '. $_SERVER['PHP_SELF']);
        } else {
            echo 'ERROR: '.     mysqli_error($conn);
        }
    }

    // Close Connection
    mysqli_close($conn);
?>

<div class="container">
    <h1>Add Comment</h1>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <label>Name</label>
        <input type="text" name="author">
        <br>
        <br>
        <label>Message</label>
        <textarea name="body"></textarea>
        <br>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</div>

<div class="container">
    <h1>Comments</h1>
    <?php foreach ($comments as $comment): ?>
        <p>
            <u><?php echo $comment['author'] ?></u>
            <small><?php echo date("d M Y - h:ia", strtotime($comment['date_created'])) ?></small>
            <p style="tex-indent: 25px;"><?php echo $comment['body'] ?></p>
            <hr>
        </p>
    <?php endforeach;  ?> 
</div>