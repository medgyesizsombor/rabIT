<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo TITLE; ?></title>
    <link rel="stylesheet" href="<?php echo ROOT;?>/assets/css/style.css">
</head>
<body>
<nav>
    <a href="<?php echo ROOT?>/">HOME</a>
    <a href="<?php echo ROOT?>/userListController" class="active">USERS</a>
    <a href="<?php echo ROOT?>/adListController">ADVERTISEMENTS</a>
</nav>
</div>
<div class="container">
    <h1>In this page you can see all of the users</h1>
        <table>
                <tr>
                    <th>Name</th>
                </tr>
                <?php foreach ($this->view_data as $row) { ?>
                <tr >
                    <td> <?php echo $row[1]; ?></td>
                </tr>
            <?php } ?>
        </table>
</div>
</body>
</html>