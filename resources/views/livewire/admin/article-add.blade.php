<div>
    <div class="card mb-5">
        <div class="card-header">
            <h5 class="card-title mb-0">Form Tambah Data</h5>
        </div>
        <div class="card-body">
            <form wire:submit="store">
                <div class="row">
                    <div class="my-3 col-md-6">
                        <div class="col-12">
                            <label for="title" class="form-label">Judul</label>
                        </div>
                        <div class="col-12">
                            <input wire:model="title" txype="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="my-3 col-md-6">
                        <div class="col-12">
                            <label for="category" class="form-label">Kategori</label>
                        </div>
                        <div class="col-12">
                            <input wire:model="category" txype="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="my-3 col-md-6">
                        <div class="col-12">
                            <label for="photo" class="form-label">Foto Artikel</label>
                        </div>
                        <div class="col-12">
                            <input wire:model="photo" type="file" class="form-control">
                            @error('photo')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div wire:ignore class="my-3 col-md-6">
                        <textarea wire:model="content" id="editor"></textarea>
                        <script>
                            ClassicEditor
                                .create(document.querySelector('#editor'))
                                .then(editor => {
                                    editor.model.document.on('change:data', () => {
                                        @this.set('content', editor.getData());
                                    });
                                })
                                .catch(error => {
                                    console.error(error);
                                });
                        </script>

                    </div>

                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a wire:navigate href="/article" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
