<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Registrasi</title>
</head>
<body>
    
    @include('template.nav')

    <div class="container mt-5">
        <form action="{{ route('postregistrasi') }}" method="POST">
            @csrf
            <h3 class="text-center">Silahkan Isi Data Customer</h3>
            <hr>
            <div class="mb-3">
                <label class="form-label">Nama Customer</label>
                <input type="text" class="form-control" required name="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" required name="email">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" required name="password">
            </div>
            <button type="submit" class="btn btn-dark">Kirim</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>