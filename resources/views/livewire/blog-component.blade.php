<div>
    <form wire:submit.prevent="store">
        <div class="form-group">
            <label for="blog_title" class="mb-2"><strong>Blog Title</strong></label>
            <div class="col-md-12 mb-3">
                <input wire:model="blog_title" type="text"
                    class="form-control @error('blog_title') is-invalid @enderror" autofocus>
                @error('blog_title')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-md-12">
            <div class="d-grid">
                <button type="submit" class="btn btn-dark">
                    Create Blog
                </button>
            </div>
        </div>
    </form>
    <table class="table mt-5">
        <thead>
            <tr>
                <th>Blog Title</th>
                <th>Slug</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
                <tr>
                    <td>{{ $blog->blog_title }}</td>
                    <td>{{ $blog->slug }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
