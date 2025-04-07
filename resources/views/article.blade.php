<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$judul}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    halaman article

    <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="thumbnail" >
        {{-- <input type="text" name="description" placeholder="description"> --}}
        <button type="submit">Submit</button>
    </form>
</body>

</html>