<html>
<head><title> Form Bandung With you </title></head>
<body>
    <form method="post" action="">
        <fieldset>
            <legend>Form Tambah Produk</legend>
            <p>
                <label for="">Nama produk</label>
                <input type="text" value="" name="nama_produk" />
            </p>
            <p>
                <label for="">Harga </label>
                <input type="number" value="" name="harga_produk" />
            </p>
            <p>
                <button type="submit">Save</button>
            </p>
        </fieldset>
    </form>
</body>
<?php
    if(isset($_POST["nama_produk"]))
    print_r($_POST);
?>
</html>