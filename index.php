<?php
$title = "Home Page";
require_once("./components/header.php");
?>

<link rel="stylesheet" type="text/css" href="./css/nav.css">
<link rel="stylesheet" type="text/css" href="./css/index.css">
<link rel="stylesheet" type="text/css" href="./css/card.css">
<link rel="stylesheet" type="text/css" href="./css/table.css">

</head>

<body>
    <?php require("./components/nav.php"); ?>

    <div class="wallpaper">
        <div class="content-wallpaper">
            <h1 class="text-wallpaper">FIFA World Cup Qatar 2022</h1>
            <p>20 November to 18 December 2022</p>
        </div>
    </div>

    <?php require("./components/card_group.php"); ?>
    <?php require("./components/table.php"); ?>

</body>

</html>