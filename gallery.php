<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="css/framework_style.css">
    <link rel="icon" type="image/x-icon" href="/images/clairmont.svg">
    <title>Clairemont Comics</title>
</head>

<body>
    <container>
        <!--Header Markup-->
        <header>
            <h2 class="logo">
                <a href="index.html">
                    <img src="images/clairmont.svg" alt="logo" style="height: 1.5em; vertical-align:middle;">
                    Clairemont Comics
                </a>
            </h2>
            <input type="checkbox" id="nav_toggle" class="nav_toggle" style="height: 1em;">
            <nav>
                <ul>
                    <li><a href='products_hub.html'>Products</a></li>
                    <li><a href='events.html'>Events</a></li>
                    <li><a href='gallery.html'>Gallery</a></li>
                    <li><a href='faq.html'>FAQ</a></li>
                    <li><a href='contact_us.html'>Contact Us</a></li>
                </ul>
            </nav>
            <label for="nav_toggle" class="nav_toggle_label">
                <span></span>
            </label>
        </header>

        <left-space></left-space>
        <div class="border_left"></div>
        <!--Main Content Markup-->
        <content>
            <h1>Gallery</h1>
            <?php
            DEFINE ('DB_USER', 'root');
            DEFINE ('DB_PASSWORD', '');
            DEFINE ('DB_HOST', 'localhost');
            DEFINE ('DB_NAME', 'test1');
            
            
            $dbc = @mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME)
            or die('Could not connect!'.mysqli_connect_error());
            
            
            $query = "SELECT path, text FROM gallery";
                    $response = @mysqli_query($dbc, $query);
            
                    if ($response){
            
                        while($row = mysqli_fetch_array($response)){
            
                        echo '<div class="imgContainer">
                        <img class="facebook" src="' . $row['path'] . '" alt="'. $row['text'] . '">
                        <div class="description">'. $row['text'] . '</div>';
            
                        echo '</div>';
                
                
                        }
                
                
                    }
            // else{
            // 	echo "No connection!";
            // }
            
            ?>
            <!-- <div class="imgContainer">
                <img class="facebook" src="images/titan.jpg" alt="titan">
                <div class="description">This is an awesome Titan mini figure that we sell here at Clairemont Comics</div>
            </div>
            <div class="imgContainer">
                <img class="facebook" src="images/figure.jpg" alt="figure">
                <div class="description">Rare and good condition collectable actions figures</div>
            </div>
            <div class="imgContainer">
                <img class="facebook" src="images/files.jpg" alt="files">
                <div class="description">Hidden treasures await</div>
            </div>
            <div class="imgContainer">
                <img class="facebook" src="images/warhammer.jpg" alt="warhammer">
                <div class="description">We cannot stop Warhammer from reaching into our wallets either</div>
            </div>
            <div class="imgContainer">
                <img class="facebook" src="images/table.jpg" alt="table">
                <div class="description">Come play with us!</div>
            </div>
            <div class="imgContainer">
                <img class="facebook" src="images/rocks.jpg" alt="rocks">
                <div class="description">Awesome Merchandise!</div>
            </div>
            <div class="imgContainer">
                <img class="facebook" src="images/panther.jpg" alt="panther">
                <div class="description">Comic books are a big hit!</div>
            </div>
            <div class="imgContainer">
                <img class="facebook" src="images/haven.jpg" alt="haven">
                <div class="description">More great Merchandise!</div>
            </div> -->

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
                            <a href='https://goo.gl/maps/zjVLgztXhXH7Uqxk6' target="_blank">
                                <img src="images/location-dot-solid_1-svg_1.png" alt="Location">
                            </a>
                        </td>
                        <td>
                            <a href='https://goo.gl/maps/zjVLgztXhXH7Uqxk6' target="_blank">
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
                            <a href='mailto: charsh@clairemontcomics.com'>
                                <img src="images/envelope-solid-svg_1.png" alt="Email:">
                            </a>
                        </td>
                        <td>
                            <a href='mailto: charsh@clairemontcomics.com'>
                                <p>charsh@clairemontcomics.com</p>
                            </a>
                        </td>
                    </tr>
                    <!-- facebook icon and facebook page link-->
                    <tr>
                        <td>
                            <a href="https://www.facebook.com/pages/category/Comic-Bookstore/Clairemont-Comics-1462263010699477/"
                                target='_blank'>
                                <img src="images/facebook-brands-svg_1.png" alt="Facebook:">
                            </a>
                        </td>
                        <td>
                            <a href="https://www.facebook.com/pages/category/Comic-Bookstore/Clairemont-Comics-1462263010699477/"
                                target='_blank'>
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