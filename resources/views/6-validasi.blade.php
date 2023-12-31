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
    <link rel="stylesheet" href="mystyle.css">
    <script>
        function validateForm() {
            var nrp = document.getElementById("nrp");
            var msg = document.getElementById("msg");

            //value harus terisi, jika tidak:
            if (nrp.value == "") {
                nrp.focus();
                nrp.placeholder = "contoh: 5026221010";
                alert("NRP harus diisi!");
                return false;
            }

            //value harus dalam number, jika tidak:
            if (isNaN(nrp.value) == true) { //true jika ada unsur abjad, false jika angka semua
                nrp.focus();
                msg.innerHTML = "NRP harus angka!"; //innerHTML mengubah tulisan di dalam tag
                return false;
            }

            //value harus 10 digit, jika tidak:
            if (nrp.value.length != 10) {
                nrp.focus();
                alert("NRP harus 10 digit, Anda memasukkan " + nrp.value.length + " digit.")
                return false;
            }


        }
    </script>
</head>

<body>
    <br>
    <div class="container">
        <div class="jumbotron">
            <!-- jumbotron is a big grey box for calling extra attention to some special content or information -->
            Form validasi adalah mencegah pengiriman data ke server jika ada yang invalid atau tidak sesuai constraint
            database.
        </div>
        <script>
            function validate() {
                console.log("baris 22");
                return false;
                //mulai dari sini ke bawah, akan di skip
                console.log("baris 24");
                return true;
                console.log("baris 26");
                return false;
            }
        </script>

        <!-- default return value always true. Sehingga bila value hanya sebuah body function, maka akan tetap diarahkan sesuai dengan actionnya -->
        <form action="https://google.com" method="get" onsubmit="return validateForm();">
            <div class="form-group mt-3">
                <label for="nrp">NRP:</label>
                <input type="text" class="form-control" id="nrp">
                <div id="msg" class="text-danger"></div>
            </div>
            <input type="submit" value="DAFTAR" class="btn btn-primary">
            <input type="reset" value="ULANGI" class="btn btn-danger">
        </form>
    </div>
</body>

</html>
