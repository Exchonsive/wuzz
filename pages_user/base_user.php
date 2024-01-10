<!DOCTYPE html>
<html lang="en">
<style>
    #map {
        height: 300px;
    }

    h2 {
        color: rgb(35, 123, 255);
    }

    h4 {
        color: rgb(35, 123, 255);
    }

    /* Gaya latar belakang navbar saat dalam keadaan normal */
    .navbar {
        max-height: 70px;
        background: #ff7800;
        /* Warna hitam dengan opacity 0.3 */
        transition: background-color 0.3s;
        /* Efek transisi warna selama 0.3 detik */
    }

    /* Gaya teks dalam navbar */
    .navbar .nav-link {
        color: #ffffff;

        /* Warna teks putih */
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        background-color: #ffad2b;
    }

    /* Gaya latar belakang navbar saat digulir */
    .navbar.scrolled {
        background-color: #00000063;
        /* Warna hitam solid saat digulir */
    }

    .carousel-item img {

        max-height: 980px;
    }

    /* Styling the carousel container */
    #carouselExampleAutoplaying {
        overflow: hidden;
        position: relative;
    }

    /* Styling the carousel images */
    .carousel-inner .carousel-item img {
        width: 100%;
        height: auto;
        transform: translate3d(0, 0, 0);
        /* Reset transform */
        transition: transform 0.5s ease-in-out;
    }

    .big-icon {
        font-size: 50px;
        /* Atur sesuai dengan ukuran yang diinginkan */
        color: rgb(35, 123, 255);
    }

    /* Style khusus footer */
    .footer {
        position: relative;
        bottom: 0;
        width: 100%;
        height: 60px;
        background-color: rgb(35, 123, 255);
        margin-top: 10%;
    }

    .footer p {
        line-height: 60px;
        margin-bottom: 0;
        text-align: center;
        color: aliceblue;
    }
</style>

