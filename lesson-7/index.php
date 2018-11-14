 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Forms</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>
 <body>
    <!-- <form action="form.php" method="post">

        <input type="text" name="name" placeholder="name">

        <input type="text" name="surname" placeholder="surname">

        <button type="submit">Submit!</button>
    </form> -->

    <?php if (!$_POST) { ?>
        <form action="index.php" method="post">

            <input type="text" name="name" placeholder="name">

            <input type="text" name="surname" placeholder="surname">

            <button type="submit">Submit!</button>
        </form>
    <?php } else { ?>
        <p>Hello there <?php echo $_POST['name']?></p>
    <?php } ?>
    
 </body>
 </html>