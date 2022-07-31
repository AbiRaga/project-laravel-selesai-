<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>

    @include('template.nav')

    <div class="container mt-5">
        <form action="{{ route('postLogin') }}" method="POST">
        @csrf
        <div class="mb3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" required name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword" required name="password">
                @if(Session::has('status'))
                    <div><span style="color: rgb(10, 159, 185)">{{ Session::get('status') }}</span></div>
                @endif
        </div>
        <button type="submit" class="btn btn-dark">Login</button>
        <a class="btn btn-success" href="{{ route('registrasi') }}">Belum Punya Akun?</a>
    </form>
    </div>

    <div class="fixed-bottom">
        @include('template.footer')
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>