<?php
$title = "Manage";
require_once("./components/header.php");
?>
<link rel="stylesheet" href="./css/nav_admin.css">
<link rel="stylesheet" href="./css/manage.css">

</head>

<body>
    <?php require("./components/nav_admin.php") ?>

    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="manageTeam-tab" data-bs-toggle="tab" data-bs-target="#manageTeam" type="button" role="tab" aria-controls="manageTeam" aria-selected="true">จัดการทีม</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="manageRace-tab" data-bs-toggle="tab" data-bs-target="#manageRace" type="button" role="tab" aria-controls="manageRace" aria-selected="false">จัดรายการแข่ง</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">จัดการผลการแข่ง</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="manageTeam" role="tabpanel" aria-labelledby="manageTeam-tab">
                <div class="div-manageTeam">
                    <h3 class="tap-text-title" id="tableIndex">จัดการทีมฟุตบอล</h3>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-addTeam" data-bs-toggle="modal" data-bs-target="#addManageTeam">
                        เพิ่มทีม
                    </button>
                    <br>

                    <!-- Modal -->
                    <div class="modal fade" id="addManageTeam" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">เพิ่มทีมฟุตบอล</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="addInputGroup" class="form-label">กลุ่ม</label>
                                            <input type="text" class="form-control" id="addInputGroup">
                                        </div>
                                        <div class="mb-3">
                                            <label for="addInputFlag" class="form-label">ธง</label>
                                            <input type="file" class="form-control" id="addInputFlag">
                                        </div>
                                        <div class="mb-3">
                                            <label for="addInputTeam" class="form-label">ชื่อทีม/ประเทศ</label>
                                            <input type="text" class="form-control" id="addInputTeam">
                                        </div>

                                        <div class="manageAddButton">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                                            <button type="submit" class="btn btn-success">ตกลง</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">กลุ่ม</th>
                                <th scope="col">ธง</th>
                                <th scope="col">ทีม</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <th>A</th>
                                <th><img src="./img/A1-qatar.jpg" class="manage-imgFlag"></th>
                                <td>กาตาร์</td>
                                <td>
                                    <button type="button" class="btn-editTeam" data-bs-toggle="modal" data-bs-target="#editManageTeam">แก้ไข</button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="editManageTeam" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">แก้ไขทีมฟุตบอล</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="mb-3">
                                                            <label for="addInputGroup" class="form-label" style="float: left;">กลุ่ม</label>
                                                            <input type="text" class="form-control" id="addInputGroup">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="addInputFlag" class="form-label" style="float: left;">ธง</label>
                                                            <input type="file" class="form-control" id="addInputFlag">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="addInputTeam" class="form-label" style="float: left;">ชื่อทีม/ประเทศ</label>
                                                            <input type="text" class="form-control" id="addInputTeam">
                                                        </div>

                                                        <div class="manageAddButton">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                                                            <button type="submit" class="btn btn-warning">แก้ไข</button>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a type="button" class="btn-deleteTeam" data-bs-toggle="modal" data-bs-target="#deleteManageTeam">ลบ</a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteManageTeam" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">ลบทีมฟุตบอล</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body p-5">
                                                    <h3 >คุณต้องการ ลบทีม...หรือไม่?</h3>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                                                    <button type="button" class="btn btn-danger">ลบ</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <th>A</th>
                                <th><img src="./img/A2-ecuador.png" class="manage-imgFlag"></th>
                                <td>เอกวาดอร์</td>
                                <td><a type="button" class="btn-editTeam">แก้ไข</a></td>
                                <td><a type="button" class="btn-deleteTeam">ลบ</a></td>
                            </tr>
                            <th scope="row">3</th>
                            <th>A</th>
                            <th><img src="./img/A3-senegal.png" class="manage-imgFlag"></th>
                            <td>เซเนกัล</td>
                            <td><a type="button" class="btn-editTeam">แก้ไข</a></td>
                            <td><a type="button" class="btn-deleteTeam">ลบ</a></td>
                            </tr>
                            <th scope="row">4</th>
                            <th>A</th>
                            <th><img src="./img/A4-netherlands.png" class="manage-imgFlag"></th>
                            <td>เนเธอร์แลนด์</td>
                            <td><a type="button" class="btn-editTeam">แก้ไข</a></td>
                            <td><a type="button" class="btn-deleteTeam">ลบ</a></td>
                            </tr>
                            <th scope="row">5</th>
                            <th>B</th>
                            <th><img src="./img/B1-england.png" class="manage-imgFlag"></th>
                            <td>อังกฤษ</td>
                            <td><a type="button" class="btn-editTeam">แก้ไข</a></td>
                            <td><a type="button" class="btn-deleteTeam">ลบ</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="manageRace" role="tabpanel" aria-labelledby="manageRace-tab">จัดรายการแข่ง</div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">.3.</div>
        </div>
    </div>
</body>

</html>