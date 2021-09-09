<?php
// PHP Hotel Booking All Rights Reserved
// A software product of NetArt Media, All Rights Reserved
// Find out more about our products and services on:
// http://www.netartmedia.net
// Released under the MIT license
?><?php
if(!isset($_COOKIE["AuthUser"])) 
{
?>
	
	<a target="_blank" href="http://www.netartmedia.net/en_Contact.html" class="top-right-link"><img src=""/>
	<?php echo $this->texts["have_questions"];?>
	</a>
<?php
}
else
{
?>
	<a href="index.php?page=bookings" class="top-right-link"><img src=""/>
	<?php echo $this->texts["new_bookings"];?>
	</a> 
	<a href="index.php?page=confirmed" class="top-right-link"><img src=""/>
	<?php echo $this->texts["confirmed_bookings"];?>
	</a> 
	
	<a href="index.php?page=rooms" class="top-right-link"><img src=""/>
	<?php echo $this->texts["manage_rooms"];?>
	</a> 
	<a href="index.php?page=settings" class="top-right-link"><img src="images/settings.png"/>
	<?php echo $this->texts["settings"];?>
	</a> 
	<a href="logout.php" class="top-right-link"><img src="images/logout.png"/>
	<?php echo $this->texts["logout"];?>
	</a>

<?php
}
?>
