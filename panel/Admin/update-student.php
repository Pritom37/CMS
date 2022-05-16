<!-- Header Part Starts --->
<?php include('C:/xampp/htdocs/cms/panel/Admin/partials/menu.php');?>

        <!-- Header Part Ends --->
<div class="main-content">
    <div class="wrapper">
        <h1>Update Teacher</h1>
     <?php
    //1.Get the ID if Admin to be deleted
     $id = $_GET['id'];
    // echo $id = $_GET['id']; shows id using get method

    //2.Create SQL query to get Details
    $sql = "SELECT * FROM tbl_user WHERE uid=$id";
    //2.1: Execute the query
    $res = mysqli_query($conn,$sql);
    //2.2: Check whether the query is executed successfully or not
    if($res==TRUE)
    {
        $count = mysqli_num_rows($res);
        if($count==1){
            //We have data in database
            while($rows=mysqli_fetch_assoc($res)){
                $username = $rows['username'];} 
            }else {
        //2.2.1:Create Session Variable to Display Message
        $_SESSION['update'] = "<p class='btn-danger'>Admin Not Found , Try Again Later</p>";
        //2.2.2: Redirect to Manage Admin Page
        header('location:'.SITEURL.'panel/Admin/UserManage/StudentManage.php');
    }
    }
        ?>
        <form action="" method="post">
        <table class="tbl-30">


                <tr>
                    <td>Username : </td>
                    <td><input type="text" name="username" value="<?php echo $username; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update Staff" class="btn-primary">
                    </td>
                </tr>
            </table>
        </form>

    </div>
</div>

<?php 
//Process the Value from Form and Save it in Database
//Check Whether the submit button is clicked or not ?
if(isset($_POST['submit']))
{
    //Button Clicked
    //echo "Buttton Clicked";

    //1.Get the data from Form
    $username = $_POST['username'];
    $id = $_POST['id'];

    //2.SQL query to update the Admin data into the Database
    $sql = "UPDATE tbl_user SET
    username='$username'
    WHERE uid='$id'";
    //3.Execute Query and Update Data in Database 
    $res = mysqli_query($conn, $sql) or die(mysqli_error());

    //4. Whether the (Query is Executed ) Data is updated or not and display an appropriate message
    if($res==TRUE){
        //Create a session variable to display message .here add is a SESSION variable .
        $_SESSION['update']="<p class='btn-primary'>Admin Updated Successfully</p>";
        //Redirect Page to Manage Admin. A dot(.) is used to concatenate string value
        header("location:".SITEURL.'panel/Admin/UserManage/StudentManage.php');
    } else{
        //Create a session variable to display message
        $_SESSION['add']="<p class='btn-danger'>Failed To Update Teacher</p>";
        //Redirect Page to Manage Admin. A dot(.) is used to concatenate string value
        header("location:".SITEURL.'panel/Admin/UserManage/StudentManage.php');
    }

}
else{
    //Button Not Clicked
    //echo "Buttton Not Clicked";
}
?>

