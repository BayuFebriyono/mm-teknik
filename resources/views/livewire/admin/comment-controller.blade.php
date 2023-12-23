<div>
    <button wire:click="addData" class="btn btn-primary mb-4"><i class="fa-solid fa-circle-plus"></i> &nbsp;Tambahkan Data</button>
    {{-- Form Tambah --}}
    @if ($isAddData)
        <div class="card mb-5">
            <div class="card-header">
                <h5 class="card-title mb-0">Form Tambah Data</h5>
            </div>
            <div class="card-body">
                <form wire:submit="store">
                    <div class="row">
                        <div class="mb-1 col-md-6">
                            <div class="">
                                <label for="Name" class="form-label">Name</label>
                            </div>
                            <div class="">
                                <input type="text" id="Name" class="form-control" wire:model="name" required>
                            </div>
                        </div>
                        <div class="mb-1 col-md-6">
                            <div class="">
                                <label for="Photo" class="form-label">Photo</label>
                            </div>
                            <div class="">
                                <input type="file" id="Photo" class="form-control" wire:model="photo" required>
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


    <div class="card mb-5">
        <div class="card-header">
            <h5 class="card-title mb-0">Data Review</h5>
        </div>
        <div class="card-body">
            <table class="table table-striped table-secondary">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Bintang</th>
                        <th scope="col">Comment</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comments as $comment)
                        <tr wire:key="{{ $comment->id }}">
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $comment->name }}</td>
                            <td>{{ $comment->photo }}</td>
                            <td>{{ $comment->star }}</td>
                            <td>{{ $comment->comment }}</td>
                            <td><span role="button" class="btn btn-warning" wire:click="edit('{{ $comment->id }}')"><i
                                        class="fa-solid fa-pen-to-square"></i></span>
                                <span role="button" class="btn btn-danger"
                                    wire:click="delete('{{ $comment->id }}')"><i
                                        class="fa-solid fa-trash-can"></i></span>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
