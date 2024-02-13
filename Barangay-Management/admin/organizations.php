<?php //include 'sessionLimit.php' ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Organizations</title>
    <style type="text/css">
        .orgClass .form-label{
            font-weight: bold;
        }
        .orgClass input[type=text]:focus {
            box-shadow: inset 0 -2px 0 #ddd;
            border-radius: unset;
        }
        .orgClass input[type=text] {
            box-shadow: inset 0 -2px 0 #ddd;
            border-radius: unset;
            border: none !important;
        }
    </style>
    <?php include 'header.php'; ?>
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <main class="content px-4 pb-3 pt-4">
        <h4 class="text-white">Organizations</h4>
        <hr class="text-white">
        <section class="pt-2 d-flex flex-column row-gap-3 bg-white shadow-sm p-4 rounded">
            <form class="orgClass py-2">
                <input type="text" name="performed" value="<?php echo $admin?>" hidden>
                <input type="text" name="activity" value="<?php echo $admin?> Update the Organization Chart" hidden>
                <?php
                include '../connect.php';
                $select = $conn->query("SELECT * FROM org_tbl");
                $row=$select->fetch_assoc();
                ?>
                <input type="text" name="id" value="<?php echo $row['id'];?>" hidden>
                <div class="d-flex flex-column col-sm-4 mx-auto">
                    <input type="text" name="mayor" id="Surname" class="form-control text-center fs-4 " value="<?php echo $row['mayor'];?>" autocomplete="off">
                    <label class="form-label text-center">Mayor</label>
                    <i class="fa-solid fa-arrow-down-long fs-1"></i>
                    <img src="../upload/logo.png" width="150" height="150" class="mx-auto">
                    <i class="fa-solid fa-arrow-down-long fs-1"></i>

                </div>
                <div class="row pt-2">
                    <div class="d-flex flex-column col-sm-4 mx-auto">
                        <input type="text" name="bt" id="Surname" class="form-control text-center fs-4 " value="<?php echo $row['bt'];?>" autocomplete="off">
                        <label class="form-label text-center">Barangay Treasurer</label>
                    </div>
                    <div class="d-flex flex-column col-sm-4 mx-auto">
                        <input type="text" name="bc" id="Surname" class="form-control text-center fs-4 " value="<?php echo $row['bc'];?>" autocomplete="off">
                        <label class="form-label text-center">Barangay Captain</label>
                    </div>
                    <div class="d-flex flex-column col-sm-4 mx-auto">
                        <input type="text" name="bs" id="Surname" class="form-control text-center fs-4 " value="<?php echo $row['bs'];?>" autocomplete="off">
                        <label class="form-label text-center">Barangay Secretary</label>
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="d-flex flex-column col-sm-4 mx-auto">
                        <input type="text" name="bk1" id="Surname" class="form-control text-center fs-4 " value="<?php echo $row['bk1'];?>" autocomplete="off">
                        <label class="form-label text-center">Barangay Kagawad</label>
                    </div>
                    <div class="d-flex flex-column col-sm-4 mx-auto">
                        <input type="text" name="bk2" id="Surname" class="form-control text-center fs-4 " value="<?php echo $row['bk2'];?>" autocomplete="off">
                        <label class="form-label text-center">Barangay Kagawad</label>
                    </div>
                    <div class="d-flex flex-column col-sm-4 mx-auto">
                        <input type="text" name="bk3" id="Surname" class="form-control text-center fs-4 " value="<?php echo $row['bk3'];?>" autocomplete="off">
                        <label class="form-label text-center">Barangay Kagawad</label>
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="d-flex flex-column col-sm-4 mx-auto">
                        <input type="text" name="bk4" id="Surname" class="form-control text-center fs-4 " value="<?php echo $row['bk4'];?>" autocomplete="off">
                        <label class="form-label text-center">Barangay Kagawad</label>
                    </div>
                    <div class="d-flex flex-column col-sm-4 mx-auto">
                        <input type="text" name="bk5" id="Surname" class="form-control text-center fs-4 " value="<?php echo $row['bk5'];?>" autocomplete="off">
                        <label class="form-label text-center">Barangay Kagawad</label>
                    </div>
                    <div class="d-flex flex-column col-sm-4 mx-auto">
                        <input type="text" name="bk6" id="Surname" class="form-control text-center fs-4 " value="<?php echo $row['bk6'];?>" autocomplete="off">
                        <label class="form-label text-center">Barangay Kagawad</label>
                    </div>
                </div>
                <div class="d-flex pt-3">
                    <input type="submit" name="submit" value="Update" class="btn btn-primary fw-bold ms-auto">
                </div>
            </form>
            
        </section>
    </main>
</body>
    <?php include 'footer.php' ;?>
</html>

