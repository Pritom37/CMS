
<!-- Header Part Starts --->
<?php include('C:/xampp/htdocs/cms/panel/Admin/UserManage/user-manage.php');?>
        <!-- Header Part Ends --->
        <div class="main-content">
    <div class="wrapper">
        <h1>Add New Admin</h1><br><br>
        <?php 
        // If we fail it will show the value that it failed
        if(isset($_SESSION['add'])){ //Checking whether the Session is set or not
          echo $_SESSION['add']; // Displaying Session Message
           unset($_SESSION['add']); // Removing Session Message
         }
       ?>
<br>
<br>
<br>
        <form action="" method="POST">
            <table class="tbl-30">

                <tr>
                    <td>Username : </td>
                    <td><input type="text" name="username" placeholder="Enter Username"></td>
                </tr>
                <tr>
                    <td>Password : </td>
                    <td><input type="password" name="password" placeholder="Enter Password"></td>
                </tr>
                <tr>
                    <td>Email : </td>
                    <td><input type="text" name="email" placeholder="Enter Email"></td>
                </tr>
                <tr>
                    <td>User Type : </td>
                    <td><input type="text" name="user_type" placeholder="Enter User_Type" value="admin" ></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class=" btn-primary">
                    </td>
                </tr>
            </table>
        </form>

    </div>
</div>
<!-- Footer Part Starts --->
<?php include('C:/xampp/htdocs/cms/panel/Admin/partials/footer.php');?>
        <!-- Footer Part Ends --->

<?php 
//Process the Value from Form and Save it in Database
//Check Whether the submit button is clicked or not ?
if(isset($_POST['submit']))
{
    //Button Clicked
    //To check ==>> echo "Buttton Clicked";
    //1.Get the data from Form
    $username = $_POST['username'];
    $password = $_POST['password']; //Password Encryption with MD5
    $email = ($_POST['email']);
    $user_type=($_POST['user_type']);

    //2.SQL query to save the data into the Database
    $sql = "INSERT INTO tbl_user SET
        username='$username',
        password='$password',
        email='$email',
        user_type='$user_type'

    ";
    //3.Execute Query and Save Data in Database :

    // include('../config/constants.php') -> included in menu.php for db connection
    // res takes results , if the query executed value will be true otherwise false
     $res = mysqli_query($conn, $sql) or die(mysqli_error());

    //4. Whether the (Query is Executed ) Data is iserted or not and display an appropriate message
    if($res==TRUE){
        //Data Inserted
        //echo "Data Inserted";
        //Create a session variable to display message .here add is a SESSION variable .
        $_SESSION['add']="<p class='btn-primary'>Admin Added Successfully</p>";
        //Redirect Page to Manage Admin. A dot(.) is used to concatenate string value
        header("location:".SITEURL.'panel/Admin/UserManage/AdminManage.php');
    } else{
        //Failed to insert Data
        //echo "Failed to insert Data";
        //Create a session variable to display message
        $_SESSION['add']="<p class='btn-danger'>Failed To Add Admin</p>";
        //Redirect Page to Manage Admin. A dot(.) is used to concatenate string value
        header("location:".SITEURL.'panel/Admin/UserManage/TeacherManage.php');
    }

}
else{
    //Button Not Clicked
    //To check ==>> echo "Buttton Not Clicked";
}
?>
