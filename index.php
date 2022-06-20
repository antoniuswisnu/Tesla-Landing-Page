<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Website Design - Tesla</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <!-- Header -->

    <div class="header" id="header">
        <nav>
            <img src="images/logo.png" class="logo">
            <ul>
                <li><a href="#" id="models">Model S</a></li>
                <li><a href="#" id="model3">Model 3</a></li>
                <li><a href="#" id="modelx">Model X</a></li>
                <li><a href="#" id="modely">Model Y</a></li>
            </ul>
            <a class="btn" id="button" href="form.php">
                Order Now
            </a>
        </nav>
    
        <div class="info">
            <div>
                <h2>1.8 s</h2>
                <p>70mph</p>
            </div>
            <div>
                <h2>210 mph</h2>
                <p>Top Speed</p>
            </div>
            <div>
                <h2>396 mi</h2>
                <p>Max Range</p>
            </div>
            <div class="line">
            </div>
                <h2 id="model">Model S</h2>
            </div>
        </div>
    </div>

    <!-- Konten Interior -->

    <div class="interior">
        <div class="interior-container">
            <div data-aos="fade-up" class="interior-img">
                <img src="images/interior.jpg" alt="">
            </div>
            <div class="interior-details">
                <h3 data-aos="fade-down">Cinematic Experience</h3>
                <p data-aos="fade-down">A 17” touchscreen with left-right tilt offers 2200 x 1300 resolution, true colors and exceptional responsiveness for gaming, movies and more.</p>
            </div>
        </div>

        <div class="interior-container">
            <div data-aos="fade-down" class="interior2-details">
                <h3>Stay Connected</h3>
                <p>Multi-device Bluetooth, wireless and USB-C charging for every passenger, with enough power to fast-charge your tablets and laptop.z</p>
            </div>
            <div data-aos="fade-up" class="interior-img">
                <img src="images/interior2.jpg" alt="">
            </div>
        </div>

        <div class="interior-container">
            <div data-aos="fade-up" class="interior-img">
                <img src="images/setir.jpg" alt="">
            </div>
            <div data-aos="fade-down" class="interior-details">
                <h3>Your Best Audio System</h3>
                <p>A 22-speaker, 960-watt audio system with Active Road Noise Reduction offers the best listening experience wherever you are.</p>
            </div>
        </div>
    </div>

    <!-- Konten Exterior -->

    <div class="exterior">
        <div class="exterior-container">
            <div data-aos="zoom-in-down" class="exterior-thumbnail">
                <img src="images/tezz.jpg" alt="">
            </div>   
            <div data-aos="zoom-in-up" class="exterior-details">
                <center><h3>Even More Capable</h3></center>
                <center><p>With the most storage space and towing capacity of any electric SUV, and seating for up to seven adults, Model X delivers maximum utility. Front doors open and close automatically, Falcon Wing doors allow for easier loading and a standard trailer hitch lets you bring your gear anywhere you go.</p><center>
            </div>     
        </div>
        
        <div data-aos="fade-left" class="exterior-container">
            <div class="container">
                <div class="box">
                    <span></span>
                    <div class="content">
                      <h2>Falcon Wing</h2>
                      <p>This eagle wing door feature is certainly the main attraction of this Tesla Model X. In addition to showing a modern and elegant impression, this feature also has advantages in terms of function.</p>
                      <a href="#">Read More</a>
                    </div>
                  </div>
                <div class="box">
                  <span></span>
                  <div class="content">
                    <h2>Keyless entry</h2>
                    <p>This feature is sophisticated, because it only relies on RFID technology embedded in the default chip card. Just hold the card close to the sensor located on the B pillar and the lock will open automatically. Users can also unlock the car via the 'Tesla' application on their smartphone.</p>
                    <a href="#">Read More</a>
                  </div>
                </div>
                <div class="box">
                  <span></span>
                  <div class="content">
                    <h2>Tesla Vision</h2>
                    <p>Tesla Vision detects nearby cars, helps prevent potential collisions and assists with parking</p>
                    <a href="#">Read More</a>
                  </div>
                </div>
            </div>
                
        </div>
        
        <div class="exterior-container">
             
            <div data-aos="zoom-in-down" class="exterior-details">
                <center><h3>Go Anywhere</h3></center>
                <center><p>With up to 348 miles of estimated range and access to the world’s largest and most powerful fast charging network, you’ll spend less time plugged in and more time on the road.</p><center>
            </div>    
            <div data-aos="zoom-in-up" id="exterior-thumbnail2" class="exterior-thumbnail">
                <img src="images/exterior3.jpg" alt="">
            </div>   

            <div data-aos="zoom-in-down" class="exterior-details">
                <center><h3>Autopilot</h3></center>
                <center><p>To turn on autopilot mode, users simply activate the navigation feature and specify the location they want to go. After that, press the navigate button on auto pilot. Furthermore, the Traffic-Aware CruiseControl and Auto-Steer features will be activated automatically.</p><center>
            </div>    
        </div>

        <!-- Video -->

        <div data-aos="zoom-out-up" class="video">
            <video controls class="video-play">
                <source src="images/autopilot.mp4" type="video/mp4">
                <source src="images/autopilot.mp4" type="video/ogg">
                Your browser does not support the video tag.
            </video>
        </div>

       
    </div>

   <!-- Footer -->

    <div class="footer-dark">
        <footer>
            <div data-aos="fade-right" class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Skills</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Android Development</a></li>
                            <li><a href="#">Internet of Things </a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Experiences</h3>
                        <ul>
                            <li><a href="#">Organization</a></li>
                            <li><a href="#">Volunteer</a></li>
                            <li><a href="#">Internship</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>About Me</h3>
                        <p>Mahasiswa Universitas Gadjah Mada Fakultas Sekolah Vokasi Program Studi Teknologi Rekayasa Perangkat Lunak Angkatan 2021. Cita-cita menjadi Multi-App Platform Developer. Hobi habisin uang tapi ga punya uang. </p>
                    </div>
                    <div class="col item social">
                        <a href="linkedin.com/in/antonius-wisnu-bb8411224/"><i class="icon ion-social-linkedin"></i></a>
                        <a href="https://github.com/antoniuswisnu"><i class="icon ion-social-github"></i></a>
                        <a href="https://twitter.com/antoniuswisnuu"><i class="icon ion-social-twitter"></i></a>
                        <a href="wa.me/62895326509445"><i class="icon ion-social-whatsapp"></i></a>
                        <a href="https://www.instagram.com/antoniuswisnu_/"><i class="icon ion-social-instagram"></i></a>
                    </div>
                </div>
                <p class="copyright">Antonius Wisnu © 2022</p>
            </div>
        </footer>
    </div>
    

    <script src="script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>