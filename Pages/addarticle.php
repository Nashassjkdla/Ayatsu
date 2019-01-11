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
                <a href='../index.php'>
                <img src="../title.png" id="titlelogin" class="center">
                </a>
                <form action="insertarticle.php" method="post" id="form1" enctype="multipart/form-data">
                    <input type="text" class="inputs" placeholder="Name" name="name">
                    <input type="text" class="inputs" placeholder="Notes" name="notes">
                </form>
                <button onclick="" form="form1" type="submit" id="loginbutton"><span>Add</span></button>
            </div>
        </div>



        <?php
        require_once(__ROOT__ . '/pages/connect.php');
        ?>

        <script type="text/javascript">



        </script>
    </body>
</html> 