<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    @include('template.nav')

    <div class="Container mt-5">
        <h5>Summary</h5>
        <hr>

        @foreach($detailtransaksi as $item)
        <div class="card mt-3">
            <div class="row">

                <div class="col-2 p-4">
                    <img src="{{ asset($item->produk->foto) }}" class="img-thumbnail">
                </div>

                <div class="col-10">
                    <div class="card-body">
                        <h3 class="card-title">{{ $item->produk->name }}</h3>
                        <h5 class="card-title">Invoice: {{ $item->transaksi->kode }}</h5>
                        <hr>
                        <p class="card-text">Harga Rp.{{ number_format($item->produk->harga, 0,',','.') }}</p>
                        <p class="card-text">Banyak : {{ $item->qty }}</p>
                        <hr>
                        <p class="card-text">Total Rp.{{ number_format($item->totalharga,0,',','.') }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>