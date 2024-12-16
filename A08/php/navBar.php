<?php
include('php/personality.php');

$theme = "A9A9A9";
$currentFile = basename($_SERVER['PHP_SELF']);

foreach ($personalities as $personality) {
    if (
        ($currentFile == "lovingPage.php" && $personality[1] == "Loving") ||
        ($currentFile == "indecisivePage.php" && $personality[1] == "Indecisive") ||
        ($currentFile == "adventurousPage.php" && $personality[1] == "Adventurous") ||
        ($currentFile == "foodiePage.php" && $personality[1] == "Foodie")
    ) {
        $theme = $personality[4];
        executeQuery("UPDATE islandsofpersonality SET status = 'active' WHERE islandOfPersonalityID = " . $personality[0]);
    } else {
        executeQuery("UPDATE islandsofpersonality SET status = 'inactive' WHERE islandOfPersonalityID = " . $personality[0]);
    }
}
?>



<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-card w3-left-align w3-large" style="background-color: #<?php echo $theme ?>">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-dark-gray"
            href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i
                class="fa fa-bars"></i></a>
        <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
        <a href="lovingPage.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">
            Personality One</a>
        <a href="indecisivePage.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">
            Personality Two</a>
        <a href="adventurousPage.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">
            Personality Three</a>
        <a href="foodiePage.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">
            Personality Four</a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
        <a href="lovingPage.php" class="w3-bar-item w3-button w3-padding-large">Personality One</a>
        <a href="indecisivePage.php" class="w3-bar-item w3-button w3-padding-large">Personality Two</a>
        <a href="adventurousPage.php" class="w3-bar-item w3-button w3-padding-large">Personality Three</a>
        <a href="foodiePage.php" class="w3-bar-item w3-button w3-padding-large">Personality Four</a>
    </div>
</div>



<script>
    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>