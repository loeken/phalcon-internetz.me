<?php
        mysql_connect("localhost","c32LocaButt","Pwv46R6Bw3") OR DIE ("connection to db failed");
        mysql_select_db("c32db1") or die ("db does not exist");
        $sql = "SELECT * FROM news LIMIT 10;";
        $result = mysql_query($sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Welcome!</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="/favicon.ico" />
    <meta name="robots" content="noindex" />

</head>
<body>
    <div id="page">
        <div id="header" class="header">
            <h1>Welcome to your first website with internetz.me</h1>
        </div>
        <div id="content">
            <h2>News:</h2>
            <?php
            while ($row = mysql_fetch_array($result)) {
                echo '<h1>' . $row['title'] . '</h1>';
                echo '<p>' . $row['datetime'] . '</p>';
                echo '<p>' . $row['content'] . '</p>';
            }
            ?>
            <p></p>
        </div>
        <div id="footer">
            <p>Powered by <a href="https://internetz.me/">Internetz.me</a></p>
        </div>
    </div>
</body>
</html>
