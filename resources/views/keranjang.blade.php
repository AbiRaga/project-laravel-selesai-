<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Keranjang</title>
</head>
<body>

    @include('template.nav')


    <div class="container mt-5">
        <h5>Keranjang</h5>
                 @if(Session::has('status'))
                    <div><span style="color: rgb(10, 159, 185)">{{ Session::get('status') }}</span></div>
                @endif


    @foreach($detailtransaksi as $item)
    <div class="card mt-3">
        <div class="row">

            <div class="col-2 p-4">
                <img src="{{ asset($item->produk->foto) }}" class="img-thumbnail">
            </div>

            <div class="col-8">
                <div class="card-body">
                    <h3 class="card-title">{{ $item->produk->name }}</h3>
                    <hr>
                    <p class="card-text">Harga Rp.{{ number_format($item->produk->harga, 0,',','.') }}</p>
                    <input type="number" name="banyak" id="" class="form-control" value="{{ $item->qty }}" required>
                    <hr>
                    <p class="card-text">Total Rp.{{ number_format($item->totalharga,0,',','.') }}</p>
                </div>
            </div>

            <div class="col-2 p-5">
                <a href="{{ route('pelanggan.bayar',$item->id) }}" class="btn btn-dark">Bayar</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>