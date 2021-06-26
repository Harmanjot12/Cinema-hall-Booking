<?php include 'view.php';?>

<html>
    <head>
        <title>Ticked Booked</title>
        <link rel="stylesheet" href="display.css">
        
    </head>
<body>
<h1>Ticket Booked</h1>
<div class="rectangle">
    <p><?php echo   "Seat Type       : " .  $seat     ?><br></p>
    <p><?php echo   "Number of Seats : " .  $numseat  ?><br></p>
    <p><?php echo   "Payment         : " . "$" .  $cost ?><br></p>
    <p><?php echo   "Mode of Payment : " .   $pay ?><br></p>
    <p><?php echo   "Card Number     : " .   $cardnum ?> </p>
</div>
</body>
</html>
