<div>
    <div class="container-fluid fruite py-5">
        <div class="container py-5">
            <div class="tab-class text-center">
                <div class="row g-4">
                    <div class="col-lg-4 text-start">
                        <h1>Produk Kami</h1>
                    </div>
                    <div class="col-lg-8 text-end">
                        <ul class="nav nav-pills d-inline-flex text-center mb-5">
                            <li class="nav-item">
                                <a wire:click="selectCategory" role="button"
                                    class="d-flex py-2 m-2 bg-light rounded-pill {{ is_null($categoryId) ? 'active' : '' }}">
                                    <span class="text-dark" style="width: 130px;">All Produk</span>
                                </a>
                            </li>
                            @foreach ($categories as $category)
                                <li class="nav-item" wire:key="{{ $category->id }}">
                                    <a wire:click="selectCategory('{{ $category->id }}')" role="button"
                                        class="d-flex py-2 m-2 bg-light rounded-pill {{ $category->id == $categoryId ? 'active' : '' }}">
                                        <span class="text-dark" style="width: 130px;">{{ $category->kategori }}</span>
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    @foreach ($products as $product)
                                        <div class="col-md-6 col-lg-4 col-xl-3" wire:key="{{ $product->id }}">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="{{ asset('uploads/' . $product->url_photo) }}"
                                                        class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                                    style="top: 10px; left: 10px;">{{ $product->category->kategori }}
                                                </div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>{{ $product->product }}</h4>
                                                    <p>{{ $product->deskripsi }}</p>
                                                    @if ($product->show_price)
                                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                                            <p class="text-dark fs-5 fw-bold mb-0">
                                                                {{ formatRupiah($product->price) }}</p>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
