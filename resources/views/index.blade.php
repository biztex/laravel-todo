<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Integrate Exists Validation in Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <form action="{{ route('validate.exists') }}" method="post">
            @csrf
            <div class="form-group">
                <input class="form-control" name="title" value="{{ old('title') }}">

                @if ($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
            </div>
            <div class="d-grid mt-3">
                <button class="btn btn-dark">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
