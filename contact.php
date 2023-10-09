<?php
if($_POST['btn_contact']){

            $to = "rakeshkumarkattamury@gmail.com";
                $subject = "The Key Corner - Contact Info";

                $message = "
                <html>
                <head>
                <title>The Key Corner-Contact Info</title>
                </head>
                <body>
                <p>The Key Corner-Contact Info</p>
                <table>
                <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Subject</th>
                <th>Content</th>
                
                </tr>
                <tr>
                <td>".$_POST['name']."</td>
                <td>".$_POST['email']."</td>
                <td>".$_POST['phno']."</td>
                <td>".$_POST['subject']."</td>
                <td>".$_POST['content']."</td>
                </tr>
                </table>
                </body>
                </html>
                ";

                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                // More headers
                $headers .= 'From: <eswarihomes9@gmail.com>' . "\r\n";
                $headers .= 'Cc: eswarihomes9@gmail.com' . "\r\n";

                mail($to,$subject,$message,$headers);


        }


    ?>

   <?php
    include 'header.php';
?>
    <!-- cta-02 -->
                <div class="cta-02">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 ">
                                <h3 class="cta-02__title">Looking for a high quality constructor company for your project?</h3>
                            </div>
                            <div class="col-lg-3  md-text-right">
                                
                                <!-- btn -->
                                <a class="btn btn-outline" href="#">Get a quote
                                </a><!-- End / btn -->
                                
                            </div>
                        </div>
                    </div>
                </div><!-- End / cta-02 -->
    <!-- Section -->
                <section class="md-section" id="id3">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-2 ">
                                
                                <!-- sec-title -->
                                <div class="sec-title sec-title__lg-title md-text-center">
                                    <h2 class="sec-title__title">Thank you for contacting us. We will get back to you soon..!</h2><span class="sec-title__divider"></span>
                                </div><!-- End / sec-title -->
                                
                            </div>
                        </div>
                    </div>
                </section>
    
<?php 
    include 'footer.php';
?>