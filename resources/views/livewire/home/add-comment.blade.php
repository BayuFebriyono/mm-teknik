<div>
    <div wire:transition class="d-flex justify-content-center">
        <div class="card col-md-6">
            <div class="card-header">
                <h4>Tambahkan Review</h4>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div wire:transition class="alert alert-info alert-dismissible fade show" role="alert">
                        <strong>Review anda telah tersimpan</strong> dan akan ditampilkan oleh admin
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form wire:submit="storeComment">
                    <div class="my-2">
                        <label for="Name" class="form-label">Nama</label>
                        <input wire:model="name" type="text" class="form-control" required>
                    </div>
                    <div class="my-2">
                        <label for="Photo" class="form-label">Photo</label>
                        <input wire:model="photo" type="file" class="form-control" required>
                    </div>
                    <div class="my-2">
                        <label for="Comment" class="form-label">Review</label>
                        <textarea wire:model="comment" rows="3" class="form-control" required></textarea>
                    </div>


                    <button type="submit" class="btn btn-primary text-white">Simpan Review</button>
                </form>
            </div>
        </div>
    </div>
</div>