<body>

    <nav class="navbar  navbar-expand-lg fixed-top px-3 mb-3 d-flex justify-content-center">
        <div class="container-fluid">
            <a class="navbar-brand" href="#home">
                <img src="img/Wuzz-logos_white.png" style="max-width: 70px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul id="nav-pil" class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#layanan">Layanan Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kirim">Kirim Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#lacak">Lacak Resi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak Kami</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <nav class="navbar-expand-lg fixed-top px-3 mb-3 d-flex justify-content-center">
        <div id="navbarResponsive">

        </div>
    </nav>

    <section id="home">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/carousel1.jpg" class="d-block w-100 h-100" alt="">

                </div>
                <div class="carousel-item">
                    <img src="img/carousel2.jpg" class="d-block w-100 h-100" alt="">

                </div>
                <div class="carousel-item">
                    <img src="img/carousel3.jpg" class="d-block w-100 h-100" alt="">

                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section id="beranda" data-aos-duration="1000" data-aos="fade-up" style="margin-top: 10%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <center>
                        <h2>Layanan Kami <i class="icofont icofont-support"></i></h2>
                    </center>
                </div>
                <div class="col-lg-12 col-md-12 col-12">
                    <br>
                    <center>
                        <p>Klinik kami hadir dengan komitmen untuk memberikan pelayanan kesehatan berkualitas tinggi dan terjangkau kepada masyarakat. Di sini, kami menggabungkan keahlian medis dengan perhatian personal untuk memastikan setiap pasien mendapatkan perawatan yang holistik. Tim dokter kami, yang terdiri dari spesialis yang berpengalaman, siap memberikan layanan penuh perhatian yang disesuaikan dengan kebutuhan unik setiap individu.</p>
                    </center>
                </div>
                <div class="col-lg-12 col-md-12 col-12"><br><br></div>

                <div class="col-lg-3 col-md-6 col-12">
                    <center>
                        <div class="single-fun">
                            <i class="icofont icofont-home big-icon"></i>
                            <div class="content">
                                <span class="counter">0</span>
                                <p>Kamar Tersedia</p>
                            </div>
                        </div>
                    </center>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <center>
                        <div class="single-fun">
                            <i class="icofont icofont-user-alt-3 big-icon"></i>
                            <div class="content">
                                <span class="counter">0</span>
                                <p>Pasien saat ini</p>
                            </div>
                        </div>
                    </center>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <center>
                        <div class="single-fun">
                            <i class="icofont-stack-overflow big-icon"></i>
                            <div class="content">
                                <span class="counter">0</span>
                                <p>Jumlah Antrian</p>
                            </div>
                        </div>
                    </center>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <center>
                        <div class="single-fun">
                            <i class="icofont icofont-doctor-alt big-icon"></i>
                            <div class="content">
                                <span class="counter">0</span>
                                <p>Konsultasi</p>
                            </div>
                    </center>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-12"><br><br><br></div>
            <div class="col-lg-12 col-md-12 col-12">
                <center>
                    <em><b>"Kualitas pelayanan kesehatan tidak tergantung pada ukuran atau peralatan klinik, tetapi pada komitmen dan kepedulian para penyedia layanan kesehatan"</b> - Rasheed Ogunlaru</em>
                </center>
            </div>
        </div>
        </div>
    </section>
    <section id="dokter" data-aos-duration="1000" data-aos="zoom-in" style="margin-top: 10%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <center>
                        <h2>Dokter Kami <i class="icofont icofont-doctor-alt"></i></h2>
                    </center>
                </div>
                <div class="col-lg-12 col-md-12 col-12">
                    <br>
                    <center>
                        <p>Kami bangga memiliki tim dokter yang sangat kompeten dan berpengalaman di Klinik kami. Setiap anggota tim adalah profesional medis terlatih yang peduli dan berkomitmen untuk memberikan perawatan kesehatan terbaik kepada setiap pasien. Dengan keahlian mendalam dalam bidang masing-masing, dokter-dokter kami membawa pengetahuan yang luas dan pengalaman yang berharga ke dalam setiap diagnosis dan perawatan.</p>
                    </center>
                </div>
                <div class="col-lg-12 col-md-12 col-12"><br><br></div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="text-center">
                        <img src="img/bang_daffa.jpg" class="img-fluid rounded-circle" style="width: 150px; height: 150px;">
                        <h4>Daffa Agung</h4>
                        <em>Dokter Gigi</em>
                        <p>2358485489110</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="text-center">
                        <img src="img/bang_indra.png" class="img-fluid rounded-circle" style="width: 150px; height: 150px;">
                        <h4>Indra Purnama Sidiq</h4>
                        <em>Dokter Spesialis Anak</em>
                        <p>366369124890</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="text-center">
                        <img src="img/maeru.jpg" class="img-fluid rounded-circle" style="width: 150px; height: 150px;">
                        <h4>Maeru Bagas Trisoko</h4>
                        <em>Dokter Umum</em>
                        <p>173291114890</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="text-center">
                        <img src="img/bang_sultan.jpg" class="img-fluid rounded-circle" style="width: 150px; height: 150px;">
                        <h4>Sultan Khairiza</h4>
                        <em>Dokter THT</em>
                        <p>4813818485</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="antrian" data-aos-duration="1000" data-aos="fade-up" style="margin-top: 10%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <center>
                        <h2>Antrian saat ini <i class="icofont icofont-stack-overflow"></i></h2>
                    </center>
                    <br>
                </div>
                <div class="col-lg-12 col-md-12 col-12">
                    <table id="antrian_table" class="display">
                        <thead>
                            <tr>
                                <th>Nomor Antrian</th>
                                <th>Nama</th>
                                <th>Poli Klinik</th>
                                <th>Keluhan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>001</td>
                                <td>Harits Liyanto</td>
                                <td>Gigi</td>
                                <td>Gigi berlubang</td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>M Ragil Pratama</td>
                                <td>Poli Gigi</td>
                                <td>Ngilu pada saraf gigi</td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>Affan Yusuf Fadillah</td>
                                <td>Poli THT</td>
                                <td>Radang Tenggorokan</td>
                            </tr>
                            <tr>
                                <td>004</td>
                                <td>Kevin Adi Sanjaya</td>
                                <td>Spesialis Anak</td>
                                <td>Diare</td>
                            </tr>
                            <tr>
                                <td>005</td>
                                <td>Winona Phoebe Putri Nugroho</td>
                                <td>Spesialis Anak</td>
                                <td>Demam dan Batuk</td>
                            </tr>
                            <tr>
                                <td>006</td>
                                <td>M. Rofika Al Zikri</td>
                                <td>Poli Umum</td>
                                <td>Sakit Kepala</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <section id="berobat" data-aos-duration="1000" data-aos="fade-up" style="margin-top: 10%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                </div>
                <div class="card p-3">
                    <center>
                        <h2>Pendaftaran Berobat <i class="icofont icofont-list"></i></h2>
                    </center>
                    <br>
                    <form id="antrian_form">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="poliklinik" class="form-label">Poliklinik</label>
                            <input type="text" class="form-control" id="poliklinik" name="poliklinik" required>
                        </div>
                        <div class="mb-3">
                            <label for="keluhan" class="form-label">Keluhan</label>
                            <input type="text" class="form-control" id="keluhan" name="keluhan" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Daftar <i class="icofont icofont-list"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="kontak" data-aos-duration="1000" data-aos="zoom-in" style="margin-top: 10%;">
        <div class="container mt-5">
            <center>
                <h2>Kontak Kami</h2>
            </center>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <label for="inputName" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Masukkan nama Anda">
                        </div>
                        <div class="mb-3">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Masukkan alamat email Anda">
                        </div>
                        <div class="mb-3">
                            <label for="inputMessage" class="form-label">Pesan</label>
                            <textarea class="form-control" id="inputMessage" rows="5" placeholder="Tulis pesan Anda"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" onclick="alert('Pesan berhasil dikirim!')">Kirim Pesan</button>
                    </form>
                    <br><br>
                </div>
                <div class="col-md-6">
                    <p>Silakan hubungi kami melalui informasi kontak berikut:</p>
                    <ul>
                        <li>Email: kliniksukasehat@gmail.com</li>
                        <li>Telepon: +62 898 2818 631</li>
                        <li>Alamat: Jl. Taman Malaka Utara 6, Jakarta Timur 26551</li>
                    </ul>
                    <div id="map" style="height: 300px; border: 1px solid #ccc;"></div>
                </div>
            </div>
        </div>
    </section>
    </div>
    <div class="footer">
        <center>
            <p>&copy; 2023 Klinik Suka Sehat. All rights reserved.</p>
        </center>
    </div>
