<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$judul}}</title>
</head>

<body>
    halaman article
    @foreach ($articles as $item )
        <h1>{{$item->title}}</h1>
        <h6>Category : {{ $item->articleCategories->title }}</h6>
        <p>{{$item->description}}</p>
    @endforeach
</body>

</html>