
<!-- Header Part Starts --->
<?php include('C:/xampp/htdocs/cms/panel/Admin/partials/menu.php');?>
        <!-- Header Part Ends --->
        <div class="main-content">
    <div class="wrapper">
        
        <?php 
        // If we fail it will show the value that it failed
        if(isset($_SESSION['add'])){ //Checking whether the Session is set or not
          echo $_SESSION['add']; // Displaying Session Message
           unset($_SESSION['add']); // Removing Session Message
         }
         if(isset($_SESSION['delete'])){
            echo $_SESSION['delete'];
            unset($_SESSION['delete']);
        }
        if(isset($_SESSION['update'])){
            echo $_SESSION['update']; 
            unset($_SESSION['update']);
        }
        if(isset($_SESSION['user-not-found'])){
            echo $_SESSION['user-not-found']; 
            unset($_SESSION['user-not-found']);
        }
       ?>
<br>
<br>
<br>
        <form action="" method="POST" class="form">
            <h1>Add New Course</h1>
            <table class="tbl-30">

                <tr>
                    <td>Course Code: </td>
                    <td><input type="text" name="coursecode" placeholder="Enter course-code"></td>
                </tr>
                <tr>
                    <td>Course Title: </td>
                    <td><input type="text" name="coursetitle" placeholder="Enter course-title"></td>
                </tr>

                <tr>
                    <td>Course Session : </td>
                    <td><input type="text" name="coursesession" placeholder="Enter Course-sesssion"></td>
                </tr>
                <tr>
                    <td>Course Semester : </td>
                    <td><input type="text" name="coursesemester" placeholder="Enter Cousre-semester"></td>
                </tr>
                <tr>
                    <td>Course Teacher ID: </td>
                    <td><input type="text" name="courseteacherid" placeholder="Enter Course-teacherid"></td>
                </tr>
                <tr>
                    <td>Course Teacher: </td>
                    <td><input type="text" name="courseteacher" placeholder="Enter Course-teacher"></td>
                </tr>
         
                <tr>
                    <td></td>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Course" class=" btn-primary">
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
    $coursecode = $_POST['coursecode'];
    $coursetitle = $_POST['coursetitle']; 
    $coursesession = $_POST['coursesession'];
    $coursesemester=$_POST['coursesemester'];
    $courseteacherid=($_POST['courseteacherid']);
    $courseteacher=($_POST['courseteacher']);
    

    //2.SQL query to save the data into the Database
    $sql = "INSERT INTO course SET
        course_code ='$coursecode',
        course_title='$coursetitle',
        course_session='$coursesession',
        course_semester='$coursesemester',
        course_instructor_id='$courseteacherid',
        course_instructor='$courseteacher'

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