</body>

<script>
    window.onscroll = function() {

        var nav = document.getElementById('nav-pil');
        if (window.scrollY > 50) {

            nav.classList.add('nav-pills');
        } else {

            nav.classList.remove('nav-pills');
        }
    };
</script>
<script>
    const menuItems = document.querySelectorAll('#nav-pil .nav-link');

    window.addEventListener('scroll', () => {
        let fromTop = window.scrollY;
        menuItems.forEach((item) => {
            const section = document.querySelector(item.getAttribute('href'));
            if (
                section.offsetTop <= fromTop &&
                section.offsetTop + section.offsetHeight > fromTop
            ) {
                menuItems.forEach((item) => item.classList.remove('active'));
                item.classList.add('active');
            }
        });
    });
</script>
<script>
    let countersStarted = false;

    function startCounters() {
        if (!countersStarted) {
            const counters = document.querySelectorAll('.counter');

            counters.forEach(counter => {
                const updateCount = () => {
                    const target = Math.floor(Math.random() * 100); // Random number between 0 and 1000
                    const count = +counter.innerText;

                    const inc = target / 1000000000000; // Speed of counting

                    if (count < target) {
                        counter.innerText = Math.ceil(count + inc);
                        setTimeout(updateCount, 10);
                    } else {
                        counter.innerText = target;
                    }
                };

                updateCount();
            });

            countersStarted = true;
        }
    }

    window.addEventListener('scroll', () => {
        const section = document.getElementById('layanan');
        const sectionPos = section.getBoundingClientRect().top;

        const windowHeight = window.innerHeight;

        if (sectionPos < windowHeight && !countersStarted) {
            startCounters();
        }
    });
</script>
<script>
    AOS.init();
</script>
<script>
    $(document).ready(function() {
        $('#antrian_table').DataTable();
    });
</script>
<script>
    $(document).ready(function() {
        $('#antrian_table').DataTable();

        let nomorAntrian = 7;

        $('#antrian_form').submit(function(e) {
            e.preventDefault();

            const nama = $('#nama').val();
            const poliklinik = $('#poliklinik').val();
            const keluhan = $('#keluhan').val();

            $('#antrian_table').DataTable().row.add([
                nomorAntrian.toString().padStart(3, '0'),
                nama,
                poliklinik,
                keluhan
            ]).draw(false);

            nomorAntrian++;
            $('#antrian_form')[0].reset();

            // Menampilkan alert
            alert('Atas Nama ' + nama + ' berhasil didaftarkan!, Silahkan cek nama anda di antrian');

            // Navigasi otomatis ke bagian #Antrian
            document.querySelector('#antrian').scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>

<script>
    // Inisialisasi peta dengan Leaflet
    var map = L.map('map').setView([-6.2293867, 106.929694], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var marker = L.marker([-6.2293867, 106.929694]).addTo(map);
    marker.bindPopup("<b>Lokasi Kami</b>").openPopup();
</script>

</html>