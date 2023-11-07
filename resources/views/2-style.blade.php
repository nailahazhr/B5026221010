<html>

<head>
    <link rel="stylesheet" href="2-assets/style1.css">

    <!-- div di seluruh halaman ini, diset menggunakan style di bawah-->
    <style>
        div {
            color: rgb(32, 32, 82);
        }

        .judulhalaman {
            text-align: center;
            font-weight: bold;
            font-size: large;
        }

        span,
        p,
        div {
            text-align: justify;
        }

        .subjudul {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <!-- refer dari style .judulhalaman-->
    <div class="judulhalaman"> Perbedaan div, span, dan p </div>

    <p class="subjudul">PARAGRAF</p>
    <p>p adalah paragraf. Digunakan spesifik ke 1 bagian saja. Secara default, p mengandung margin top dan bottom dengan
        maksimum width. Maka dari itu, antara 2 paragraf akan terdapat jarak. </p>

    <!-- Inline CSS, digunakan ketika ada spesifik ke 1 bagian (bagian itu) saja-->
    <p style="color:rgb(42, 165, 42);">Ini adalah paragraf kedua. Terdapat jarak antara paragraf.</p>

    <!-- Inpage CSS, digunakan ketika ada yang spesifik ke 1 halaman khusus-->
    <div class="subjudul">DIV</div>
    <div>div digunakan spesifik ke 1 halaman khusus. Secara default, div tidak mengandung margin namun dengan maksimum
        width.</div>
    <div style="color:rgb(42, 165, 42);">Ini adalah div kedua. Tidak terdapat jarak antara div 1 dan 2. Namun berada di
        line yang berbeda.</div>

    <br>

    <!-- External CSS, digunakan untuk format umum 1 website-->
    <span class="subjudul">SPAN</span>
    <br>
    <span>span digunakan untuk format umum 1 website. Secara default, span tidak mengandung margin, dan width
        disesuaikan dengan panjang kalimat didalamnya.</span>
    <span style="color: rgb(42, 165, 42);">Ini adalah span kedua. Tidak akan terdapat jarak di antara kedua span, span 2
        akan ditampilkan 1 line dengan span pertama.</span>
</body>

</html>
