<?php
                    foreach($_POST as $key=>$value){

                    echo '<strong>'.$key.' : </strong>'.$value.'<br />';
                    $msg .= '<strong>'.$key.' : </strong>'.$value.'<br />';
                    }
                    $to = 'raventura@uh.edu';
                    $from = $_POST['Email'];
                    $bcc = 'drpatel8@uh.edu';
                    $subject = 'Contact Form';
                    $msg = NULL;
                    $msg .= 'Name: '.$_POST['Name'].'<br>';
                    $msg .= 'Email: '.$_POST['Email'].'<br>';
                    $msg .= 'Phone: '.$_POST['Phone'].'<br>';
                    $msg .= 'Message: '.$_POST['Message'].'<br>';
                    echo $msg;


                    //---------------------------------- email header ----------------------------------//
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    $headers .= "From: ". $_POST['Email'] . "\r\n";
                    $headers .= "Bcc: ". $bcc . "\r\n";


                    //---------------------------------- checking ----------------------------------//
                    if(mail('raventura@uh.edu', $_POST['Subject'], $msg, $headers)){

                    echo 'success msg <br>';

                    }else {

                    echo 'error msg <br>';

                    }

                    echo '<br><hr><br>';
                    echo '<strong>HTTP_REFERER : </strong><a href="https://raventu2.heyuhnem.com/FinalProject/index.html">Home</a><br />';

                    ?>