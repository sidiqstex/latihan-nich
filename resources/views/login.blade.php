<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$judul}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    halaman Login {{ session('user_email') }}

    <form action="{{ route('login.proccess') }}" method="POST"  enctype="multipart/form-data">
        @csrf
        <div class="d-flex flex-column gap-2">
            <div class="mb-3">
                @error('email')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <label for="email" class="form-label">email</label>
                <input type="text"  class="form-control @error('email') is-invalid
                    
                @enderror" name="email" placeholder="email">
            </div>
            <div class="mb-3">
                @error('password')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <label for="password" class="form-label">password</label>
                <input type="password" class="form-control @error('password') is-invalid
                    
                @enderror" name="password" placeholder="password">
            </div>
            <button type="submit">Submit</button>

        </div>
    </form>
</body>

</html>