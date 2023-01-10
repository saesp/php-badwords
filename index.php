<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      p{
            font-size: 30px;
      }
    </style>

    <?php
        $phar = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem esse enim labore, aperiam soluta maxime! Asperiores at pariatur, a quisquam deserunt dolor quaerat, officiis ut eaque sapiente neque veniam ducimus?";    
        $lng = strlen($phar);

        $badword = $_GET['bd'];

        $safePhar = str_replace($badword, "*", $phar);
        $safeLng = strlen($safePhar);
    ?>
</head>

<body>
    <p>
        <?php 
            echo  $phar . "<br> Length: " . $lng . "<br>";
            echo "<br>";

            if (isset($badword)) {
                echo "Badword: " . $badword;
                echo "<br>";
                echo $safePhar . "<br> Length: " . $safeLng;
            }
        ?>
    </p>
</body>
</html>