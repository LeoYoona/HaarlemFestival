<?php
//view  
 declare(strict_types=1);
 include "AutoLoaderIncl.php";
include "showErrors.php";

session_start();

if (isset($_POST["signupVolunteer"])) 
{
    $users = new UserController();   

    $name=$_POST["name"];
    $email= $_POST["email"];
    $password= $_POST["password"];
    $age= $_POST["age"];
    $isAdmin= $_POST["isAdmin"];
    $isSuperAdmin= $_POST["isSuperAdmin"];

    $passwordlength= strlen($password); //to check the length of the password

    $ifExists = $users->verifyVolunteerEmailExistance($email); //checks if the volunteer with the entered email already exists

        if($ifExists==TRUE)
        {
           header("Location: signUpVolunteer.php?SignUpError=emailExists");//to go back to the sign Up page
            
        } 
        else if($passwordlength < 6)    //to check if the password entered is atleast 6 characters long
        {
           header("Location: signUpVolunteer.php?SignUpError=passwordShort");//to go back to the sign Up page            
        }
        
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {  
            header("Location: signUpVolunteer.php?SignUpError=invalidEmail");//to go back to the sign Up page
           
        }
        //check if volunteer age, admin status(bool) and super admin status(bool) is a numeric value or not
        else if(!ctype_digit($age))
        {
            header("Location: signUpVolunteer.php?SignUpError=ageNotNaturalNum");//to go back to the sign Up page
            
        }
        //this else is executed when nothing is wrong with sign up
        else
        {
            $_SESSION['email']=$email;
            //if the credentials belong to a volunteer
            $users->addNewVolunteer($name, $email, $password, $age, $isAdmin, $isSuperAdmin );
            $_SESSION['userType'] = "volunteer";
            header("location: dashboard.php?V_SignUp_Successful=".$name.""); 
        }
}
else
{
    header("Location: dashboard.php");//to go to the login page
}

?>

