<?php
// Tentukan halaman aktif berdasarkan query string
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <img src="1.jpg" alt="Foto Profil" class="profile-photo">
            <h1>Nur Malika Adelia</h1>
            <p>Web Developer | Programmer | Desainer</p>
            <nav>
                <ul>
                    <li><a href="index.php?page=home" <?= $page == 'home' ? 'class="active"' : '' ?>>Beranda</a></li>
                    <li><a href="index.php?page=projects" <?= $page == 'projects' ? 'class="active"' : '' ?>>Proyek</a></li>
                    <li><a href="index.php?page=contact" <?= $page == 'contact' ? 'class="active"' : '' ?>>Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <?php
        // Konten halaman dinamis
        if ($page == 'home') {
            ?>
            <section class="about">
                <h2>Tentang Saya</h2>
                <p>Halo! Saya Nur Malika Adelia, seorang siswa SMK Wikrama jurusan PPLG (Pengembangan Perangkat Lunak dan Gim). Saya memiliki keahlian dalam pengembangan front-end dan back-end, dengan pengalaman menggunakan teknologi seperti HTML, CSS, JavaScript, dan framework Laravel.

Saya selalu berusaha memberikan solusi inovatif dalam setiap proyek yang saya kerjakan, dengan fokus pada desain yang responsif dan fungsionalitas yang optimal. Saya juga tertarik untuk terus belajar dan mengembangkan keterampilan dalam dunia pemrograman untuk menghadirkan hasil terbaik.</p>
                <h2>Pendidikan</h2>
                <p>SMK Wikrama Bogor (Jurusan PPLG – Pengembangan Perangkat Lunak dan Gim) 2023-2026

                <h2>Keahlian</h2>
                <p>-Front-End Development: HTML, CSS, JavaScript</p>
                <p>-Back-End Development: PHP, MySQL, Laravel</p>
                <p>-Desain: Adobe Photoshop, Figma</p>
                <p>-Teknologi Lainnya: Git, RESTful API</p>

                <h2>Bahasa</h2>
                <p>-Bahasa Indonesia (Lancar)</p>
                <p>-Bahasa Inggris (Menengah)</p>

                <h2>Sertifikat</h2>
                <p>-Belajar Unity untuk Pemula - Dicoding (2024)</p>
                <p>-Dasar-Dasar Pemrograman dengan Unity - Dicoding (2023)</p>
                <p>-Sertifikasi Microsoft Office Specialist (MOS) - Microsoft (2024)</p>
            </section>
            <?php
        } elseif ($page == 'projects') {
            ?>
            <section class="projects">
                <h2>Proyek Saya</h2>
                <div class="project-card">
                    <img src="portofolio3.png" alt="Proyek 1">
                    <h3>Proyek 1</h3>
                    <p>Rental Motor: Aplikasi untuk mengelola penyewaan motor, termasuk pemesanan, manajemen data motor, dan laporan transaksi.</p>
                    <a href="https://github.com/Nurmalikaadelia79/rentalmotor.git" target="_blank">Tautan GitHub</a>
                </div>
                <div class="project-card">
                    <img src="portofolio2.png" alt="Proyek 1">
                    <h3>Proyek 2</h3>
                    <p>Kasir: Sistem pencatatan transaksi ritel, manajemen stok barang, dan laporan penjualan.</p>
                    <a href="https://github.com/Nurmalikaadelia79/kasir.git" target="_blank">Tautan GitHub</a>
                </div>
                <div class="project-card">
                    <img src="portofolio4.png" alt="Proyek 1">
                    <h3>Proyek 3</h3>
                    <p>Hitung Bunga Tunggal: Kalkulator sederhana untuk menghitung bunga tunggal dan total pembayaran.</p>
                    <a href="https://github.com/Nurmalikaadelia79/project-mtk-.git" target="_blank">Tautan GitHub</a>
                </div>
                <div class="project-card">
                    <img src="portofolio5.jpg" alt="Proyek 1">
                    <h3>Proyek 4</h3>
                    <p>Apotek: Aplikasi manajemen apotek untuk inventori obat, transaksi penjualan, dan laporan stok.</p>
                    <a href="https://github.com/Nurmalikaadelia79/appotek.git" target="_blank">Tautan GitHub</a>
                </div>
                <div class="project-card">
                    <img src="portofolio6.png" alt="Proyek 1">
                    <h3>Proyek 5</h3>
                    <p>Data Siswa: Sistem untuk mengelola data siswa, nilai, dan laporan akademik sekolah.</p>
                    <a href="https://github.com/Nurmalikaadelia79/Data-Siswa-.git" target="_blank">Tautan GitHub</a>
                </div>
                <!-- Tambahkan lebih banyak proyek jika diperlukan -->
            </section>
            <?php
        } elseif ($page == 'contact') {
            ?>
         <section class="contact-info">
    <h2>Hubungi Saya</h2>
    <p>Anda dapat menghubungi saya melalui:</p>
    <ul>
        <li>Email: <a href="mailto:nurmalikaadelia79@gmail.com">nurmalikaadelia79@gmail.com</a></li>
        <li>WhatsApp: <a href="https://wa.me/6281804113951" target="_blank">+62 818-0411-3951</a></li>
        <li>LinkedIn: <a href="https://linkedin.com/in/nurmalikaadelia" target="_blank">linkedin.com/in/nurmalikaadelia</a></li>
        <li>GitHub: <a href="https://github.com/Nurmalikaadelia79" target="_blank">github.com/Nurmalikaadelia79</a></li>
        <li>Instagram: <a href="https://www.instagram.com/nurmalikaadelia79/" target="_blank">instagram.com/nurmalikaadelia79</a></li>
    </ul>
</section>

            <?php
        } else {
            ?>
            <section>
                <h2>404 - Halaman Tidak Ditemukan</h2>
                <p>Halaman yang Anda cari tidak ada.</p>
            </section>
            <?php
        }
        ?>
    </main>
