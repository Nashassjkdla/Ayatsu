<html>
<head>
    <?php
    require_once('../base.php');
    ?>
<link rel="stylesheet" type="text/css" href="../style.css">
<link rel="stylesheet" type="text/css" href="login.css">
<script src="jquery-3.3.1.min"></script>
</head>
<body>
<div id="content2">
	  <div id="loginblock">
	<img src="../title.png" id="titlelogin" class="center">
        <form action="logging.php" method="post" id="form1">
        <input type="text" class="inputs" placeholder="Username" name="username">
        <input type="password" class="inputs" placeholder="Password" name="pass">
        </form>
        <button onclick="" form="form1" type="submit" id="loginbutton"><span>Log in</span></button>
	</div>
</div>



<?php

  require_once(__ROOT__ .'/connect.php');




?>

<script type="text/javascript">

	

</script>
</body>
</html> 