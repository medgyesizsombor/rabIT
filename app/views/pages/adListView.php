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
    <a href="<?php echo ROOT?>/userListController">USERS</a>
    <a href="<?php echo ROOT?>/adListController" class="active">ADVERTISEMENTS</a>
</nav>
</div>
<div class="container">
    <h1>In this page you can see all of the advertisements</h1>
        <table>
            <tr>
                <th>Advertisements</th>
                <th>Users</th>
            </tr>
            <?php foreach ($this->view_data as $row) { ?>
            <tr >
                <td> <?php echo $row[1]; ?></td>
                <td> <?php echo $row[0]; ?></td>
            </tr>
        <?php } ?>
        </table>
</div>
</body>
</html>