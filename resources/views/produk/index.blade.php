<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Admin - Produk</title>
</head>
<body>
    
    @include('template.nav')

    @if(Session::has('status'))
      <div><span style="color: rgb(128, 209, 52)">{{ Session::get('status') }}</span></div>
    @endif

    <div class="container mt-5">
        <a href="{{ route('admin.tampiltambahproduk') }}" class="btn btn-dark">Tambah</a>
        <table class="table table-responsive-sm mt-3">
            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produk as $item)
                <tr>
                    <td>
                        <img src="{{ asset($item->foto) }}" width="100" height="100">
                    </td>
                    <td>{{ $item->name }}</td>
                    <td>{{ number_format($item->harga,0,',','.') }}</td>
                    <td>
                        <a href="{{ route('admin.editproduk', $item->id) }}" class="btn btn-dark">Edit</a>
                        <a href="{{ route('admin.deleteproduk', $item->id) }}" class="btn btn-danger" onclick="return confirm('yakin ingin dihapus?')">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $produk->render() }}
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>