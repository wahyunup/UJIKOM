<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
</head>
<body>
    <div class="border p-3">
        <h1>form pemesanan makanan</h1>
        <div class="d-flex">
            <div>
                <strong>Nama makanan</strong>
                <p>Nasi goreng</p>
                <p>Ayam Goreng</p>
                <p>Es Teh</p>
                <p>Kopi</p>
            </div>
            <div>
                <strong>Harga</strong>
                <p>Rp.10.000</p>
                <p>Rp.12.000</p>
                <p>Rp.2.000</p>
                <p>Rp.3.000</p>
            </div>

            <div>
                <strong>Jumlah</strong>
                <div>
                    <label for="nasigoreng">
                    <input name="nasigoreng" type="text">
                </div>
                <div>
                    <label for="ayamgoreng">
                    <input name="ayamgoreng" type="text">
                </div>
                <div>
                    <label for="esteh">
                    <input name="esteh" type="text">
                </div>
                <div>
                    <label for="kopi">
                    <input name="kopi" type="text">
                </div>
            </div>
        </div>
        <button>hitung total</button>
    </div>
<?php 
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>