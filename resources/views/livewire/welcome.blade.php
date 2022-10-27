<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Implement Slug in Laravel Livewire Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    @livewireStyles
</head>

<body>
    <div class="container mt-3">
        @if (session()->has('message'))
            <div class="alert alert-primay">
                {{ session('message') }}
            </div>
        @endif
        @livewire('blog-component')
    </div>
    @livewireScripts
</body>

</html>
