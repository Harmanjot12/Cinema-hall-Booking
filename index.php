<!DOCTYPE html>
<html>
<head>
	<title>Cinema Booking</title>
        <link rel="stylesheet" href="index.css">
</head>
<body>
<h1>JR  THEATER</h1>

<br><br><br><br>

<form  action="display.php"  method="post">

        <label>Number of Seats</label>
        <input type="number" class="cinema" name="numseat"   placeholder="Number Of Seats"> 
	
        <br><br><br><br>
        
        <label>Select Seat Type</label>
        <input type="radio" class="seat1" name="seat" value="gold" >    <span>GOLD   &nbsp;&nbsp;</span>
	<input type="radio" class="seat2" name="seat" value="silver" >  <span>SILVER &nbsp;&nbsp;</span>
        <input type="radio" class="seat3" name="seat" value="bronze" >  <span>BRONZE &nbsp;&nbsp;</span>
	<input type="radio" class="seat4" name="seat" value="box" >     <span>BOX    &nbsp;&nbsp;</span>

        <br><br><br><br>
        
        <label>Mode of Payment</label>

        <input type="radio" class="cash"  name="pay" value="cash" >    <span>Cash</span>
	<input type="radio" class="vcard" name="pay" value="vcard" >  <span>Visa Card</span>
	<input type="radio" class="mcard" name="pay" value="mcard" >  <span>Master Card</span>
	<input type="radio" class="acard" name="pay" value="acard" >  <span>American Card</span>
        
        <br><br><br><br>
        
        <label>Card Number</label>
        <input type="text" class="cinema" name="cardnum" placeholder="Not Required with Cash">
        
        <br><br><br><br>
        
        <div class="button">
        <input type="submit" value="Book Tickets">
        </div>

</form>
</body>
</html>