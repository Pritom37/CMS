    <!-- Database Connection Starts --->
<?php include('C:/xampp/htdocs/cms/config/constants.php');?>
        <!-- Database Connection Ends --->
    <?php 
    
    //1.Get the ID if Admin to be deleted
     $id = $_GET['id'];
    // echo $id = $_GET['id']; shows id using get method

    //2.Create SQL query to Delete Admin
    $sql = "DELETE FROM tbl_user WHERE uid=$id";
    //2.1: Execute the query
    $res = mysqli_query($conn,$sql);
    //2.2: Check whether the query is executed successfully or not
    if($res==TRUE)
    {
        //Query Executed Success and Admin Deleted
        //echo "Admin Deleted";
        //2.2.1:Create Session Variable to Display Message
        $_SESSION['delete'] = "<p class='btn-primary'>Admin Deleted Successfully</p>";
        //2.2.2: Redirect to Manage Admin Page
        header('location:'.SITEURL.'panel/Admin/UserManage/AdminManage.php');
    } else {
        //Failed to delete admin
        //echo "Admin Deletion Failed";
        //2.2.1:Create Session Variable to Display Message
        $_SESSION['delete'] = "<p class='btn-danger'>Admin Deletion Failed , Try Again Later</p>";
        //2.2.2: Redirect to Manage Admin Pages
        header('location:'.SITEURL.'panel/Admin/UserManage/AdminManage.php');
    }
    //3.Redirect to Manage Admin Page With Message(Success or error)
?>