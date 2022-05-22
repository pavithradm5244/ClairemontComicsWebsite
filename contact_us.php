<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/framework_style.css">  <!--framework css-->
    <link rel="stylesheet" href="css/contact_us_style.css"> <!--custom page styling-->
    <link rel="icon" type="image/x-icon" href="/images/clairmont.svg"> <!--favicon-->
    <script src="js/nav.js" defer></script>
    <title>Clairemont Comics</title>
</head>
<body>
    <?php
        //boolean to check if required fields are set and not empty
        $notEmptyForm = isset($_POST['first_name']) && ($_POST['first_name'] != "") && isset($_POST['last_name']) && ($_POST['last_name'] != "")
            && isset($_POST['email_add']) && ($_POST['email_add'] != "") && isset($_POST['subject']) && ($_POST['subject'] != "");
        
        $email_sent = false; //bool for if email is sent (if true hide contact form)

        

        //submit form
        if($notEmptyForm) {
            //check if email is valid
            if(filter_var($_POST['email_add'], FILTER_VALIDATE_EMAIL)){
                $username = $_POST['first_name'] . " " . $_POST['last_name'];
                $email_add = $_POST['email_add'];
                $email_subj = $_POST['subject'];
                $email_msg = $_POST['contact_msg'];

                $receiver_email = "mohanpd2846@uwec.edu"; //email to;

                $email_body ="";
                $email_body = $email_body . "From: " . $username . "\r\n";
                $email_body = $email_body . "Reply to: " . $email_add . "\r\n";
                $email_body = $email_body . "Message: " . $email_msg . "\r\n";

                //ini_set("SMTP","tls://smtp.gmail.com");
                //ini_set("smtp_port","587");
                ini_set("SMTP","ssl:smtp.gmail.com");
                ini_set("smtp_port","465");
                //mail($receiver_email, $email_subj, $email_body);
                
                $email_sent = true;
            }
        }
    ?>
    <container>
        <!--Header Markup-->
        <header>
            <nav>
                <h2 class="logo">
                    <a href="index.html">
                        <img src="images/clairmont.svg" alt="logo" style="height: 57px; vertical-align:middle;">
                        Clairemont Comics
                    </a>
                </h2>
                <div class="menu_toggle" id="mobile_menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <ul class="nav_menu">
                    <li><a href='products_hub.php' class="nav_links">Products</a></li>
                    <li><a href='events.html' class="nav_links">Events</a></li>
                    <li><a href='gallery.php'class="nav_links">Gallery</a></li>
                    <li><a href='faq.html' class="nav_links">FAQ</a></li>
                    <li><a href='contact_us.php' class="nav_links">Contact Us</a></li>
                </ul>
            </nav>
        </header>
        <left-space></left-space>
        <div class="border_left"></div>
        <!--Main Content Markup-->
        <content>
            <!-- if contact form was submitted show this message -->
            <?php
                if($email_sent):
            ?>
            <h1>Thank you for reaching out <br> We will get back to you as soon as possible</h1>
             
            <?php
                else:
            ?>
            <h1>Contact Us</h1>
            <p class="subtitle">
                Have any questions or feedback? We'd love to hear from you.<br> 
                Fill up the form below and we will get back to you as soon as possible!
            </p>
            <div class="form_container">
                <form method="POST" action="contact_us.php" id="contact_form">
                    <div class="first_name_box">
                        <label for="first_name">First Name</label>
                        <input type="text" id="first_name" name="first_name" required>
                    </div>
                    <div class="last_name_box">   
                        <label for="last_name">Last Name</label>
                        <input type="text" id="last_name" name="last_name" required>
                    </div>
                    <div class="email_add_box">
                        <label for="email_add">Email Address</label>
                        <input type="email" id="email_add" name="email_add" required>
                    </div>
                    <div class="subject_box">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    <div class="contact_msg_box">
                        <label for="contact_msg">Your Message</label>
                        <textarea id="contact_msg" name="contact_msg" style="height:200px"></textarea>
                    </div>
                    <div class="submit_button">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
            <?php
                endif;
            ?>
        </content>
        <div class="border_right"></div>
        <right-space></right-space>

        <!--Footer Markup-->
        <footer>
            <div id="footer_header">
                <h3>Clairemont Comics</h3>
            </div>
            <div id="footer_contact">
                <h4>Contact Us</h4>
                <!-- table with store information -->
                <table>
                    <!-- location icon and google-map link -->
                    <tr>
                        <td>
                            <a href = 'https://goo.gl/maps/zjVLgztXhXH7Uqxk6' target="_blank">
                                <img src="images/location-dot-solid_1-svg_1.png" alt="Location">
                            </a>
                        </td>
                        <td>
                            <a href = 'https://goo.gl/maps/zjVLgztXhXH7Uqxk6' target="_blank">
                                <p>2215 Fairfax St <br>Eau Claire, WI 54701</p>
                            </a>
                        </td>
                    </tr>
                    <!-- telephone icon and number link-->
                    <tr>
                        <td>
                            <a href="tel:715-831-2112">
                                <img src="images/phone-solid-svg.png" alt="Phone:">
                            </a>
                        </td>
                        <td>
                            <a href="tel:715-831-2112">
                                <p>(715) 831-2112</p>    
                            </a>                        
                        </td>
                    </tr>
                    <!-- email icon and mailto link-->
                    <tr>
                        <td>
                            <a href = 'mailto: charsh@clairemontcomics.com'>
                                <img src="images/envelope-solid-svg_1.png" alt="Email:" >
                            </a>
                        </td>
                        <td>
                            <a href = 'mailto:charsh@clairemontcomics.com'>
                                <p>charsh@clairemontcomics.com</p>
                            </a>
                        </td>
                    </tr>
                    <!-- facebook icon and facebook page link-->
                    <tr>
                        <td>
                            <a href="https://www.facebook.com/pages/category/Comic-Bookstore/Clairemont-Comics-1462263010699477/" target='_blank'>
                                <img src="images/facebook-brands-svg_1.png" alt="Facebook:">  
                            </a>
                        </td>
                        <td>
                            <a href="https://www.facebook.com/pages/category/Comic-Bookstore/Clairemont-Comics-1462263010699477/" target='_blank'>
                                <p>Facebook</p>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="footer_hours">
                <h4>Store Hours</h4>
                <table>
                    <tr>
                        <td>Sunday&nbsp;</td>
                        <td>&nbsp;10AM &mdash; 8PM</td>
                    </tr>
                    <tr>
                        <td>Monday&nbsp;</td>
                        <td>&nbsp;10AM &mdash; 8PM</td>
                    </tr>
                    <tr>
                        <td>Tuesday&nbsp;</td>
                        <td>&nbsp;10AM &mdash; 8PM</td>
                    </tr>
                    <tr>
                        <td>Wednesday&nbsp;</td>
                        <td>&nbsp;10AM &mdash; 8PM</td>
                    </tr>
                    <tr>
                        <td>Thursday&nbsp;</td>
                        <td>&nbsp;10AM &mdash; 8PM</td>
                    </tr>
                    <tr>
                        <td>Friday&nbsp;</td>
                        <td>&nbsp;10AM &mdash; 8PM</td>
                    </tr>
                    <tr>
                        <td>Saturday&nbsp;</td>
                        <td>&nbsp;10AM &mdash; 8PM</td>
                    </tr>
                </table>
            </div>
        </footer>
    </container>
</body>
</html>