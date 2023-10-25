<?php
$profile = ["Home", "Subjects", "Assignments", "Quiz", "About"];
$web = ["HTML, CSS, and Javascript", "PHP", "ASP.NET"];
$mobile = ["Android", "iOS", "Windows"];
$desktop = ["Java", "C#", "Python"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Performance</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <h2>Juan Dela Cruz</h2>
    </nav>

    <div class="container">
        <div class="profile">
            <div class="images">
            <img src="images/profile.png" alt="">
            </div>
            <div>
            <h4 class="name">Name: Juan Dela Cruz</h4>
            </div>
            
            <?php
            foreach ($profile as $prof) {
                echo "<div class='rows'>
                            <h4>$prof</h4>
                        </div>";
            }
            ?>
        </div>
        <div class="web">
            <div class="images">
            <img src="images/web.png" alt="">
            </div>
            <div class="row-manage">
                <h4>Web Programming</h4>
            </div>
            <?php
            foreach ($web as $website) {
                echo "<div class='rows'>
                            <h4>$website</h4>
                        </div>";
            }
            ?>
        </div>
        <div class="mobile">
            <div class="images">
            <img src="images/mobile.png" alt="">
            </div>
            <div class="row-manage">
                <h4>Mobile Programming</h4>
            </div>
            <?php
            foreach ($mobile as $mobi) {
                echo "<div class='rows'>
                            <h4>$mobi</h4>
                        </div>";
            }
            ?>
        </div>
        <div class="desktop">
            <div class="images">
            <img src="images/dektop.png" alt="">
            </div>
            <div class="row-manage">
                <h4>Desktop Programming</h4>
            </div>
            <?php
            foreach ($desktop as $desk) {
                echo "<div class='rows'>
                            <h4>$desk</h4>
                        </div>";
            }
            ?>
        </div>
    </div>
</body>
</html>
