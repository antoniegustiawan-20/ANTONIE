<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kedai Sembako</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <header>
        <div style="background-color: green; color: white; padding: 20px;">
        <div class="container">
            <h1 class text-center >Kedai Sembako KDKMP</h1>

            <nav class="navbar navbar-expand-lg navbar-dark bg-success">
                <ul>
                    <a href="/" class="btn btn-light text-center"  >Home</a>
                </ul>
            </nav>
        </div>
        </div>
    </header>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Gambar 3x2</title>
    <style>
        /* Wadah utama galeri */
        .galeri-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* Membuat 3 kolom sama besar */
            gap: 20px;                             /* Jarak antar kotak gambar */
            max-width: 1000px;                     /* Lebar maksimal galeri */
            margin: 0 auto;                        /* Membuat galeri berada di tengah halaman */
            padding: 20px;
        }

        /* Kotak untuk setiap gambar dan judul */
        .item-galeri {
            text-align: center;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px;
        }

        /* Mengatur ukuran gambar agar responsif */
        .item-galeri img {
            width: 100%;
            height: 200px;         /* Mengunci tinggi gambar agar seragam */
            object-fit: cover;     /* Memotong gambar secara proporsional agar tidak gepeng */
            border-radius: 4px;
        }

        /* Mengatur teks judul gambar */
        .item-galeri figcaption {
            margin-top: 10px;
            font-weight: bold;
            font-family: sans-serif;
        }

        /* Desain Tombol Pesan */
        .tombol-pesan {
            background-color: #2ea44f; /* Hijau */
            color: white;
            padding: 10px 15px;
            font-size: 14px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.2s;
            width: 100%; /* Tombol melebar penuh mengikuti kotak */
        }

        .tombol-pesan:hover {
            background-color: #22863a; /* Hijau lebih tua saat disentuh kursor */
        }

        /* Desain Kotak Pemberitahuan Berhasil (Tepat di Tengah Layar) */
.notifikasi-sukses {
    display: none;        /* Tetap tersembunyi di awal */
    position: fixed;      /* Membuatnya melayang di atas konten lain */
    
    /* Rumus rahasia agar posisi tepat di tengah layar */
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    
    background-color: #d4edda; /* Warna hijau muda lembut */
    color: #155724;           /* Teks hijau tua */
    border: 1px solid #c3e6cb;
    padding: 20px 40px;       /* Ukuran kotak dibuat lebih lebar sedikit */
    border-radius: 8px;
    font-family: sans-serif;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2); /* Bayangan lebih tebal agar dramatis */
    z-index: 1000;            /* Memastikan kotak berada di lapisan paling depan */
    text-align: center;
}
        
    </style>
</head>
<body>

    <!-- Wadah utama menggunakan tag <div> -->
    <div class="galeri-container">

        <!-- Gambar 1 -->
        <figure class="item-galeri">
            <img src="https://order.lottemart.co.id/_next/image?url=https%3A%2F%2Fcoreimages.lottemart.co.id%2Ford%2F06%2F1092483000&w=1920&q=75" alt="Deskripsi Gambar 1">
            <figcaption>BERAS 5KG</figcaption>
            <button class="tombol-pesan" onclick="tampilkanNotifikasi()">Pesan Sekarang</button>
        </figure>

        <!-- Gambar 2 -->
        <figure class="item-galeri">
            <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//98/MTA-3387734/sania_sania-refill-1-ltr-minyak-goreng------------------_full02.jpg" alt="Deskripsi Gambar 2">
            <figcaption>MINYAK GORENG 1L</figcaption>
            <button class="tombol-pesan" onclick="tampilkanNotifikasi()">Pesan Sekarang</button>
        </figure>

        <!-- Gambar 3 -->
        <figure class="item-galeri">
            <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full/catalog-image/MTA-21846462/gulaku_gulaku_gula_premium_1kg_pak_full01_fyai2vou.jpg" alt="Deskripsi Gambar 3">
            <figcaption>GULA PASIR 1KG</figcaption>
            <button class="tombol-pesan" onclick="tampilkanNotifikasi()">Pesan Sekarang</button>
        </figure>

        <!-- Gambar 4 -->
        <figure class="item-galeri">
            <img src="https://statics-yogyaonline.yogyagroup.com/images/resize/supermarket/output/XXL/00910019.jpg" alt="Deskripsi Gambar 4">
            <figcaption>TELUR 1KG</figcaption>
            <button class="tombol-pesan" onclick="tampilkanNotifikasi()">Pesan Sekarang</button>
        </figure>

        <!-- Gambar 5 -->
        <figure class="item-galeri">
            <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//catalog-image/91/MTA-129125512/brd-44261_frisian-flag-susu-kental-manis-putih-370gr-frisian-flag-susu-kental-manis-kaleng_full01-43468623.jpg" alt="Deskripsi Gambar 5">
            <figcaption>SUSU 1 KALENG</figcaption>
            <button class="tombol-pesan" onclick="tampilkanNotifikasi()">Pesan Sekarang</button>
        </figure>

        <!-- Gambar 6 -->
        <figure class="item-galeri">
            <img src="https://c.alfagift.id/product/1/1_A28090001915_20220829102607550_base.jpg" alt="Deskripsi Gambar 6">
            <figcaption>TERIGU 1KG</figcaption>
            <button class="tombol-pesan" onclick="tampilkanNotifikasi()">Pesan Sekarang</button>
        </figure>

    </div>
      <!-- Elemen Kotak Pemberitahuan (Cukup buat 1 saja untuk semua tombol) -->
    <div id="kotakNotif" class="notifikasi-sukses">
        <strong>Berhasil!</strong> Pemesanan Anda sedang diproses.
    </div>
    <!-- Script JavaScript untuk memunculkan notifikasi -->
    <script>
        function tampilkanNotifikasi() {
            var notif = document.getElementById("kotakNotif");
            notif.style.display = "block";

            // Menghilang otomatis setelah 3 detik
            setTimeout(function() {
                notif.style.display = "none";
            }, 3000);
        }
    </script>


</body>
   
<footer class="bg-dark text-white text-center p-3 mt-5">
        <p>© 2026 ANTONIE GUSTIAWAN</p>
</footer>

</body>
</html>