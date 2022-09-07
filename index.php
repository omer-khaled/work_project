<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./external/all.min.css">
    <link rel = "icon"  href = "./logo.png" type = "image/x-icon">
    <link rel="stylesheet" href="./style.css">
    <title>PRALINECO</title>
</head>

<body data-bs-spy="scroll" data-bs-target="#nav_res">
    <nav class="navbar px-lg-5 navbar-expand-lg my-0 bg-black navbar-light sticky-top" id="nav_res">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand">
                <img src="./images/logo.png" class="image" alt="">
            </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="bi bi-text-right fs-2 text-light"></span>
            </button>
            <div class="navbar-collapse text-center collapse " id="navbarNav">
                <ul class="navbar-nav ms-auto flex-lg-row  flex-column-reverse">
                    <li class="nav-item "><a class="nav-link active me-lg-3" number="0" href="#res">Home</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" number="1" href="#prog">About Us</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" number="2" href="#serv">Our Products</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" number="3" href="#omla">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" number="4" href="#vvideo">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="landing">
        <div id="carouselExampleIndicators" class="carousel slide w-100 h-100" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner w-100 h-100">
            <div class="carousel-item active slid-1 w-100 h-100">
                <div class="carousel-caption  h-75 d-flex justify-content-center flex-column align-items-center">
                    <h5 class="h1 mb-4 text_custom">Welcom To pralineco</h5>
                    <p class="h3 text-dark">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum, magnam.</p>
                  </div>
            </div>
            <div class="carousel-item slid-2  w-100 h-100">
                <div class="carousel-caption  h-75 d-flex justify-content-center flex-column align-items-center">
                    <h5 class="h1 mb-4 text_custom">Welcom To pralineco</h5>
                    <p class="h3 text-dark">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum, magnam.</p>
                  </div>
            </div>
            <div class="carousel-item slid-3 w-100 h-100">
                <div class="carousel-caption  h-75 d-flex justify-content-center flex-column align-items-center">
                    <h5 class="h1 mb-4 text_custom">Welcom To pralineco</h5>
                    <p class="h3 text-dark">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum, magnam.</p>
                  </div>
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
             <div class="con p-3 d-flex justify-content-center aligh-items-center">
                <span class="carousel-control-prev-icon img-white_cur" aria-hidden="true"></span>
                <span class="text-white_cur position-relative">Prev</span>
             </div>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <div class="con-next p-3 d-flex justify-content-center aligh-items-center">  
                    <span class="text-white_cur position-relative">next</span>
                    <span class="carousel-control-next-icon img-white_cur" aria-hidden="true"></span>
                </div>
                </button>
        </div>
        <svg id="wave" class="sv" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(243, 106, 62, 1)" offset="0%"></stop><stop stop-color="rgba(255, 179, 11, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="#BD9B60" d="M0,90L10,86.7C20,83,40,77,60,68.3C80,60,100,50,120,41.7C140,33,160,27,180,23.3C200,20,220,20,240,26.7C260,33,280,47,300,56.7C320,67,340,73,360,75C380,77,400,73,420,63.3C440,53,460,37,480,40C500,43,520,67,540,68.3C560,70,580,50,600,48.3C620,47,640,63,660,60C680,57,700,33,720,35C740,37,760,63,780,73.3C800,83,820,77,840,65C860,53,880,37,900,38.3C920,40,940,60,960,63.3C980,67,1000,53,1020,48.3C1040,43,1060,47,1080,43.3C1100,40,1120,30,1140,25C1160,20,1180,20,1200,21.7C1220,23,1240,27,1260,26.7C1280,27,1300,23,1320,26.7C1340,30,1360,40,1380,50C1400,60,1420,70,1430,75L1440,80L1440,100L1430,100C1420,100,1400,100,1380,100C1360,100,1340,100,1320,100C1300,100,1280,100,1260,100C1240,100,1220,100,1200,100C1180,100,1160,100,1140,100C1120,100,1100,100,1080,100C1060,100,1040,100,1020,100C1000,100,980,100,960,100C940,100,920,100,900,100C880,100,860,100,840,100C820,100,800,100,780,100C760,100,740,100,720,100C700,100,680,100,660,100C640,100,620,100,600,100C580,100,560,100,540,100C520,100,500,100,480,100C460,100,440,100,420,100C400,100,380,100,360,100C340,100,320,100,300,100C280,100,260,100,240,100C220,100,200,100,180,100C160,100,140,100,120,100C100,100,80,100,60,100C40,100,20,100,10,100L0,100Z"></path></svg>
    </header>
    <section class="product mt-6 overflow-hidden">
       <div class="container">
            <div class="row">
                <img src="./images/divider_1.png" class="w-10" alt="">
                <h2 class="heading text-center my-4">Our Specialties</h2>
                <div class="col-lg-11 mt-5 mx-auto d-flex flex-column flex-lg-row justify-content-lg-between">
                    <div class="w-20 position-relative mx-auto my-2" data-aos="fade-right"     data-aos-duration="700"     data-aos-easing="ease-in-out">
                        <div class="services_frame" bis_skin_checked="1">
                            <img src="./images/Round-Border-1--Arvin61r58.png" class="om" alt="">
                            <img src="./images/q93y5T7NWDbw.png" class="images" alt="">
                        </div> 
                        <h3 class="text_custom text-center mt-3">Ready Belgium Chocolate</h3>
                    </div> 
                    <div class="w-20 position-relative mx-auto my-2" data-aos="fade-left" data-aos-duration="700"     data-aos-easing="ease-in-out">
                        <div class="services_frame" bis_skin_checked="1">
                            <img src="./images/Round-Border-1--Arvin61r58.png" class="om" alt="">
                            <img src="./images/q93y5T7NWDbw.png" class="images" alt="">
                        </div> 
                        <h3 class="text_custom text-center mt-3">Ready Belgium Chocolate</h3>
                    </div>
                    <div class="w-20 position-relative mx-auto my-2" data-aos="fade-right" data-aos-duration="700"     data-aos-easing="ease-in-out">
                        <div class="services_frame" bis_skin_checked="1">
                            <img src="./images/Round-Border-1--Arvin61r58.png" class="om" alt="">
                            <img src="./images/q93y5T7NWDbw.png" class="images" alt="">
                        </div> 
                        <h3 class="text_custom text-center mt-3">Ready Belgium Chocolate</h3>
                    </div>
                    <div class="w-20 position-relative mx-auto my-2" data-aos="fade-left" data-aos-duration="700"     data-aos-easing="ease-in-out">
                        <div class="services_frame" bis_skin_checked="1">
                            <img src="./images/Round-Border-1--Arvin61r58.png" class="om" alt="">
                            <img src="./images/q93y5T7NWDbw.png" class="images" alt="">
                        </div>
                        <h3 class="text_custom text-center mt-3">Ready Belgium Chocolate</h3>
                    </div>
                </div>
                <div class="col-lg-11 mt-2 mx-auto d-flex flex-column flex-lg-row justify-content-lg-between">
                    <div class="w-20 position-relative mx-auto my-4"  data-aos="fade-right"     data-aos-duration="700"     data-aos-easing="ease-in-out">
                        <div class="services_frame" bis_skin_checked="1">
                            <img src="./images/Round-Border-1--Arvin61r58.png" class="om" alt="">
                            <img src="./images/q93y5T7NWDbw.png" class="images" alt="">
                        </div> 
                        <h3 class="text_custom text-center mt-3">Ready Belgium Chocolate</h3>
                    </div> 
                    <div class="w-20 position-relative mx-auto my-4"  data-aos="fade-left"     data-aos-duration="700"     data-aos-easing="ease-in-out">
                        <div class="services_frame" bis_skin_checked="1">
                            <img src="./images/Round-Border-1--Arvin61r58.png" class="om" alt="">
                            <img src="./images/q93y5T7NWDbw.png" class="images" alt="">
                        </div> 
                        <h3 class="text_custom text-center mt-3">Ready Belgium Chocolate</h3>
                    </div>
                    <div class="w-20 position-relative mx-auto my-4"  data-aos="fade-right"     data-aos-duration="700"     data-aos-easing="ease-in-out">
                        <div class="services_frame" bis_skin_checked="1">
                            <img src="./images/Round-Border-1--Arvin61r58.png" class="om" alt="">
                            <img src="./images/q93y5T7NWDbw.png" class="images" alt="">
                        </div> 
                        <h3 class="text_custom text-center mt-3">Ready Belgium Chocolate</h3>
                    </div>
                    <div class="w-20 position-relative mx-auto my-4"  data-aos="fade-left"     data-aos-duration="700"     data-aos-easing="ease-in-out">
                        <div class="services_frame" bis_skin_checked="1">
                            <img src="./images/Round-Border-1--Arvin61r58.png" class="om" alt="">
                            <img src="./images/q93y5T7NWDbw.png" class="images" alt="">
                        </div> 
                        <h3 class="text_custom text-center mt-3">Ready Belgium Chocolate</h3>
                    </div>
                </div>
            </div>
       </div>
    </section>
    <section class="aboutus mb-6 overflow-hidden">
        <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(243, 106, 62, 1)" offset="0%"></stop><stop stop-color="rgba(255, 179, 11, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="#BD9B60" d="M0,90L10,86.7C20,83,40,77,60,68.3C80,60,100,50,120,41.7C140,33,160,27,180,23.3C200,20,220,20,240,26.7C260,33,280,47,300,56.7C320,67,340,73,360,75C380,77,400,73,420,63.3C440,53,460,37,480,40C500,43,520,67,540,68.3C560,70,580,50,600,48.3C620,47,640,63,660,60C680,57,700,33,720,35C740,37,760,63,780,73.3C800,83,820,77,840,65C860,53,880,37,900,38.3C920,40,940,60,960,63.3C980,67,1000,53,1020,48.3C1040,43,1060,47,1080,43.3C1100,40,1120,30,1140,25C1160,20,1180,20,1200,21.7C1220,23,1240,27,1260,26.7C1280,27,1300,23,1320,26.7C1340,30,1360,40,1380,50C1400,60,1420,70,1430,75L1440,80L1440,100L1430,100C1420,100,1400,100,1380,100C1360,100,1340,100,1320,100C1300,100,1280,100,1260,100C1240,100,1220,100,1200,100C1180,100,1160,100,1140,100C1120,100,1100,100,1080,100C1060,100,1040,100,1020,100C1000,100,980,100,960,100C940,100,920,100,900,100C880,100,860,100,840,100C820,100,800,100,780,100C760,100,740,100,720,100C700,100,680,100,660,100C640,100,620,100,600,100C580,100,560,100,540,100C520,100,500,100,480,100C460,100,440,100,420,100C400,100,380,100,360,100C340,100,320,100,300,100C280,100,260,100,240,100C220,100,200,100,180,100C160,100,140,100,120,100C100,100,80,100,60,100C40,100,20,100,10,100L0,100Z"></path></svg>
        <div class="container">
            <div class="row">
                <h2 class="h1 text-center text-white my-5">Our featurs</h2>
                <div class="col-lg-11 mt-5 mx-auto d-flex flex-column flex-lg-row justify-content-lg-between">
                    <div class="w-20-custom position-relative mx-auto my-2" data-aos="flip-up"  data-aos-duration="700"     data-aos-easing="ease-in-out">
                        <div class="services_frame" bis_skin_checked="1">
                            <img src="./images/Round-Border-1--Arvin61r58.png" class="om" alt="">
                            <img src="./images/featurs1.png" class="images" alt="">
                        </div> 
                        <h3 class="text_custom text-center mt-3">Best Quality</h3>
                    </div> 
                    <div class="w-20-custom position-relative mx-auto my-2" data-aos="flip-right"  data-aos-duration="700"     data-aos-easing="ease-in-out">
                        <div class="services_frame" bis_skin_checked="1">
                            <img src="./images/Round-Border-1--Arvin61r58.png" class="om" alt="">
                            <img src="./images/featurs2.png" class="images" alt="">
                        </div> 
                        <h3 class="text_custom text-center mt-3">Online Support</h3>
                    </div>
                    <div class="w-20-custom position-relative mx-auto my-2" data-aos="flip-down"  data-aos-duration="700"     data-aos-easing="ease-in-out">
                        <div class="services_frame" bis_skin_checked="1">
                            <img src="./images/Round-Border-1--Arvin61r58.png" class="om" alt="">
                            <img src="./images/featurs3.png" class="images" alt="">
                        </div> 
                        <h3 class="text_custom text-center mt-3">quick Delivery</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-us overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="info col-lg-4 text-white" data-aos="fade-right"     data-aos-duration="700"     data-aos-easing="ease-in-out">
                    <h2 class="h2 my-3 text_custom">Contact Us</h2>
                    <div class="footer-content" bis_skin_checked="1">
                        <ul>
                           <li class="lh-lg mb-4">La Crema General Trading L.L.C
                           <br>
                           La Crema Cocoa and Chocolate Manufacturing L.L.C
                           </li>
                           <li class="lh-base mb-2"><i class="fa fa-map-marker me-2" aria-hidden="true"></i> King Mansour Bin Abdulaziz St - P.O Box 12612 - Riyadh - Saudi Arabia</li>
                           <li class="lh-base mb-2"><i class="fa fa-phone me-2" aria-hidden="true"></i>920007476</li>
                           <li class="lh-base mb-2"><i class="fa-brands fa-whatsapp me-2"></i>+966500110260</li>
                           <li class="lh-base mb-2"><i class="fa-regular fa-envelope me-2"></i>nfo@pralineco.com</li>
                           <li class="lh-base mb-2"><i class="fa-regular fa-envelope me-2"></i>www.pralineco.com</li>
                        </ul>
                     </div>
                     <div class="d-flex justify-content-center align-item-center w-50">
                        <div class="w-20-link-custom position-relative mx-auto my-2">
                            <div class="services_frame " bis_skin_checked="1">
                                <img src="./images/Round-Border-1--Arvin61r58.png" class="om" alt="">
                                <i class="fa-brands fa-facebook-f face"></i>
                            </div> 
                         </div>
                         <div class="w-20-link-custom position-relative mx-auto my-2">
                            <div class="services_frame" bis_skin_checked="1">
                                <img src="./images/Round-Border-1--Arvin61r58.png" class="om" alt="">
                                <i class="fa-brands fa-instagram insta"></i>
                            </div> 
                         </div>
                     </div>
                     <!-- <span class="rounded-custom p-4 face"><i class="fa-brands fa-facebook-f"></i></span> -->
                     <!-- <span class="rounded-custom p-4 insta"><i class="fa-brands fa-instagram"></i></span> -->
                </div>
                <div class="location col-lg-8 text-white px-5 mb-cur" data-aos="fade-left"     data-aos-duration="700"     data-aos-easing="ease-in-out">
                    <h2 class="h2 my-3 text_custom">Our Location</h2>
                    <iframe class="w-100 h-75" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7252.224569877435!2d46.71502225445784!3d24.654263102746526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f059e662a4c43%3A0x78e3cfa78dc1f062!2z2YXYt9i52YUg2KfYs9mF2KfZgyDYp9mE2YjYtNmFIDI!5e0!3m2!1sar!2seg!4v1662511586373!5m2!1sar!2seg" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <div id="to_toping" class="d-flex justify-content-center align-items-center">
        <i class="fa-solid fa-arrow-up-long"></i>
    </div>
    <div id="wats">
        <a href="https://wa.me/966500110260" class="de"><i class="fa-brands fa-whatsapp me-2 wTS-COLOR"></i></a>
    </div>
    <div id="setting" class="d-flex justify-content-center align-items-center">
        <div class="div_side"></div>
        <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <i class="bi bi-gear"></i>
        </a>
    </div>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasLabel">Setting</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <form action="index.php" id="form_setting" method='POST' enctype='multipart/form-data'>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label text_custom">Password</label>
                <input  type="text" class="form-control" name="passs" id="text_pass" placeholder="Password">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label text_custom">Upload Image</label>
                <input type="file" class="form-control" name="img_upload" id="upload_file">
            </div>
            <div class="col-auto">
                <input type="submit" id="send" name="img_submit" class="btn btn-primary mb-3">
            </div>
          </form>
        </div>
      </div>
    <div id="pen">
        <?php 
            foreach(glob('./images/products/*.*') as $filename){
                echo "<img src='".$filename."'>";
            }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./script.js"></script>
    <script>
        const myCarouselElement = document.getElementById('carouselExampleIndicators');
        const carousel = new bootstrap.Carousel(myCarouselElement, {
        interval: 2500,
        wrap: true
        });
    </script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
</body>
</html>
<?php
    if(isset($_POST['img_submit']) && $_POST['passs']=="admin"  && isset($_FILES['img_upload']['name']) ){
        $img_name=$_FILES['img_upload']['name'];
        $tmp_img_name=$_FILES['img_upload']['tmp_name'];
        $folder='images/products/';
        move_uploaded_file($tmp_img_name,$folder.$img_name);
        // echo '<script> location.reload(); </script>';
    }
?>