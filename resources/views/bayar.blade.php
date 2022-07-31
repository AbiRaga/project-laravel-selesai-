<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Pembayaran</title>
</head>
<body>

    @include('template.nav')

    <form action="{{ route('pelanggan.prosesbayar', $detailtransaksi->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container mt-5">
        <h5>Upload Bukti Pembayaran</h5>
        <hr>
        <div class="row">

            <div class="col-4">
                <div class="card">
                    <img src="{{ asset($produk->foto) }}" class="card-img-top">
                </div>
            </div>

            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{$produk->name }}</h3>
                        <hr>
                        <p class="card-text">Rp.{{ number_format($produk->harga,0,',','.') }}</p>
                        <p class="card-text">Rp.{{ number_format($detailtransaksi->totalharga,0,',','.') }}</p>
                        <p class="card-text">Banyak : {{$detailtransaksi->qty}}</p>
                        <hr>
                        <div class="mb-2">
                            <label class="form-control"><b>Bukti Pembayaran</b></label>
                            <input type="file" name="bukti_transaksi" accept="image/*" required>
                        </div>
                        <hr>
                        <h5>Keterangan</h5>
                        <p>Silahkan lakukan transfer ke bank berikut dan tunggu konfirmasi dari kami</p>
                        <button class="btn btn-dark">Upload</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    </form>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>