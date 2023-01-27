<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="detail.css">
    <title>EPBSS - Detail Properti</title>
</head>
<body>
    <main>
    <div class="slideshow-container">
        <img src="assets/Fitur Rumah 1.png">

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        </div>

    </div>

    <div class="main-content align-items-center" >
        <div class="border">
            <div class="title">
                <h1>Kamar Mandi Rumah Minimalis Type-02</h1>
                <h3 style="font-weight: bold;">Rp. 2000000</h3>
            </div>
            <div class="deskripsi">
                <p>Lokasi Strategis</p>
            </div>
        </div>
        <div class="border">
            <div class="title">
                <h3>Informasi Lengkap</h3>
            </div>
            <div class="deskripsi">
                <div class="sub-informasi">
                    <p>Alamat: Desa Lecari Kecamatan Sukorejo Kabupaten Pasuruan</p>
                </div>
                <div class="sub-informasi">
                    <p>Jenis: Rumah</p>
                </div>
                <div class="sub-informasi">
                    <p>Luas: 12 m2</p>
                </div>
                <div class="sub-informasi">
                    <img src="assets/Fitur Rumah 1.png" alt="Jumlah Kamar" class="icon-informasi">
                    <p>: 2</p>
                </div>
            </div>
        </div>
        <div class="border">
            <div class="title">
                <h3>Contact Person</h3>
            </div>
            <div class="contact-person">
                <div class="deskripsi">
                    <h2>Majid</h2>
                    <div class="information">
                        <div class="sub-information">
                            <img src="" alt="Email" class="email">
                            <h3>Email:</h3>
                            <h2>majit@gmail.com</h2>
                        </div>
                        <div class="sub-information">
                            <img src="" alt="Phone" class="phone">
                            <h3>Phone Number:</h3>
                            <h2>+62 81998978013</h2>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
    <script src="detail.js"></script>
</body>
</html>