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

    <form action="{{ route('article.store') }}" method="POST"  enctype="multipart/form-data">
        @csrf
        <div class="d-flex flex-column gap-2">
            <div class="mb-3">
                @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <label for="title" class="form-label">Title</label>
                <input type="text"  class="form-control @error('title') is-invalid
                    
                @enderror" name="title" placeholder="title">
            </div>
            <div class="mb-3">
                @error('description')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control @error('description') is-invalid
                    
                @enderror" name="description" placeholder="description">
            </div>
            <button type="submit">Submit</button>

        </div>
    </form>
</body>

</html>