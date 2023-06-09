<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reponsive Personal Portfolio Website Design </title>

    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--custom css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!--header design-->
    <header class="header">
        <a href="assets/fitra.jpg" class="logo">Portfolio</a>



        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>
    <section>
        <div class="home-content">
            <h3>Hallo It's me</h3>
            <h1>m.fitrahul anwar</h1>
            <h3>dan saya seorang <span class="multiple-text"></span></h3>
            <p>saya lahir dibogor kecamatan dramaga,saya belajar it sejak smk kelas 11 saya ingin menjadi developer</p>
            <div class="social-media">
                <a href="#"><i class='bx bxl-whatsapp-square' ></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-gmail'></i></a>
            </div>
            <a href="#" class="btn">Download CV</a>
        </div>
     <div class="home-img">
     <img src="css/img/fitra.jpg" width="2500" height="250">
     </div>
    </section>

   <section class="about" id="about">
    <div class="about-img">
        <img src="css/img/fitra.jpg" width="400" height="400" alt="">
    </div>

    <div class="about-content">
        <h2 class="heading">About <span>Me</span></h2>
        <h3>Frontend Developer</h3>
        <p>saya tinggal di bogor,saya ingin banget menjadi developer </p>
        <a href="#" class="btn">Read More</a>
    </div>

   </section>

   <section class="services" id="services">
    <h2 class="heading">Our <span>Services</span></h2>

    <div class="services-container">
        <div class="services-box">
            <i class='bx bx-code'></i>
            <h3>Web Development</h3>
            <p>hehe</p>
            <a href="#" class="btn">Read More</a>
        </div>

        <div class="services-box">
            <i class='bx bxs-paint'></i>
            <h3>Graphic Design</h3>
            <p>hehe</p>
            <a href="#" class="btn">Read More</a>
        </div>

        <div class="services-box">
            <i class='bx bx-bar-chart'></i>
            <h3>Digital Marketing</h3>
            <p>hehe</p>
            <a href="#" class="btn">Read More</a>
        </div>
    </div>
</section>

<section class="portfolio" id="portfolio">
    <h2 class="heading">Part of <span>Pemrograman</span></h2>

    <div class="portfolio-container">
        <div class="portfolio-box">
            <img src="https://i.pinimg.com/originals/ba/0e/b8/ba0eb82dbe74fb21925083c2ea7475b4.jpg" alt="">
            <div class="portfolio-layer">
                <h4>Web Development</h4>
                <p>hehe</p>
                <a href="#"><i class='bx bx-link-external'></i></a>
            </div>
        </div>

            <div class="portfolio-box">
                <img src="https://www.delhicourses.in/blog/wp-content/uploads/2018/03/web-design-tips.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>hehe</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

                <div class="portfolio-box">
                    <img src="https://www.webconfs.com/wp-content/uploads/2018/01/digital-marketing-company.jpeg" alt="">
                    <div class="portfolio-layer">
                        <h4>Digital Marketing</h4>
                        <p>hehe</p>
                        <a href="#"><i class='bx bx-link-external'></i></a>
                    </div>
                </div>

                <div class="portfolio-box">
                    <img src="https://www.hush.digital/wp-content/uploads/2019/03/MG_2597.jpg" alt="">
                    <div class="portfolio-layer">
                        <h4>frontend developer</h4>
                        <p>hehe</p>
                        <a href="#"><i class='bx bx-link-external'></i></a>
                    </div>
                </div>
                <div class="portfolio-box">
                    <img src="https://static1.makeuseofimages.com/wordpress/wp-content/uploads/2020/09/web-development-bundle-course-feature.jpg" alt="">
                    <div class="portfolio-layer">
                        <h4>Web  developer</h4>
                        <p>hehe</p>
                        <a href="#"><i class='bx bx-link-external'></i></a>
                    </div>
                </div>
                <div class="portfolio-box">
                    <img src="https://burst.shopifycdn.com/photos/coding-on-laptop.jpg?width=1200&format=pjpg&exif=0&iptc=0" alt="">
                    <div class="portfolio-layer">
                        <h4>Coding</h4>
                        <p>hehe</p>
                        <a href="#"><i class='bx bx-link-external'></i></a>
                    </div>
                </div>
    </div>
    </section>

    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>ME!</span></h2>

        <form action="#">
            <div class="input-box">
                <input type="text" placeholder="Full Name">
                <input type="email" placeholder="Email Address">
            </div>
            <div class="input-box">
                <input type="number" placeholder="Mobile Number">
                <input type="text" placeholder="Email Subject">
            </div>
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <input type="submit" value="Send Messaage" class="btn">
        </form>
    </section>

    <footer class="footer">
        <div class="footer-text">
            <p>Created By Fitrah</p>
        </div>

        <div class="footer-iconTop">
            <a href="#about"><i class="bx bx-arrow-to-top"></i></a>
        </div>
    </footer>
    <script src="https://unpkg.com/scrollreveal"></script>     
    <script src="https://unpkg.com/typed.js@2.0.14/dist/typed.umd.js"></script>
     <script src="script.js"></script>
</body>
</html>

