<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kedai Sembako</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand" href="/">Kedai Sembako KDKMP</a>
        <div>
            <a href="/" class="btn btn-light">Home</a>
            <a href="/produk" class="btn btn-light">Produk</a>
        </div>
    </div>
</nav>
<div class="container mt-4">
    @yield('content')
</div>
<p class=" text-black text-center p-3 mt-5">Koperasi Desa/Kelurahan Merah Putih (KDKMP) adalah sebuah program strategis nasional yang diinisiasi oleh pemerintah untuk memperkuat ekonomi kerakyatan, menjaga stabilitas daya beli masyarakat, serta membangun ketahanan pangan dan kesehatan langsung dari tingkat desa atau kelurahan.</p>
<div style="text-align: center;"> 
<a href="/produk" class="btn btn-success" >Belanja</a>
</div>
<footer class="bg-dark text-white text-center p-3 mt-5">
    © 2026 ANTONIE GUSTIAWAN
</footer>

</body>
</html>