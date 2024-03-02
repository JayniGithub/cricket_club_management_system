<!DOCTYPE html>
<html>
    <head>
        <title>abc</title>
        <link rel="stylesheet" href="slide.css">
    </head>
    <body>
        
        <div class="navbar">
            <div class="logo">
                <h2>MCC</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="member.php">Member Registration</a></li>
                    <li><a href="batch.php">Batch Registration</a></li>
                    <li><a href="#">Ground Booking</a></li>
                    <li><a href="#">Admin Login</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                </ul>
            </div>
           
        </div>
        <div class="img-slider">
            <div class="slide active">
                <img src="img/17.jpg" alt="">
                <div class="info">
                    <h1>Welcome...</h1><br>
                    <h2> Cricket <br><br> Club <br><br> Matara</h2>
                    <p>Matara Sports Club was a first-class cricket team in Sri Lanka. It played first-class cricket 1998 to 2001. <br><br>It was demoted to Division II in 2002, and to Division III in 2014.

                        The Uyanwatte ground is home to Matara Cricket Club. </p>
                </div>
            </div>

            <div class="slide">
                <img src="img/13.jpg" alt="" >
                <div class="info">
                    <h1>Welcome...</h1><br>
                    <h2> Cricket <br><br> Club <br><br> Matara</h2>
                    <p>Matara Sports Club was a first-class cricket team in Sri Lanka. It played first-class cricket 1998 to 2001. <br><br>It was demoted to Division II in 2002, and to Division III in 2014.

                        The Uyanwatte ground is home to Matara Cricket Club. </p>
                </div>
            </div>

            <div class="slide">
                <img src="img/16.jpg" alt="" >
                <div class="info">
                    <h1>Welcome...</h1><br>
                    <h2> Cricket <br><br> Club <br><br> Matara</h2>
                    <p>Matara Sports Club was a first-class cricket team in Sri Lanka. It played first-class cricket 1998 to 2001. <br><br>It was demoted to Division II in 2002, and to Division III in 2014.

                        The Uyanwatte ground is home to Matara Cricket Club. </p>
                </div>
            </div>

            <div class="slide">
                <img src="img/18.jpg" alt="" >
                <div class="info">
                    <h1>Welcome...</h1><br>
                    <h2> Cricket <br><br> Club <br><br> Matara</h2>
                    <p>Matara Sports Club was a first-class cricket team in Sri Lanka. It played first-class cricket 1998 to 2001. <br><br>It was demoted to Division II in 2002, and to Division III in 2014.

                        The Uyanwatte ground is home to Matara Cricket Club. </p>
                </div>
            </div>

            <div class="slide">
                <img src="img/pic6.jpg" alt="" >
                <div class="info">
                    <h1>Welcome...</h1><br>
                    <h2> Cricket <br><br> Club <br><br> Matara</h2>
                    <p>Matara Sports Club was a first-class cricket team in Sri Lanka. It played first-class cricket 1998 to 2001. <br><br>It was demoted to Division II in 2002, and to Division III in 2014.

                        The Uyanwatte ground is home to Matara Cricket Club. </p>
                </div>
            </div>
            <div class="navigation">
                <div class="btn active"></div>
                <div class="btn"></div>
                <div class="btn"></div>
                <div class="btn"></div>
                <div class="btn"></div>
            </div>
        </div>

        <script type="text/javascript">
            var slides = document.querySelectorAll('.slide');
            var btns = document.querySelectorAll('.btn');
            let currentSlide = 1;

            //Javascript for image slider manual navigation
            var manualNav = function(manual){
                slides.forEach((slide) => {
                    slide.classList.remove("active");

                    btns.forEach((btn) => {
                        btn.classList.remove('active');
                    });
                });
                slides[manual].classList.add('active');
                btns[manual].classList.add('active');
            }

            btns.forEach((btn, i) => {
                btn.addEventListener("click", () => {
                    manualNav(i);
                    currentSlide = i;
                });
            });

            //javascript for image slider autoplay navigation
            var repeat = function(activeClass){
                let active = document.getElementsByClassName('active');
                let i = 1;

                var repeater = () => {
                    setTimeout(function(){
                        [...active].forEach((activeSlide) => {
                            activeSlide.classList.remove('active');
                        });
                        slides[i].classList.add('active');
                        btns[i].classList.add('active');
                        i++;

                        if(slides.lenght == i){
                            i = 0;
                        }
                        if(i>=slides.length){
                            return;
                        }
                        repeater();
                    }, 5000);
                }
                repeater();
            }
            repeat();
        </script>

    
    </body>
</html>