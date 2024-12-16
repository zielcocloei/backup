<?php
include('php/connect.php');
include('php/personality.php');
include('php/indecisiveContent.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Personality Two</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="assets/branding.png">
</head>



<body style="user-select: none">
    <?php include("php/navBar.php") ?>
    <!-- Header -->
    <header class="w3-container w3-center" style="padding:36vh 16px; background-color: #78a2cc;">
        <h1 class="w3-margin w3-jumbo" style="color: #4d4d4d">Indecisive Island</h1>
        
    </header>



    <!-- Content Grid -->
    <?php
    $j = 0;
    for ($j; $j < $c; $j++) {
        ?>
        <div class="w3-row-padding w3-container"
            style="background-color: #<?php echo $personalitiesContent[$j][3] ?>; padding-top: 100px">
            <div class="w3-content">
                <div class="w3-rest">
                    <h1 class="element"><?php echo $titles[$j] ?></h1>
                    <h5 class="element w3-padding-32"><?php echo $personalitiesContent[$j][2] ?></h5>
                </div>

                <div class="w3-rest w3-center">
                    <img class="element" src="assets/indecisive/<?php echo $personalitiesContent[$j][1] ?>"
                        alt="College Course | Difficult to choose college course" style="height: auto; width: 100%; margin-bottom: 5vh;">
                </div>
            </div>
        </div>
    <?php
    }
    ?>



    <?php include("php/footer.php") ?>
  
</body>

</html>