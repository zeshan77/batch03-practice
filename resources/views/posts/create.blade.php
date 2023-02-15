<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Create post</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </head>
    <body>

    <div class="container">

        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li style="color: red;">{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="/posts" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label><br/>
                <input type="text" name="abc" value="{{ old('title') }}">
                @error('abc')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>

            <p>
            <label for="description">Type post description</label><br/>
            <textarea name="description" id="description">{{ old('description') }}</textarea>
                @error('description')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </p>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
