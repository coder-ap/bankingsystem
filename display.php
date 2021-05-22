
<html>
    <head>
        <title>View </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" text="css" href="newstyle.css">

<body>

<a href="mainpage.php" class="offset-2"><i class="fa fa-home offset-8" style="font-size:30px;color:white"></i> </a>
<div class="main-div pt-5">
    

        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            
                            <th> ID </th>
                            <th> Name </th>
                            <th> Total Balance </th>
</tr>
</thead>

<tbody>

<?php

    include 'connection.php';

    $select = "select * from balance";

    $query=mysqli_query($con,$select);

   


    while($res=mysqli_fetch_array($query))
    {
        ?>
        
        
    

    <tr>
        <td><?php echo $res[0] ?></td>
        <td><?php echo $res[1] ?></td>
        <td><?php echo $res[2] ?></td>
</tr>
<?php
    }
    
?>

    
</tbody>



                </table>
</div>
</div>
</div>

<section>
</section>

<footer class="page-footer font-small blue">

<!-- Copyright -->
<div class="container">
<div class="row">
<div class="col-lg-6 col-12">
<div class="footer-copyright text-center py-3" style="font-weight:bold;">Copyright 2021 © | All Rights Reserved
  <a href="#" style="text-decoration:none;color:black;" class="Foot"> <br>This website is designed by Akshay Prakash</a>
</div>
</div>
<div class="col-lg-6 col-12">
<div class="footer-copyright text-center py-3">

<a href="https://www.facebook.com/akshay.prakash.73594/" target="_blank" class="offset-lg-5"><i class="fa fa-facebook-square" style="font-size:25px;color:black"></i>&nbsp;&nbsp;&nbsp;</a>
             
                 <a href="https://github.com/coder-ap" target="_blank"><i class="fa fa-github" style="font-size:25px;color:black"></i>&nbsp;&nbsp;&nbsp;</a>
                 
                 <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank"><i class="fa fa-google-plus" style="font-size:25px;color:black"></i>&nbsp;&nbsp;&nbsp;</a>
                 
                 <a href="https://www.instagram.com/i_m_akshay1/" target="_blank"><i class="fa fa-instagram" style="font-size:25px;color:black"></i>&nbsp;&nbsp;&nbsp;</a>
                 
                 <a href="https://www.linkedin.com/in/akshay-prakash-053b451a4/" target="_blank"><i class="fa fa-linkedin-square" style="font-size:25px;color:black"></i>&nbsp;&nbsp;&nbsp;</a>
</div>
</div>

<!-- Copyright -->

</footer>
</body>
</head>
</html>




