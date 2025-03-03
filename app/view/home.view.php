<?php
    $user = new User;
    foreach($user->select() as $row) {
        print_r($row);
    }
?>
<html>
    <head>
        <link rel="stylesheet" href="<?php echo ROOT; ?>/public/assets/css/style.css" />
    </head>
    <body>
        <h1 class="red">HOME VIEW</h1>
        <img src="<?php echo ROOT; ?>/public/assets/images/home.jpg" />
    </body>
</html>