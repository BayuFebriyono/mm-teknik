<div>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                <h1 class="display-4">Article</h1>
                <p>Berikut Informasi Terbaru Dari Kami</p>
            </div>
            <div class="row g-4">
                @foreach ($articles as $article)
                    <div class="col-md-6 col-lg-6 col-xl-3" wire:key="{{ $article->id }}">
                        <div class="text-center">
                            <img src="uploads/{{ $article->photo }}" class="img-fluid rounded" alt="">
                            <div class="py-4">
                                <a href="#" class="h5">{{ $article->title }}</a>
                                <p>{{ substr($article->content, 0, 200) }}...</p>
                                <div>
                                    <a wire:navigate href="/show-article/{{ $article->id }}"
                                        class="btn border border-secondary rounded-pill px-3 text-primary">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
