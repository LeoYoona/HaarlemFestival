<?php session_start(); ?>
<!doctype html>
<html class = "dashboard">

<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<!--<link rel="stylesheet" type="text/css" href="css/styleCMS.css">-->
<?php include "header.php";
      include "DB.php"?>
      
<body>   
    <section class="page_section">
        <section id="Title">
    
        <div style="width: 1388px;">              
                Dashboard
            </div>            
        </section>
        

  <!-- sign up volunteer        -->
  <?php
    if($_GET["isSuperadmin"]=="1")
    {                
 ?>
  <br><a href="signUpVolunteer.php?isSuperadmin=1" >Sign Up a new volunteer?</a> 
  <?php
    }
        if($_GET["SignUp"]=="Successful")
        {
            echo '<p style="color:green;"> Volunteer Sign Up successful  </p>';
        }
    ?>

<!-- sign up volunteer  ends  -->
  
  <div class="sidenav">
        <a href="dashboard.php">Dashboard</a>
        <button class="dropdown-btn" style="width: 170px;">Products</button>
        <div class="dropdown-container">
            <a href="editEvents" style="background-color: slategrey;">Add New</a>
            <a href="listEvents" style="background-color: slategrey;">Edit Existing</a>    
        </div>
        <a href="logout.php">Logout</a>     
    </div>

    <script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "contents") {
    dropdownContent.style.display = "none";
    } else {
    dropdownContent.style.display = "contents";
    }
    });
    }
    </script>
<section>

            <div class="Sales_box" id="sales">
                <div id="title">Sales</div>
                <div id="amountsales">
                    Stuff goes here.<br>
                    For example, a bill-to address
                </div>
            </div>
            
            <div class="Statistics_box" id="stats">
                <div id="title">Statistics</div>
                <div id="statsis">
                    View over past month.<br>    
                    INSERT VIEWS                
                </div>
                <div id="statsis">
                    Sales over past month.<br>   
                    INSERT SALES                 
                </div>
                <div id="statsis">
                    Items sold past month. 
                    INSERT ORDERS               
                </div>
                
                    
            </div>

            <div class="message_box" id="messages">
                <div id="title">Messages</div>
                <div id="mails">
                    Stuff goes here.<br>
                    For example, a bill-to address
                </div>
            </div>

        

        
    
    
    </section>
    


</body>
</html>




<?php include "footer.php"; ?>







