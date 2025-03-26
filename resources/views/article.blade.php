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
    @foreach ($articles as $item )
        <h1>{{$item->title}}</h1>
        <h6>Category : {{ $item->articleCategories->title }}</h6>
        <p>{{$item->description}}</p>
    @endforeach
    {{ $articles->links('pagination::bootstrap-5') }}
</body>

</html>