<div>
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="p-5 bg-light rounded">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="text-center mx-auto" style="max-width: 700px;">
                            <h1 class="text-dark">{{ $article->title }}</h1>
                            <img src="{{ asset('uploads/' . $article->photo) }}" alt="Gambar" class="img-fluid my-5 rounded">
                            <p class="mb-4" style="text-align: justify;">{!! $article->content !!}</p>
                            <a wire:navigate href="/" class="btn btn-info text-white">Back To Main Menu</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
