<?php
   include 'config.php';
    $sql= "SELECT * FROM student ";
    $res = mysqli_query($conn,$sql);

    $data=[];
    if(mysqli_num_rows($res)> 0){
        while($row = mysqli_fetch_assoc($res)){
            array_unshift($data,$row);
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Update Student Info</title>
    <style>
        table {
            width: 100%;
            margin: 20px 0;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #cdcdcd;
        }

        table th,
        table td {
            padding: 5px;
            text-align: left;
        }
    </style>

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/tablet.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.css">
    <link rel="stylesheet" href="./bootstrap-5.1.3-dist/css/bootstrap.min.css">

</head>

<body>
    <div id="navbar">
        <div class="container">
            <nav>
                <div> <a href="index.php"> <img class="logo" src="./images/logo.png" alt="logo"></a></div>

                <div class="openMenu"> <i class="fas fa-bars"></i></div>
                <ul class="mainMenu">
                    <li> <a href="index.php" class="nav-link">Home</a></li>
                    <li> <a href="result.php" class="nav-link">Result</a></li>
                    <li> <a href="about.php" class="nav-link">About</a></li>
                    <li> <a href="contact.php" class="nav-link">Contact</a></li>
                    <div class="closeMenu"><i class="fas fa-times"></i></div>
                </ul>
            </nav>
        </div>
    </div>
    <div class="search-content">
        <div class="container">
            <div class="row">
                <div class="col-sm"></div>
                <div class="col-sm">
                    <div id="login">
                        <span class="login"><a href="logout.php">Logout</a> </span>
                        <!-- <span class="login"> <a href="register.php">Sign Up</a></span> -->
                    </div>
                </div>
                <div class="col-sm">
                    <div id="login"> <input type="text" id="input" placeholder=" Search..." />
                        <i id="icon" class="fas fa-search"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="student-info">
      <!--   <div class="container"> -->
            <div class="infotag">
                <h1>STUDENTS'S DETAILS</h1>
            </div>

            <table>
                  <tr>
                        <th>Student_ID</th>
                      <!--   <th>College_name</th>
                        <th>Faculty</th> -->
                        <th>Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <!-- <th>Password</th> -->
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Year</th>
                        <th>Date of Birth</th>
                    </tr>
        <?php 
        // $i=1;
        foreach($data as $d){
            ?>
            <tbody>
                <tr>
                    <td><?php echo $d['student_id'] ;?> </td>          
                    <td><?php echo $d['student_fname'] ;?> </td>
                    <td><?php echo $d['student_lname'] ;?> </td>
                    <td><?php echo $d['student_username'] ;?> </td>
                    <!-- <td><?php echo $d['student_password'] ;?> </td> -->
                    <td><?php echo $d['student_phone'] ;?> </td>
                    <td><?php echo $d['student_address'] ;?> </td>
                    <td><?php echo $d['student_year'] ;?> </td>
                    <td><?php echo $d['student_dob'] ;?> </td>
                
                    <td><a href="updatestudent.php?id=<?php echo $d['student_id'] ?> ">Edit</a></td>
                    <td><a href="deletestudent.php?id=<?php echo $d['student_id'] ?> ">Delete</a></td>
                </tr>
            </tbody>
            <?php } ?>
    </table>
          
        <!-- </div> -->
    </div>

    <footer class="foot-content">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <span class="foot">Quick Links</span>
                    <span class="content">BIM College</span>
                    <span class="content">Bsc.CSIT College</span>
                    <span class="content">BCA College</span>
                </div>
                <div class="col-sm">
                    <span class="foot">Contact Us</span>
                    <div class="contact-content">
                        <i class="fas fa-map-marker-alt"></i><span> Gaushala, Kathmandu</span>
                    </div>
                    <div class="contact-content">
                        <i class="far fa-envelope"></i><span>info@vn.edu.np </span>
                    </div>
                    <div class="contact-content">
                        <i class="fas fa-phone-alt"></i><span>01-4479744</span>
                    </div>
                </div>
                <div class="col-sm">
                    <span class="foot">Developed By</span>
                    <span class="info-contact">OUR<span class="more-info">TEAM</span></span>
                    <span class="copyright">Copyright &copy;2021 All rights reserved</span>
                </div>
            </div>
    </footer>


    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
    <script type="text/javascript" src="./js/jquery3.3.1.js"></script>
    <script type="text/javascript" src="./js/index.js"></script>

</body>

</html>