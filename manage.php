<?php
$title = "Manage Page";
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
                                <td>A</td>
                                <td><img src="./img/A1-qatar.jpg" class="manage-imgFlag"></td>
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
                                                    <h3>คุณต้องการ ลบทีม...หรือไม่?</h3>
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
                                <td>A</td>
                                <td><img src="./img/A2-ecuador.png" class="manage-imgFlag"></td>
                                <td>เอกวาดอร์</td>
                                <td><a type="button" class="btn-editTeam">แก้ไข</a></td>
                                <td><a type="button" class="btn-deleteTeam">ลบ</a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>A</td>
                                <td><img src="./img/A3-senegal.png" class="manage-imgFlag"></td>
                                <td>เซเนกัล</td>
                                <td><a type="button" class="btn-editTeam">แก้ไข</a></td>
                                <td><a type="button" class="btn-deleteTeam">ลบ</a></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>A</td>
                                <td><img src="./img/A4-netherlands.png" class="manage-imgFlag"></td>
                                <td>เนเธอร์แลนด์</td>
                                <td><a type="button" class="btn-editTeam">แก้ไข</a></td>
                                <td><a type="button" class="btn-deleteTeam">ลบ</a></td>
                            </tr>
                            <tr>
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

            <div class="tab-pane fade" id="manageRace" role="tabpanel" aria-labelledby="manageRace-tab">
                <div class="div-manageTeam">
                    <h3 class="tap-text-title" id="tableIndex">จัดรายการแข่ง</h3>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-addTeam" data-bs-toggle="modal" data-bs-target="#addManageMatch">
                        เพิ่มการแข่งขัน
                    </button>
                    <br>

                    <!-- Modal -->
                    <div class="modal fade" id="addManageMatch" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">เพิ่มรายการแข่ง</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="addInputDateGame" class="form-label">วันที่แข่ง</label>
                                            <input type="date" class="form-control" id="addInputDateGame">
                                        </div>
                                        <div class="mb-3">
                                            <label for="addInputTimeGame" class="form-label">เริ่มแข่งในเวลา</label>
                                            <input type="time" class="form-control" id="addInputTimeGame">
                                        </div>

                                        <div class="mb-3 select-div">
                                            <select class="form-select mb-3" aria-label="Default select example">
                                                <option selected>เลือกกลุ่ม</option>
                                                <option value="1">A</option>
                                                <option value="2">B</option>
                                                <option value="3">C</option>
                                            </select>
                                            <select class="form-select mb-3" aria-label="Default select example">
                                                <option selected>เลือกทีมที่1</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <div class="mb-3">
                                                <label for="addInputTimeGame" class="form-label">ผลคะแนน</label>
                                                <input type="text" class="form-control" id="addInputTimeGame">
                                            </div>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>เลือกทีมที่2</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <div class="mb-3">
                                                <label for="addInputTimeGame" class="form-label">ผลคะแนน</label>
                                                <input type="text" class="form-control" id="addInputTimeGame">
                                            </div>
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
                                <th scope="col">ลำดับ</th>
                                <th scope="col">วันที่</th>
                                <th scope="col">เวลา</th>
                                <th scope="col">กลุ่ม</th>
                                <th scope="col">ทีมที่ 1</th>
                                <th scope="col">ผลคะแนน</th>
                                <th scope="col">ทีมที่ 2</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>30/11/2565</td>
                                <td>02.00 น.</td>
                                <td>B</td>
                                <td>อิหร่าน</td>
                                <td>0-1</td>
                                <td>สหรัฐอเมริกา</td>
                                <td>
                                    <button type="button" class="btn-editTeam" data-bs-toggle="modal" data-bs-target="#editManageMatch">แก้ไข</button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="editManageMatch" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">แก้ไขรายการแข่ง</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="mb-3">
                                                            <label for="addInputDateGame" class="form-label">วันที่แข่ง</label>
                                                            <input type="date" class="form-control" id="addInputDateGame">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="addInputTimeGame" class="form-label">เริ่มแข่งในเวลา</label>
                                                            <input type="time" class="form-control" id="addInputTimeGame">
                                                        </div>

                                                        <div class="mb-3 select-div">
                                                            <select class="form-select mb-3" aria-label="Default select example">
                                                                <option selected>เลือกกลุ่ม</option>
                                                                <option value="1">A</option>
                                                                <option value="2">B</option>
                                                                <option value="3">C</option>
                                                            </select>
                                                            <select class="form-select mb-3" aria-label="Default select example">
                                                                <option selected>เลือกทีมที่1</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                            <div class="mb-3">
                                                                <label for="addInputTimeGame" class="form-label">ผลคะแนน</label>
                                                                <input type="text" class="form-control" id="addInputTimeGame">
                                                            </div>
                                                            <select class="form-select" aria-label="Default select example">
                                                                <option selected>เลือกทีมที่2</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                            <div class="mb-3">
                                                                <label for="addInputTimeGame" class="form-label">ผลคะแนน</label>
                                                                <input type="text" class="form-control" id="addInputTimeGame">
                                                            </div>
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
                                </td>
                                <td>
                                    <a type="button" class="btn-deleteTeam" data-bs-toggle="modal" data-bs-target="#deleteManageMatch">ลบ</a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteManageMatch" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">ลบรายการแข่ง</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body p-5">
                                                    <h3>คุณต้องการ ลบรายการแข่งระหว่าง...และ...หรือไม่?</h3>
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
                                <td>30/11/2565</td>
                                <td>02.00 น.</td>
                                <td>B</td>
                                <td>เวลส์</td>
                                <td>(อยู่ระหว่างการแข่งขัน)</td>
                                <td>อังกฤษ</td>
                                <td><a type="button" class="btn-editTeam">แก้ไข</a></td>
                                <td><a type="button" class="btn-deleteTeam">ลบ</a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>30/11/2565</td>
                                <td>22.00 น.</td>
                                <td>D</td>
                                <td>ตูนิเซีย</td>
                                <td>-</td>
                                <td>ฝรั่งเศส</td>
                                <td><a type="button" class="btn-editTeam">แก้ไข</a></td>
                                <td><a type="button" class="btn-deleteTeam">ลบ</a></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>30/11/2565</td>
                                <td>22.00 น.</td>
                                <td>D</td>
                                <td>ออสเตรเลีย</td>
                                <td>-</td>
                                <td>เดนมาร์ก</td>
                                <td><a type="button" class="btn-editTeam">แก้ไข</a></td>
                                <td><a type="button" class="btn-deleteTeam">ลบ</a></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>31/11/2565</td>
                                <td>02.00 น.</td>
                                <td>C</td>
                                <td>โปแลนด์</td>
                                <td>-</td>
                                <td>อาร์เจนตินา</td>
                                <td><a type="button" class="btn-editTeam">แก้ไข</a></td>
                                <td><a type="button" class="btn-deleteTeam">ลบ</a></td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>31/11/2565</td>
                                <td>02.00 น.</td>
                                <td>C</td>
                                <td>ซาอุดีอาระเบีย</td>
                                <td>-</td>
                                <td>เม็กซิโก</td>
                                <td><a type="button" class="btn-editTeam">แก้ไข</a></td>
                                <td><a type="button" class="btn-deleteTeam">ลบ</a></td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>31/11/2565</td>
                                <td>22.00 น.</td>
                                <td>F</td>
                                <td>โครเอเชีย</td>
                                <td>-</td>
                                <td>เบลเยียม</td>
                                <td><a type="button" class="btn-editTeam">แก้ไข</a></td>
                                <td><a type="button" class="btn-deleteTeam">ลบ</a></td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>31/11/2565</td>
                                <td>22.00 น.</td>
                                <td>F</td>
                                <td>แคนาดา</td>
                                <td>-</td>
                                <td>โมร็อกโก</td>
                                <td><a type="button" class="btn-editTeam">แก้ไข</a></td>
                                <td><a type="button" class="btn-deleteTeam">ลบ</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="div-manageTeam">
                    <h3 class="tap-text-title mb-5" id="tableIndex">จัดการผลการแข่ง</h3>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-addTeam" data-bs-toggle="modal" data-bs-target="#addManageScore">
                        เพิ่มทีมและประวัติคะแนน
                    </button>
                    <br>

                    <!-- Modal -->
                    <div class="modal fade" id="addManageScore" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">เพิ่มทีมและประวัติคะแนน</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3 select-div">
                                            <select class="form-select mb-3" aria-label="Default select example">
                                                <option selected>เลือกกลุ่ม</option>
                                                <option value="1">A</option>
                                                <option value="2">B</option>
                                                <option value="3">C</option>
                                            </select>
                                            <select class="form-select mb-3" aria-label="Default select example">
                                                <option selected>เลือกทีม</option>
                                                <option value="1">A</option>
                                                <option value="2">B</option>
                                                <option value="3">C</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="addInputDateGame" class="form-label">จำนวนครั้งที่แข่ง</label>
                                            <input type="number" class="form-control" id="addInputDateGame">
                                        </div>
                                        <div class="mb-3">
                                            <label for="addInputDateGame" class="form-label">ครั้งที่ชนะ</label>
                                            <input type="number" class="form-control" id="addInputDateGame">
                                        </div>
                                        <div class="mb-3">
                                            <label for="addInputDateGame" class="form-label">ครั้งที่เสมอ</label>
                                            <input type="number" class="form-control" id="addInputDateGame">
                                        </div>
                                        <div class="mb-3">
                                            <label for="addInputDateGame" class="form-label">ครั้งที่แพ้</label>
                                            <input type="number" class="form-control" id="addInputDateGame">
                                        </div>
                                        <div class="mb-3">
                                            <label for="addInputDateGame" class="form-label">จำนวนที่ได้</label>
                                            <input type="number" class="form-control" id="addInputDateGame">
                                        </div>
                                        <div class="mb-3">
                                            <label for="addInputDateGame" class="form-label">จำนวนที่เสีย</label>
                                            <input type="number" class="form-control" id="addInputDateGame">
                                        </div>
                                        <div class="mb-3">
                                            <label for="addInputDateGame" class="form-label">จำนวนที่ต่าง</label>
                                            <input type="number" class="form-control" id="addInputDateGame">
                                        </div>
                                        <div class="mb-3">
                                            <label for="addInputDateGame" class="form-label">แต้ม</label>
                                            <input type="number" class="form-control" id="addInputDateGame">
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
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>A</th>
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
                                <td>
                                    <button type="button" class="btn-editTeam" data-bs-toggle="modal" data-bs-target="#editManageScore">แก้ไข</button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="editManageScore" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">แก้ไขคะแนน</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="mb-3 select-div">
                                                            <select class="form-select mb-3" aria-label="Default select example">
                                                                <option selected>เลือกกลุ่ม</option>
                                                                <option value="1">A</option>
                                                                <option value="2">B</option>
                                                                <option value="3">C</option>
                                                            </select>
                                                            <select class="form-select mb-3" aria-label="Default select example">
                                                                <option selected>เลือกทีม</option>
                                                                <option value="1">A</option>
                                                                <option value="2">B</option>
                                                                <option value="3">C</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="addInputDateGame" class="form-label">จำนวนครั้งที่แข่ง</label>
                                                            <input type="number" class="form-control" id="addInputDateGame">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="addInputDateGame" class="form-label">ครั้งที่ชนะ</label>
                                                            <input type="number" class="form-control" id="addInputDateGame">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="addInputDateGame" class="form-label">ครั้งที่เสมอ</label>
                                                            <input type="number" class="form-control" id="addInputDateGame">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="addInputDateGame" class="form-label">ครั้งที่แพ้</label>
                                                            <input type="number" class="form-control" id="addInputDateGame">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="addInputDateGame" class="form-label">จำนวนที่ได้</label>
                                                            <input type="number" class="form-control" id="addInputDateGame">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="addInputDateGame" class="form-label">จำนวนที่เสีย</label>
                                                            <input type="number" class="form-control" id="addInputDateGame">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="addInputDateGame" class="form-label">จำนวนที่ต่าง</label>
                                                            <input type="number" class="form-control" id="addInputDateGame">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="addInputDateGame" class="form-label">แต้ม</label>
                                                            <input type="number" class="form-control" id="addInputDateGame">
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
                                </td>
                                <td>
                                    <a type="button" class="btn-deleteTeam" data-bs-toggle="modal" data-bs-target="#deleteManageScore">ลบ</a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteManageScore" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">ลบผลคะแนน</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body p-5">
                                                    <h3>คุณต้องการ ลบผลคะแนนของทีม...หรือไม่?</h3>
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
                                <th scope="row">A</th>
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
                                <td><a type="button" class="btn-editTeam">แก้ไข</a></td>
                                <td><a type="button" class="btn-deleteTeam">ลบ</a></td>
                            </tr>
                            <tr>
                                <th scope="row">A</th>
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
                                <td><a type="button" class="btn-editTeam">แก้ไข</a></td>
                                <td><a type="button" class="btn-deleteTeam">ลบ</a></td>
                            </tr>
                            <tr>
                                <th scope="row">A</th>
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
                                <td><a type="button" class="btn-editTeam">แก้ไข</a></td>
                                <td><a type="button" class="btn-deleteTeam">ลบ</a></td>
                            </tr>
                            <tr>
                                <th scope="row">B</th>
                                <td>
                                    <img src="./img/B1-england.png" class="imgFlagTeamm"> อังกฤษ
                                </td>
                                <td>3</td>
                                <td>2</td>
                                <td>1</td>
                                <td>0</td>
                                <td>9</td>
                                <td>2</td>
                                <td>7</td>
                                <td>7</td>
                                <td><a type="button" class="btn-editTeam">แก้ไข</a></td>
                                <td><a type="button" class="btn-deleteTeam">ลบ</a></td>
                            </tr>
                            <tr>
                                <th scope="row">B</th>
                                <td>
                                    <img src="./img/B3-united.png" class="imgFlagTeamm"> สหรัฐอเมริกา
                                </td>
                                <td>3</td>
                                <td>1</td>
                                <td>2</td>
                                <td>0</td>
                                <td>2</td>
                                <td>1</td>
                                <td>1</td>
                                <td>5</td>
                                <td><a type="button" class="btn-editTeam">แก้ไข</a></td>
                                <td><a type="button" class="btn-deleteTeam">ลบ</a></td>
                            </tr>
                            <tr>
                                <th scope="row">B</th>
                                <td>
                                    <img src="./img/B2-iran.jpg" class="imgFlagTeamm"> อิหร่าน
                                </td>
                                <td>3</td>
                                <td>1</td>
                                <td>0</td>
                                <td>2</td>
                                <td>4</td>
                                <td>7</td>
                                <td>-3</td>
                                <td>3</td>
                                <td><a type="button" class="btn-editTeam">แก้ไข</a></td>
                                <td><a type="button" class="btn-deleteTeam">ลบ</a></td>
                            </tr>
                            <tr>
                                <th scope="row">B</th>
                                <td>
                                    <img src="./img/B4-wales.png" class="imgFlagTeamm"> เวลส์
                                </td>
                                <td>3</td>
                                <td>0</td>
                                <td>1</td>
                                <td>2</td>
                                <td>1</td>
                                <td>6</td>
                                <td>-5</td>
                                <td>1</td>
                                <td><a type="button" class="btn-editTeam">แก้ไข</a></td>
                                <td><a type="button" class="btn-deleteTeam">ลบ</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</body>

</html>