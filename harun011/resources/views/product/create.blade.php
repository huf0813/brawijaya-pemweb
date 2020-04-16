<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('product.store')}}" method="post">
    @csrf
    <input type="text" name="kodeProduct" placeholder="kode product">
    <br>
    <br>
    <input type="text" name="namaProduct" placeholder="nama product">
    <br>
    <br>
    <input type="number" name="stockProduct" placeholder="stock product">
    <br>
    <br>
    <input type="number" name="hargaProduct" placeholder="harga product">
    <br>
    <br>
    <button type="submit">Tambah Data</button>
</form>
</body>
</html>
