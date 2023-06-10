<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How calculate averages in PHP</title>
</head>
<body>
    <form action="average.php" method="POST">
        <label for="doubles">Doubles: </label>
        <input type="number" name="doublea" step="0.01">
        <input type="number" name="doubleb" step="0.01">
        <input type="number" name="doublec" step="0.01">
        <input type="submit" value="submit">

    </form>

        <?php
            if(isset($_POST["doublea"]) && isset($_POST["doubleb"]) && isset($_POST["doublec"])){
                

                function calcAverage() {

                    $doublea = $_POST["doublea"];

                    $doublea = $_POST["doubleb"];

                    $doublea = $_POST["doublec"];

                    $average = ($doublea + $doubleb + $doublec ) / 3;

                    echo "The average of the 3 doubles is: " . $average;

                    return $average;
                    
                }

                calcAverage();
            }
        ?>
    
</body>
</html>