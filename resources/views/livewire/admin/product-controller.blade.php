<div>
    <button wire:click="addData" class="btn btn-primary mb-4"><i class="fa-solid fa-circle-plus"></i> &nbsp;Tambahkan
        Data</button>



    {{-- Form Tambah --}}
    @if ($isAddData)
        <div wire:transition class="card mb-5">
            <div class="card-header">
                <h5 class="card-title mb-0">Form Tambah Data</h5>
            </div>
            <div class="card-body">
                <form wire:submit="store">
                    <div class="row">
                        <div class="mb-1 col-md-6">
                            <div class="">
                                <label for="kategori" class="form-label">Kategori</label>
                            </div>
                            <div class="">
                                <select id="kategori" class="form-select" wire:model="categoryId" required>
                                    <option value="null" disabled selected>--- Pilih Kategori ---</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" wire:key="{{ $category->id }}">
                                            {{ $category->kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-1 col-md-6">
                            <div class="">
                                <label for="Produk" class="form-label">Produk</label>
                            </div>
                            <div class="">
                                <input type="text" id="Produk" class="form-control" wire:model="product" required>
                            </div>
                        </div>
                        <div class="mb-1 col-md-6">
                            <div class="">
                                <label for="Price" class="form-label">Harga</label>
                            </div>
                            <div class="">
                                <input type="number" id="Price" class="form-control" wire:model="price" required>
                            </div>

                            <div class="form-check">
                                <input wire:model="showPrice" class="form-check-input" type="checkbox" value="1"
                                    id="showPrice" checked>
                                <label class="form-check-label" for="showPrice">
                                    Tampilkan Harga
                                </label>
                            </div>
                        </div>
                        <div class="mb-1 col-md-6">
                            <div class="">
                                <label for="Deskripsi" class="form-label">Deskripsi</label>
                            </div>
                            <div class="">
                                <textarea wire:model ="deskripsi" id="Deskripsi" rows="2" class="form-control" required></textarea>
                            </div>
                        </div>
                        <div class="mb-1 col-md-6">
                            <div class="">
                                <label for="Photo" class="form-label">Foto</label>
                            </div>
                            <div class="">
                                <input type="file" id="Photo" class="form-control" wire:model="urlPhoto"
                                    required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button wire:click="cancel" type="button" class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    @endif

    {{-- Form Edit --}}
    @if ($isEditData)
        <div wire:transition class="card mb-5">
            <div class="card-header">
                <h5 class="card-title mb-0">Form Edit Data</h5>
            </div>
            <div class="card-body">
                <form wire:submit="update">
                    <div class="row">
                        <div class="mb-1 col-md-6">
                            <div class="">
                                <label for="kategori" class="form-label">Kategori</label>
                            </div>
                            <div class="">
                                <select id="kategori" class="form-select" wire:model="categoryId" required>
                                    <option value="null" disabled selected>--- Pilih Kategori ---</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" wire:key="{{ $category->id }}">
                                            {{ $category->kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-1 col-md-6">
                            <div class="">
                                <label for="Produk" class="form-label">Produk</label>
                            </div>
                            <div class="">
                                <input type="text" id="Produk" class="form-control" wire:model="product" required>
                            </div>
                        </div>
                        <div class="mb-1 col-md-6">
                            <div class="">
                                <label for="Price" class="form-label">Harga</label>
                            </div>
                            <div class="">
                                <input type="number" id="Price" class="form-control" wire:model="price"
                                    required>
                            </div>
                            <div class="form-check">
                                <input wire:model="showPrice" class="form-check-input" type="checkbox" value="1"
                                    id="showPrice" checked>
                                <label class="form-check-label" for="showPrice">
                                    Tampilkan Harga
                                </label>
                            </div>
                        </div>
                        <div class="mb-1 col-md-6">
                            <div class="">
                                <label for="Deskripsi" class="form-label">Deskripsi</label>
                            </div>
                            <div class="">
                                <textarea wire:model ="deskripsi" id="Deskripsi" rows="2" class="form-control" required></textarea>
                            </div>
                        </div>
                        <div class="mb-1 col-md-6">
                            <div class="">
                                <label for="Photo" class="form-label">Foto</label>
                            </div>
                            <div class="">
                                <input type="file" id="Photo" class="form-control" wire:model="urlPhoto">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button wire:click="cancel" type="button" class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Data Produk</h5>
        </div>
        <div class="card-body">
            <input type="text" class="form-control mb-3" placeholder="Cari produk...." wire:model.live="search">
            <div class="table-responsive">
                <table class="table table-striped table-secondary">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Harga Tampil</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr wire:key="{{ $product->id }}">
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $product->product }}</td>
                                <td>{{ $product->category->kategori }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->show_price ? 'Ya' : 'Tidak' }}</td>
                                <td>{{ $product->deskripsi }}</td>
                                <td><img src="{{ asset('uploads/' . $product->url_photo) }}" style="height: 80px;"></td>
                                <td><span role="button" class="btn btn-warning"
                                        wire:click="edit('{{ $product->id }}')"><i
                                            class="fa-solid fa-pen-to-square"></i></span>
                                    <span role="button" class="btn btn-danger"
                                        wire:click="delete('{{ $product->id }}')"><i
                                            class="fa-solid fa-trash-can"></i></span>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            {{ $products->links() }}
        </div>
    </div>
</div>
