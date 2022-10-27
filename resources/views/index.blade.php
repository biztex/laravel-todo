<!DOCTYPE html>
<html>
<head>
    <title>Laravel IPv6 Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    {{ $error }} <br>
                @endforeach
            </div>
        @endif
        <form action="{{ route('validate.ip') }}" method="post">
            @csrf
            <div class="mb-3">
                <label>IP Address</label>
                <input type="text" class="form-control" name="ip_address">
            </div>
            <div>
                <button class="btn btn-danger">Send</button>
            </div>
        </form>
    </div>
</body>
</html>