<?php include '../header.php';?>

    <center>
    <h1 id="headline">Configure the WiFi</h1>
    </center>
     <div id="container_general">
	<div class='warning'>
    If you forget your new password you'll need to connect to the LAN port over
ethernet cable, then visit 10.10.11.1 in
the browser to change it.
	</div>
      <form enctype="multipart/form-data" action="wlanset.php" method="post">
        Set new Access Point name (ESSID): 
        <input name="ssid" type="text" placeholder="network name" />
        <br><br>
        Set a new WPA2 PSK password: 
        <input name="password" type="text" placeholder="password" />
        <br><br>
        Set a new channel: 
        <input name="channel" type="text" placeholder="channel" />
        <br><br>
        <input type="submit" value="save" />
      </form>
        <br><br>
      </div>
<?php include '../footer.php';?>