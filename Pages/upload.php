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
                <form action="insertimg.php" method="post" id="form1" enctype="multipart/form-data">
                    <input type="text" class="inputs" placeholder="Name" name="name">
                    <input type="text" class="inputs" placeholder="Notes" name="notes">
                    <select name="articleId">


                        <?php
                        require_once(__ROOT__ . '/pages/connect.php');
                        $query = 'SELECT id, name from article order by inputdate desc';

                        if ($result = $pdo->query($query)) {

                            while ($row = $result->fetch()) {
                                echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                            }
                        }
                        ?>
                        <option value="0">New article</option>  
                    </select>
                    <input type="file" class="inputs" placeholder="file" name="file">
                </form>
                <button onclick="" form="form1" type="submit" id="loginbutton"><span>Upload</span></button>
            </div>
        </div>
    </body>
</html> 