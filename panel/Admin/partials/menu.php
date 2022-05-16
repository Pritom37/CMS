<!-- Database Connection Starts --->
<?php include('C:/xampp/htdocs/cms/config/constants.php'); ?>
<!-- Database Connection Ends --->
<!-- Authorization Check Starts --->
<?php include('C:/xampp/htdocs/cms/panel/Admin/partials/login-check.php'); ?>
<!-- Authorization Check Ends --->
<html>

<head>
    <title>
        <?php if (isset($pageTitle)) {
            echo $pageTitle;
        } else {
            echo "Admin Panel > Smart ClassRoom ";
        } ?>
    </title>

    <link rel="stylesheet" href="<?php echo SITEURL; ?>css/login.css">
    <style>
        .dropbtn {
            text-decoration: none;
            font-weight: bold;
            color: #ff4757;
            font-size: 16px;
            transition: 0.5s;
            border: none;
            background-color: #dfdfdf;

        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            top: 26px;
            display: none;
            position: absolute;
            background-color: #dfdfdf;
            min-width: 180px;
            z-index: 1;

        }

        .dropdown-content a {
            color: black;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            color: #dfe4ea;
            background-color: #ff4757;
            border-radius: 3px;
            

        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        

        .dropdown:hover .dropbtn {
            color: #dfe4ea;
            background-color: #ff4757;
            border-radius: 3px;
        }
    </style>
</head>

<body>
    <!-- <div class="wrapper">
            <h1 class="text-center adminHead">Admin Panel</h1>
        </div> -->
    <!-- Menu Section Starts --->
    <div class="menu ">
        <div class="wrapper">
            <ul>
                <li><a href="<?php echo SITEURL; ?>panel/Admin/">Dashboard</a></li>
                <li><a href="<?php echo SITEURL; ?>">Visit Website</a></li>
                <li>
                    <div class="dropdown">
                        <a class="dropbtn">Manage User</a>
                        <div class="dropdown-content">
                            <a href="AdminManage.php">Manage Admin</a>
                            <a href="TeacherManage.php">Manage Teacher</a>
                            <a href="StudentManage.php">Manage Student</a>
                            <a href="StaffManage.php">Manage Staff</a>
                        </div>
                    </div>
                </li>
                <li><a href="../Admin/courses-manage.php">Manage Courses</a></li>
                <li><a href="../Admin/class-manage.php">Manage Class</a></li>
                <li><a href="../Admin/attendance-manage.php">Manage Attendence</a></li>
                <li><a href="../Admin/routine-manage.php">Manage Routine</a></li>
                <li><a href="../Admin/partials/logout.php">LogOut</a></li>


            </ul>
        </div>
    </div>
    <!-- Menu Section Ends --->