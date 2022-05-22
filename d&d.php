<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/framework_style.css">
    <link rel="stylesheet" href="css/d&d_style.css">
    <link rel="icon" type="image/x-icon" href="/images/clairmont.svg">
    <script src="js/nav.js" defer></script>
    <title>Clairemont Comics</title>
</head>

<body>
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
            <h1>Dungeons & Dragons</h1>
            <div class="cardplace0">
                <div class="cardplace1">
                <?php
                DEFINE ('DB_USER', 'root');
                DEFINE ('DB_PASSWORD', '');
                DEFINE ('DB_HOST', 'localhost');
                DEFINE ('DB_NAME', 'test1');

                $dbc = @mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME) or die('Could not connect!'.mysqli_connect_error());
                $query = "SELECT product_image_path, product_name FROM `d&d`";
                        $response = @mysqli_query($dbc, $query);           
                        if ($response){
                            if($row = mysqli_fetch_array($response)){
            
                            echo '<div class="card">
                                    <div class="card-header">
                                        <img src="' . $row['product_image_path'] . '" alt="">
                                    </div>
                                    <div class="card-body">
                                        <h4>'. $row['product_name'] . '</h4>
                                    </div>
                            </div>';
                            }
                        }
                // else{
                // 	echo "No connection!";
                // }
                ?>
                    <!--<div class="card">
                        <div class="card-header">
                            <img src="images/Dungeon_and_Dragons.jpeg" alt="">
                        </div>    
                        <div class="card-body">
                            <h4>D&D departs from traditional wargaming by allowing each player to create their own character to play instead of a military formation. These characters embark upon imaginary adventures within a fantasy setting. A Dungeon Master (DM) serves as the game's referee and storyteller, while maintaining the setting in which the adventures occur, and playing the role of the inhabitants of the game world. The characters form a party and they interact with the setting's inhabitants and each other.</h4>
                        </div>
                    </div>-->
                </div>    

                <div class="cardplace2">
                <?php
                DEFINE ('DB_USER2', 'root');
                DEFINE ('DB_PASSWORD2', '');
                DEFINE ('DB_HOST2', 'localhost');
                DEFINE ('DB_NAME2', 'test1');

                $dbc = @mysqli_connect(DB_HOST2,DB_USER2, DB_PASSWORD2, DB_NAME2) or die('Could not connect!'.mysqli_connect_error());
                $query = "SELECT * FROM `d&d` WHERE product_id >= 2";
                        $response = @mysqli_query($dbc, $query);           
                        if ($response){
                            while($row = mysqli_fetch_array($response)){
            
                            echo '<div class="card">
                                    <div class="card-header">
                                        <img src="' . $row['product_image_path'] . '" alt="">
                                    </div>
                                    <div class="card-body">
                                        <h2>'. $row['product_name'] . '</h>
                                    </div>
                            </div>';
                            }
                        }
                // else{
                // echo "No connection!";
                // }
                ?>
                    <!--<div class="card">
                        <div class="card-header">
                            <img src="images/Fizbans_Treasury_of_Dragons.png" alt="">
                        </div>    
                        <div class="card-body">
                            <h2>Fizban’s Treasury of Dragons</h2>
                            <h4></h4>
                        </div>
                    </div>
            
                    <div class="card">
                        <div class="card-header">
                            <img src="images/Strixhaven_A_Curriculum_of_Chaos.png" alt="">
                        </div>
                        
                        <div class="card-body">
                            <h2>Strixhaven: A Curriculum of Chaos</h2>
                            <h4></h4>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <img src="images/The_Wild_Beyond_the_Witchlight.png" alt="">
                        </div>
                    
                        <div class="card-body">
                            <h2>The Wild Beyond the Witchlight</h2>
                            <h4></h4>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <img src="images/Candlekeep_Mysteries.png" alt="">
                        </div>
                    
                        <div class="card-body">
                            <h2>Candlekeep Mysteries</h2>
                            <h4></h4>
                        </div>
                    </div>-->
        
                        
                </div>
                

            </div> 

            
        </content>
        
        <div class="border_right"></div>
        <right-space></right-space>

        <!--Footer Markup-->
        <footer>
            <div id="footer_header">
                <h3>Clairemont Comics<h3>
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
                            <a href = 'mailto: charsh@clairemontcomics.com'>
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