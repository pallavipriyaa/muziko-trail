<!DOCTYPE html>
<html>
<head>
    <title>International Music | Muziko</title>
    <link href="css/international.css" rel="stylesheet" type="text/css"/>

</head>
<body>
    <div class="container">

        <!-- *******  HEADER  *******-->
        <div class="navbar">
            <img src="images/logo/white1.png" class="logo">
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="#">LOGOUT</a></li>
            </ul>
        </div> 

        <!-- ******  CAROUSEL / IMAGE SLIDER  ******-->
        <div class="slider-content">
        <div class="slider">
            <div class="slides">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <input type="radio" name="radio-btn" id="radio5">
                <input type="radio" name="radio-btn" id="radio6">
                <input type="radio" name="radio-btn" id="radio7">
                <input type="radio" name="radio-btn" id="radio8">


                <div  class="slide first">
                    <img src="images/taylor.jpg" alt="">
                </div>
                <div  class="slide">
                    <img src="images/avamax.jpg" alt="">
                </div>
                <div  class="slide">
                    <img src="images/salanwalker.jpg" alt="">
                </div>
                <div  class="slide">
                    <img src="images/sbillie.jpg" alt="">
                </div>
                <div  class="slide">
                    <img src="images/sjustin.jpeg" alt="">
                </div>
                <div  class="slide">
                    <img src="images/sariana.jpg" alt="">
                </div>
                <div  class="slide">
                    <img src="images\sdovecameron.jpg" alt="">
                </div>
                <div  class="slide">
                    <img src="images\sedsheeran.jpg" alt="">
                </div>
                
                <div class="nav-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                    <div class="auto-btn5"></div>
                    <div class="auto-btn6"></div>
                    <div class="auto-btn7"></div>
                    <div class="auto-btn8"></div>
                </div>

                <div class="nav-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                    <label for="radio5" class="manual-btn"></label>
                    <label for="radio6" class="manual-btn"></label>
                    <label for="radio7" class="manual-btn"></label>
                    <label for="radio8" class="manual-btn"></label>
                </div>

            </div>
        </div>
        </div>
        
        <!-- *******  JAVASCRIPT FOR IMAGE SLIDER  ******* -->
        <script type="text/javascript">
        var counter = 1;
        setInterval(function(){
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if(counter > 8){
                counter = 1;
            }
        }, 5000);

        </script>

        <!-- ******* MUSIC / MAIN SECTION ******** -->
        <div class="content">
            <div class="artist">
                <img src="images/saleena.jpeg" class="artist-img" alt="Saleena Gomez">
                <h3>Saleena Gomez</h3>
            </div>
            <div class="artist">
                <img src="images/alanwalker.jpeg" class="artist-img" alt="Alan Walker">
                <h3>Alan Walker</h3>
            </div>       
            <div class="artist">
                <img src="images/taylorswift.jpeg" class="artist-img" alt="Taylor Swift">
                <h3>Taylor Swift</h3>
            </div>
            <div class="artist">
                <img src="images/justin.jpeg" class="artist-img" alt="Justin Bieber">
                <h3>Justin Bieber</h3>
            </div>
        </div>
        
        <!-- *******  FOOTER  ******* -->
        <footer>
            <div class="footer">
                <div class="footer-logo">
                    <img src="images/logo/white1.png" alt="logo" class="logo">
                </div>
                <br>
                <div class="footer-links">
                    <table>
                        <tr>
                            <th>COMPANY</th>
                            <th>COMMUNITIES</th>
                            <th>USEFUL LINKS</th>                   
                        </tr>
                        <tr>
                            <td>About</td>    
                            <td>For Artists</td>
                            <td>Support</td>
                        </tr>
                        <tr>
                            <td>Jobs</td>
                            <td>Developers</td>
                            <td>Web Player</td>
                        </tr>
                        <tr>
                            <td>For the Record</td>
                            <td>Advertising</td>
                            <td>Free Mobile App</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Investors</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Vendors</td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </footer>
    </div>    
</body>
</html>