</body>
</html>
<style>
/* Reset CSS */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body Styling */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f9;
    line-height: 1.6;
    margin: 0;
    color: #333;
}

/* Header Styling */
header {
    background: #333;
    color: #fff;
    padding: 20px 0;
    text-align: center;
}

.profile-photo {
    border-radius: 50%;
    width: 150px;
    height: 150px;
    object-fit: cover;
    margin-bottom: 10px;
}

header h1 {
    font-size: 2rem;
    margin: 10px 0;
}

header p {
    font-size: 1.2rem;
    margin-bottom: 20px;
}

/* Navigation Styling */
nav ul {
    list-style: none;
    padding: 0;
    display: flex;
    justify-content: center;
    gap: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 1rem;
    padding: 5px 10px;
    transition: all 0.3s ease;
}

nav ul li a.active,
nav ul li a:hover {
    font-weight: bold;
    text-decoration: underline;
}

/* Container */
.container {
    width: 80%;
    max-width: 1200px;
    margin: auto;
    overflow: hidden;
}

/* Main Section Styling */
main {
    padding: 20px 0;
}

.about, .projects, .contact-form, section {
    margin: 20px 0;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.about h2,
.projects h2,
.contact-form h2,
section h2 {
    font-size: 1.8rem;
    margin-bottom: 10px;
}

/* Project Card Styling */
.projects .project-card {
    display: inline-block;
    width: 100%;
    text-align: center;
    padding: 20px;
    margin: 10px 0;
    background: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.projects .project-card img {
    width: 100%;
    max-width: 300px;
    height: auto;
    border-radius: 5px;
    margin-bottom: 10px;
}

.projects .project-card h3 {
    font-size: 1.5rem;
    margin-bottom: 5px;
}

.projects .project-card a {
    color: #007bff;
    text-decoration: none;
}

.projects .project-card a:hover {
    text-decoration: underline;
}

/* Contact Info Section - New Styling */
.contact-info {
    padding: 30px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    text-align: center;
    font-size: 1.2rem;
}

.contact-info h2 {
    font-size: 2rem;
    margin-bottom: 20px;
    color: #333;
}

.contact-info p {
    font-size: 1rem;
    margin-bottom: 20px;
    color: #555;
}

.contact-info ul {
    list-style: none;
    padding: 0;
    text-align: left;
}

.contact-info ul li {
    margin-bottom: 15px;
}

.contact-info ul li a {
    color: #007bff;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease;
    font-size: 1.1rem;
}

.contact-info ul li a:hover {
    color: #0056b3;
    text-decoration: underline;
}

/* Media Queries for Responsiveness */
@media (max-width: 768px) {
    nav ul {
        flex-direction: column;
        gap: 15px;
    }

    .container {
        width: 90%;
    }

    .about {
        font-size: 1rem;
    }

    .projects {
        grid-template-columns: 1fr;
    }

    .contact-info {
        padding: 20px;
    }
}

@media (max-width: 480px) {
    header h1 {
        font-size: 1.8rem;
    }

    header p {
        font-size: 1rem;
    }

    .projects .project-card {
        padding: 15px;
    }

    .projects .project-card img {
        max-width: 250px;
    }
}

</style>