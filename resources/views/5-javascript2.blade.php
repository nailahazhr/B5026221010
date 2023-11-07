<!DOCTYPE html>
<html lang="en">

<head>
    <title>Javascript</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="5-assets/myscript.js"></script>
    <link rel="stylesheet" href="mystyle.css">
</head>

<body>
    <div class="container-fluid">
        <div class="form-group w-25 mt-3">
            <label for="bil1">Bilangan 1:</label>
            <input type="number" class="form-control" id="bil1">
        </div>
        <div class="form-group w-25 mt-3">
            <label for="bil2">Bilangan 2:</label>
            <input type="number" class="form-control" id="bil2">
        </div>
        <h3> Hasil Operasi: <div id="hasil"></div>
        </h3>
        <br>
        <input type="button" value="Penjumlahan" class="btn btn-success" onclick="tambah()">
        <input type="button" value="Perkalian" class="btn btn-warning" onclick="kali()">
    </div>
</body>

</html>
