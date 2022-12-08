<?php
$title = "Score Page";
require_once("./components/header.php");
?>

<link rel="stylesheet" type="text/css" href="./css/nav.css">
<link rel="stylesheet" type="text/css" href="./css/score.css">

</head>

<body>
    <?php require("./components/nav.php"); ?>

    <div class="container">
        <div class="card cardScoreTeam">
            <div class="card-header">
                Group A
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ทีม</th>
                            <th scope="col teamName"></th>
                            <th scope="col">แข่ง</th>
                            <th scope="col">ชนะ</th>
                            <th scope="col">เสมอ</th>
                            <th scope="col">แพ้</th>
                            <th scope="col">ได้</th>
                            <th scope="col">เสีย</th>
                            <th scope="col">ต่าง</th>
                            <th scope="col">แต้ม</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <img src="./img/A4-netherlands.png" class="imgFlagTeamm"> เนเธอร์แลนด์
                            </td>
                            <td>3</td>
                            <td>2</td>
                            <td>1</td>
                            <td>0</td>
                            <td>5</td>
                            <td>1</td>
                            <td>4</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>
                                <img src="./img/A3-senegal.png" class="imgFlagTeamm"> เซเนกัล
                            </td>
                            <td>3</td>
                            <td>2</td>
                            <td>0</td>
                            <td>1</td>
                            <td>5</td>
                            <td>4</td>
                            <td>1</td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>
                                <img src="./img/A2-ecuador.png" class="imgFlagTeamm"> เอกวาดอร์
                            </td>
                            <td>3</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>4</td>
                            <td>3</td>
                            <td>1</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>
                                <img src="./img/A1-qatar.jpg" class="imgFlagTeamm"> กาตาร์
                            </td>
                            <td>3</td>
                            <td>0</td>
                            <td>0</td>
                            <td>3</td>
                            <td>1</td>
                            <td>7</td>
                            <td>-6</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>