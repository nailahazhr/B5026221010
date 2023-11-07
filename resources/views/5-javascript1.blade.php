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
    <script>
        function changeText() {
            //document.getElementById: return DOM objek dengan memberikan "id"
            var span = document.getElementById("output");
            var textbox = document.getElementById("textbox");
            textbox.style.color = "red"; //mengganti warna dari fungsi tersebut saja
            textbox.style.fontSize = "12pt";
            textbox.style.fontFamily = "Comic Sans MS";
            span.className = "text-success"; //mengganti warna untuk 1 class (seluruhnya)
            span.innerHTML = "Sistem Informasi"; //mengganti kata yang terdapat diantara <> dan </>
            span.innerHTML = textbox.value; //otomatisasi "replace me" menyesuaikan kata yang terketik di textbox
            hadiah();
        }
    </script>

    <link rel="stylesheet" href="mystyle.css">
</head>

<body>
    <div class="container-fluid">
        <script>
            function hadiah() {
                alert("Selamat, Anda mendapatkan 1 miliar!");
            }
        </script>
        <center>
            <button class="btn btn-primary mt-3" onclick="hadiah()">Klik Disini!</button>
        </center>
        <br>
        <button class="btn btn-success mr-3 mb-3" onclick="changeText();">Click me!</button>
        <!-- hasil dari penggunaan element document.getElementById-->
        <span id="output" class="text-dark">replace me</span>
        <input id="textbox" type="text" class="form-control mr-3 mb-3" />
    </div>
</body>

</html>
