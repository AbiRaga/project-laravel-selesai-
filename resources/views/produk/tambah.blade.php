<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Admin - Tambah Produk</title>
</head>
<body>

    @include('template.nav')

    <div class="container mt-5">
        <form action="{{ route('admin.tambahproduk') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h3 class="text-center">Silahkan Isi Data produk</h3>
            <hr>
            <div class="mb-3">
                <label class="form-label">Nama Produk</label>
                <input type="text" class="form-control" required name="name">
            </div>
            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="number" class="form-control" required name="harga">
            </div>
            <div class="mb-3">
                <label class="form-label">Foto</label>
                <br>
                <input type="file" name="foto" accept="image/*"  required class="btn btn-outline-dark">
            </div>
            <div class="mb-3">
                <label class="form-label">Kategori</label>
                <select name="kategori_id" class="form-control">
                    @foreach ($kategori as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-dark">Kirim</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>