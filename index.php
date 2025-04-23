<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="resource/css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="assets/img/logosmk.png" alt="ulaancok">
            <a href="#">Buku Tahunan Siswa</a>
        </div>
        <div class="button-container">
            <button class="download-button">Download</button>
        </div>
    </header>
    <main>
        <p>Buku</p>
        <span>Tahunan Siswa</span>

        <section class="swiper mySwiper">
        <div class="swiper-wrapper">

            <div class="card swiper-slide">
                <div class="card_image">
                    <img src="assets/img/dua_empat.jpg" alt="">
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="card_image">
                    <img src="assets/img/dua_lima.jpg" alt="">
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="card_image">
                    <img src="assets/img/dua_enam.jpg" alt="">
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="card_image">
                    <img src="assets/img/dua_tujuh.jpg" alt="">
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="card_image">
                    <img src="assets/img/dua_delapan.jpg" alt="">
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="card_image">
                    <img src="assets/img/dua_delapan.jpg" alt="">
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="card_image">
                    <img src="assets/img/dua_delapan.jpg" alt="">
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="card_image">
                    <img src="assets/img/dua_delapan.jpg" alt="">
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="card_image">
                    <img src="assets/img/dua_delapan.jpg" alt="">
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="card_image">
                    <img src="assets/img/dua_delapan.jpg" alt="">
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="card_image">
                    <img src="assets/img/dua_delapan.jpg" alt="">
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="card_image">
                    <img src="assets/img/dua_delapan.jpg" alt="">
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="card_image">
                    <img src="assets/img/dua_delapan.jpg" alt="">
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="card_image">
                    <img src="assets/img/dua_delapan.jpg" alt="">
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="card_image">
                    <img src="assets/img/dua_delapan.jpg" alt="">
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="card_image">
                    <img src="assets/img/dua_delapan.jpg" alt="">
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="card_image">
                    <img src="assets/img/dua_delapan.jpg" alt="">
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="card_image">
                    <img src="assets/img/dua_delapan.jpg" alt="">
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="card_image">
                    <img src="assets/img/dua_delapan.jpg" alt="">
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="card_image">
                    <img src="assets/img/dua_delapan.jpg" alt="">
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="card_image">
                    <img src="assets/img/dua_delapan.jpg" alt="">
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="card_image">
                    <img src="assets/img/dua_delapan.jpg" alt="">
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="card_image">
                    <img src="assets/img/dua_empat.jpg" alt="">
                </div>
            </div>

        </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper(".mySwiper", {

                loop: true,

                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                coverflowEffect: {
                    rotate: 0,
                    stretch: 0,
                    depth: 300,
                    modifier: 1,
                    slideShadows: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                },
            });
        </script>
    </main>
    <footer>Copyright &copy; 2025</footer>
</body>
</html>