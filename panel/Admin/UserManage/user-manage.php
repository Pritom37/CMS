<!-- Database Connection Starts --->
<?php include('C:/xampp/htdocs/cms/config/constants.php');?>
        <!-- Database Connection Ends --->
        
        <!-- Authorization Check Starts --->
        <?php include('C:/xampp/htdocs/cms/panel/Admin/partials/login-check.php');?>
        <!-- Authorization Check Ends --->
    <html>
    <head>
    <title>
   <?php if (isset($pageTitle)) {
       echo $pageTitle;
   } else {
       echo "Admin Panel > Smart ClassRoom ";
   }?>
</title>

        <link rel="stylesheet" href="<?php echo SITEURL; ?>css/login.css">
    </head>

    <body>
        <div class="wrapper">
            <h1 class="text-center adminHead" >Manage User</h1>
        </div>
<!-- Menu Section Starts --->
<div class="menu text-center">
            <div class="wrapper">
         
            <ul>
                <li><a  href="AdminManage.php" target="_self">Manage Admin</a></li>
                <li><a href="TeacherManage.php">Manage Teacher</a></li>
                <li><a href="StudentManage.php">Manage Student</a></li>
                <li><a href="StaffManage.php">Manage Staff</a></li>

                <li class="btn-primary"><a href="../index.php"><?php echo $_SESSION['user']; ?></a></li>
                


            </ul>
           
        </div>
 </div>
        <!-- Menu Section Ends --->

      