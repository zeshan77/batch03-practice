<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Create post</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" crossorigin="anonymous">

    </head>
    <body>

    <div class="container mt-5">

        <h3>Create new post</h3>
        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul class="ldist-group">
                    @foreach($errors->all() as $error)
                        <li class="list-group-itemd">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/posts" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label><br/>
                <input type="text" name="title" value="{{ old('title') }}">
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="description">Type post description</label><br/>
                <textarea name="description" id="description">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>
</html>
