<div>

    <h3 class="mb-2">Data Category</h3>
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
                        <div class="col-md-1">
                            <label for="kategori" class="form-label">Kategori</label>
                        </div>
                        <div class="col-md-5">
                            <input wire:model="kategori" txype="text" class="form-control" required>
                        </div>
                        <div class="col-md-1">
                            <label for="Deskripsi" class="form-label">Deskripsi</label>
                        </div>
                        <div class="col-md-5">
                            <textarea wire:model ="deskripsi" id="Deskripsi" rows="2" class="form-control" required></textarea>
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
                        <div class="col-md-1">
                            <label for="kategori" class="form-label">Kategori</label>
                        </div>
                        <div class="col-md-5">
                            <input wire:model="kategori" txype="text" class="form-control" required>
                        </div>
                        <div class="col-md-1">
                            <label for="Deskripsi" class="form-label">Deskripsi</label>
                        </div>
                        <div class="col-md-5">
                            <textarea wire:model ="deskripsi" id="Deskripsi" rows="2" class="form-control" required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button wire:click="cancel" type="button" class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    @endif


    <div class="card mb-5">
        <div class="card-header">
            <h5 class="card-title mb-0">...</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="myTable" class="table table-striped table-secondary">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Category</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr wire:key="{{ $category->id }}">
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $category->kategori }}</td>
                                <td>{{ $category->deskripsi }}</td>
                                <td><span role="button" class="btn btn-warning"
                                        wire:click="edit('{{ $category->id }}')"><i
                                            class="fa-solid fa-pen-to-square"></i></span>
                                    <span role="button" class="btn btn-danger"
                                        wire:click="delete('{{ $category->id }}')"><i
                                            class="fa-solid fa-trash-can"></i></span>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            {{ $categories->links() }}
        </div>
    </div>
</div>
