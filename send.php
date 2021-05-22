<html>
        <head>
            <title>Send Money</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" text="css" href="styles2.css">

           
            <body>

               <header>
                <a href="mainpage.php" class="offset-2"><i class="fa fa-home offset-8" style="font-size:30px;color:white"></i> </a>
                <h1 class="text-allign-center"> SEND MONEY</h1>
                <div class="container">
                    <div class="row">
                            <div class="col-lg-8 col-12"></div>
                            <div class="col-lg-4 col-12">
                <div class="form-box">
                        <div class="form-group">
                            <form action="" method="POST">
                                <select name="names1" class="custom-select">
                                  <option selected>Sender</option>
                                  <option value="Akshay">Akshay</option>
                                  <option value="Shivam">Shivam</option>
                                  <option value="Abhishek">Abhsihek</option>
                                  <option value="Keshav">Keshav</option>
                                  <option value="Avinash">Avinash</option>
                                  <option value="Robin">Robin</option>
                                  <option value="Pravin">Pravin</option>
                                  <option value="Patel">Patel</option>
                                  <option value="Niraj">Niraj</option>
                                  <option value="Rahul">Rahul</option>
                                </select>
                             
                        </div>
                        <div class="form-group2">
                            
                                <select name="names" class="custom-select">
                                  <option selected name="receive">Receiver</option>
                                  <option value="Akshay">Akshay</option>
                                  <option value="Shivam">Shivam</option>
                                  <option value="Abhishek">Abhsihek</option>
                                  <option value="Keshav">Keshav</option>
                                  <option value="Avinash">Avinash</option>
                                  <option value="Robin">Robin</option>
                                  <option value="Pravin">Pravin</option>
                                  <option value="Patel">Patel</option>
                                  <option value="Niraj">Niraj</option>
                                  <option value="Rahul">Rahul</option>
                                </select>
                             
                        </div>
                        <div class="form-group3">
                           
                                <label for="amount"></label>
                                <input type="number" class="form-control" name="amount" placeholder="Enter amount" id="amount1">
                           
                        </div>
                        <div class="form-group4">
                            <button type="submit" class="SUB" name="sub">SUBMIT</button>

                        </div>
</form>

                </div>
                </div>
                </div>
                </div>

               </header>

               <section class="pb-5">
</section>

               <footer class="page-footer font-small blue">

<!-- Copyright -->
<div class="container">
<div class="row">
<div class="col-lg-6 col-12">
<div class="footer-copyright text-center py-3" style="color:white;"> Copyright 2021 © | All Rights Reserved
  <a href="#" style="color:white;"> <br>This website is designed by Akshay Prakash</a>
</div>
</div>
<div class="col-lg-6 col-12">
<div class="footer-copyright text-center py-3">

<a href="https://www.facebook.com/akshay.prakash.73594/" target="_blank" class="offset-lg-5"><i class="fa fa-facebook-square" style="font-size:25px;color:white"></i>&nbsp;&nbsp;&nbsp;</a>
             
                 <a href="https://github.com/coder-ap" target="_blank"><i class="fa fa-github" style="font-size:25px;color:white"></i>&nbsp;&nbsp;&nbsp;</a>
                 
                 <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank"><i class="fa fa-google-plus" style="font-size:25px;color:white"></i>&nbsp;&nbsp;&nbsp;</a>
                 
                 <a href="https://www.instagram.com/i_m_akshay1/" target="_blank"><i class="fa fa-instagram" style="font-size:25px;color:white"></i>&nbsp;&nbsp;&nbsp;</a>
                 
                 <a href="https://www.linkedin.com/in/akshay-prakash-053b451a4/" target="_blank"><i class="fa fa-linkedin-square" style="font-size:25px;color:white"></i>&nbsp;&nbsp;&nbsp;</a>
</div>
</div>

<!-- Copyright -->

</footer>

            </body>


        </head>



</html>

<?php

include 'connection.php';


if(isset($_POST['sub']))
{
    $sen=$_POST['names1'];
    $rec=$_POST['names'];

    $amount=$_POST['amount'];

    $selectquery= "select * from balance";

    $query=mysqli_query($con,$selectquery);

    $num=mysqli_num_rows($query);

    
    
    while($res=mysqli_fetch_array($query))
    {

        if($rec==$sen)
        {
            ?>
            <script>
                 alert("Sorry.Sender and Receiver cannot be same");
             </script>
            <?php
            break;
        }
        
       else if($res['Name']==$sen)
        {
           
            $accbalance=$res['Total Balance'];

            if($accbalance < $amount)
            {
                ?>
                <script>
                     alert("Insufficient Balance. Could not Initiate the transaction");
                 </script>
                <?php
                break;
            }
            else{
                    $id=$res['ID'];
                   echo $id;
                     $accbalance=$res['Total Balance'];
                    
                     $accbalance=$accbalance-$amount;
                        
                     $updatequery1 = "UPDATE `balance` SET `Total Balance`=$accbalance WHERE ID=$id";
                     $update=mysqli_query($con,$updatequery1); 

                     
                 }
                }


                 if($res['Name']==$rec)
                {
                   
                    $id2=$res['ID'];
                    echo $id2;
                    $accbalance1=$res['Total Balance'];
                   
                    $accbalance1=$accbalance1+$amount;
                   
                    $updatequery = "UPDATE `balance` SET `Total Balance`=$accbalance1 WHERE ID=$id2";
                    $update=mysqli_query($con,$updatequery);
                }
                else{
                    continue;
                }
                 $insertquery = "INSERT INTO `details`(`Name`,`Receiver`, `Amount`) VALUES ('$sen','$rec','$amount')";
                
                
                $insert=mysqli_query($con,$insertquery);
    
    
                if($insert)
                {
                     ?>
                    <script>
                        alert("Transaction successful");
                        </script>
                    <?php
                    break;
                }
                 else{
        
                        ?>
                        <script>
                            alert("Transaction not successful");
                            </script>
                        <?php
                 }
                }

               
        }
       
?>


