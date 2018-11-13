<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP practice site</title>
    <link rel="stylesheet" href="css/bulma.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    
    <?php
     $example_array = array('michael','reagan', 'gedeon','natheer', 'josh', 'taariq', 'evan', 'gcobisa', 'tyrone', 'x', 'jp', 'taufeeq', 'jessie', 'kaylem', 'urick');
     $class_size = count($example_array);
     $output = array();
        for ($i = 0; $i < $class_size; $i++){
            $length = count($example_array);
            $chosen = rand(0, $length - 1);
            $output = array_splice($example_array,$chosen,1);

            if($i < 3){
                $monday[$i] = $output[0];
            } else if($i < 6){
                $j = $i - 3;
                $tuesday[$j] = $output[0];
            } else if($i < 9){
                $j = $i - 6;
                $wednesday[$j] = $output[0];
            } else if($i < 12){
                $j = $i - 9;
                $thursday[$j] = $output[0];
            } else{
                $j = $i - 12;
                $friday[$j] = $output[0];
            }
        }

    ?>

    <div class="container">
        <div class="level">
        <div class="level-left">
        <h1 id = "heading" class = "title">The Cleaner's Table</h1>
        </div>
        <div class="level-right">
        <a href="index.php" class="button is-info">Randomize</a>
        </div>
        </div>
        <hr>
        <table id="thisTable" class="table is-bordered is-fullwidth is-bold">
            <thead>
                <tr>
                    <th></th>
                    <th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday</th>
                    <th>Thursday</th>
                    <th>Friday</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td><?php echo $monday[0]?></td>
                    <td><?php echo $tuesday[0]?></td>
                    <td><?php echo $wednesday[0]?></td>
                    <td><?php echo $thursday[0]?></td>
                    <td><?php echo $friday[0]?></td>
                </tr>
                <tr>
                    <th>2</th>
                    <td><?php echo $monday[1]?></td>
                    <td><?php echo $tuesday[1]?></td>
                    <td><?php echo $wednesday[1]?></td>
                    <td><?php echo $thursday[1]?></td>
                    <td><?php echo $friday[1]?></td>
                </tr>
                <tr>
                    <th>3</th>
                    <td><?php echo $monday[2]?></td>
                    <td><?php echo $tuesday[2]?></td>
                    <td><?php echo $wednesday[2]?></td>
                    <td><?php echo $thursday[2]?></td>
                    <td><?php echo $friday[2]?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>