<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Form 2</title>
</head>

<body>
    <?php
    $Brand = $_GET["brand"];
    $Name = $_GET["name"];
    $Surname = $_GET["surname"];

    echo "<h1> Hello ".$Name.  " " .$Surname. " heres a tip for youre new car. <br> </h1>" ;

    if($Brand == "Aston Martin")
    echo  "<h1>".$Brand. " offers great style and comfort. <br> </h1>" ;

    if($Brand == "Buick")
    echo  "<h1>".$Brand. " , a rare car this days... <br> </h1>" ;

    if($Brand == "Cadillac")
    echo  "<h1>".$Brand. " consumes a lot of fuel but the ride is something to remember... <br> </h1>" ;

    if($Brand == "Lexus")
    echo  "<h1>".$Brand. " , a common car for the upper class. <br> </h1>" ;

    if($Brand == "Lotus")
    echo  "<h1>".$Brand. " is a great sports car ! <br> </h1>" ;

    if($Brand == "Mercedes-Maybach" )
    echo  "<h1>".$Brand. " is one of the most expensive cars in the world! <br> </h1>" ;

    if($Brand == "Pontiac")
    echo  "<h1>".$Brand. " , even a middle class person can buy it. <br> </h1>" ;

    ?>


    <div class="moon"></div>

    <div class="skyline">
        <div class="building1-shadow"></div>
        <div class="building1">

            <div class="building-left-half"></div>
            <div class="building-right-half"></div>
        </div>
    </div>
    <div class="road">
        <div class="road-top-half"></div>
        <div class="road-bottom-half"></div>
    </div>

    <div class="car-container">
        <div class="car-top1">
            <div class="window1"></div>
            <div class="window2"></div>

        </div>
        <div class="car-top2">
            <div class="door">
                <div class="door-knob"></div>
            </div>
        </div>
        <div class="car-bottom">
            <div class="wheel1-top"></div>
            <div class="wheel1">
                <div class="wheel-dot1"></div>
                <div class="wheel-dot2"></div>
                <div class="wheel-dot3"></div>
                <div class="wheel-dot4"></div>

            </div>

            <div class="wheel2-top"></div>
            <div class="wheel2">
                <div class="wheel-dot1"></div>
                <div class="wheel-dot2"></div>
                <div class="wheel-dot3"></div>
                <div class="wheel-dot4"></div>
            </div>
        </div>
    </div>
</body>

</html>