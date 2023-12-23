<div>
    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="testimonial-header text-center">
                <h4 class="text-primary">Apa Kata Mereka?</h4>
                <h1 class="display-5 mb-5 text-dark">Berikut ulasan dari client kami!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                @foreach ($comments as $comment)
                    <div wire:key="{{ $comment->id }}" class="testimonial-item img-border-radius bg-light rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-secondary position-absolute"
                                style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary">
                                <p class="mb-0">{{ $comment->comment }}
                                </p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-secondary rounded">
                                    <img src="uploads/{{ $comment->photo }}" class="img-fluid rounded"
                                        style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="ms-4 d-block">
                                    <h4 class="text-dark">{{ $comment->name }}</h4>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <livewire:home.add-comment />
    </div>
</div>
