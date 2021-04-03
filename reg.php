<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Registration</title>
</head>


<?php 

    $host = "localhost";
    $user = "root";
    $pass = "123";
    $db = "demo";

    
    $conn1 = new mysqli($host, $user, $pass, $db);

    if($conn1->connect_error) {
        echo "Database Connection Failed!";
        echo "<br>";
        echo $conn1->connect_error;
    }
    else {
        echo "Database Connection Successful!";
        $stmt1 = $conn1->prepare("insert into user (uname, pass, fname, lname, gender, mobile, email, address) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt1->bind_param("ssssssss", $p1, $p2, $p3, $p4, $p5, $p6, $p7);
        $p1 = $_POST['uname'];
        $p2 = $_POST['pass'];
        $p3 = $_POST['fname'];
        $p4 = $_POST['lname'];
        $p5 = $_POST['gender'];
        $p6 = $_POST['mobile'];
        $p7 = $_POST['email'];
        $status = $stmt1->execute();

        if($status) {
            echo "Data Insertion Successful.";
        }
        else {
            echo "Failed to Insert Data.";
            echo "<br>";
            echo $conn1->error;
        }


    }
    

    $conn1->close();
    ?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

        <table width="50%" align="center">

           


            <tr>

                <td width="30%" align="center">

                   <b> <p style="font-size: 16px;">First Name</p>

                </td>

                <td width="60%"align="center">

                    <input type="text" name="fname" value="" placeholder="Type First Name" size="30px">
                    <p style="color:red"><?php echo $firstNameErr; ?></p>

                </td>

                <td width="10%">


                </td>



            </tr>

            <tr>

                <td width="30%" align="center">

                   <b> <p style="font-size: 16px;">Last Name</p>

                </td>

                <td width="60%"align="center">

                    <input type="text" name="lname" value="" placeholder="Type Last Name" size="30px" >
                    <p style="color:red"><?php echo $lastNameErr; ?></p>

                </td>

                <td width="10%">


                </td>



            </tr>

             <tr>

                <td width="30%" align="center">

                   <b> <p style="font-size: 16px;">Email</p>

                </td>

                <td width="60%"align="center">

                    <input type="email" name="email" id="" value="" placeholder="Type Your Email" size="30px" >
                    <p style="color:red"><?php echo $emailErr; ?></p>

                </td>

                <td width="10%">


                </td>



            </tr>

             <tr>

                <td align="center" width="30%">

                <b> <p style="font-size: 16px;">Gender</p>


                </td>

                <td align="center" width="60%">
                    
            <input type="radio" name="gender" value="Male" >  Male 
            <input type="radio" name="gender" value="Female" > Female
            <p style="color:red"><?php echo $genderErr; ?></p>
            


                </td>


                <td width="10%">



                </td>

            </tr>

            <tr>

            </tr>

            



            </tr>

            <tr>

                <td width="30%" align="center">

                   <b> <p style="font-size: 16px;">UserName</p>

                </td>

                <td width="60%"align="center">

                    <input type="text" name="uname" value="" placeholder="Type User Name" size="30px">
                    <p style="color:red"><?php echo $userNameErr; ?></p>

                </td>

                <td width="10%">


                </td>



            </tr>

                       <tr>

                <td width="30%" align="center">

                   <b> <p style="font-size: 16px;">Password</p>

                </td>

                <td width="60%"align="center">

                    <input type="password" name="password" value="" placeholder="Type Password" size="30px">
                    <p style="color:red"><?php echo $passwordErr; ?></p>

                </td>

                <td width="10%">


                </td>



            </tr>

                       <tr>

                <td width="30%" align="center">

                   <b> <p style="font-size: 16px;">Recovery Email</p>

                </td>

                <td width="60%"align="center">

                    <input type="email" name="remail" value="" placeholder="Type Recovery Email" size="30px">
                    <p style="color:red"><?php echo $recoveryEmailErr; ?></p>

                </td>

                <td width="10%">


                </td>



            </tr>

            <tr height="50px">

                <td align="right"  colspan="3">

                    <input type="submit" name="submit" value="Submit"> 
                    <input type="reset" name="" value="Reset">



                </td>


            </tr>






        </table>






    </form>

   
    
</body>
</html>