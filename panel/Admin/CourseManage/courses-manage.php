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
            <h1 class="text-center adminHead">Manage Courses</h1>
        </div>
