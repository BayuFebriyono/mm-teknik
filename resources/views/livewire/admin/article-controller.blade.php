<div>

    <h3 class="mb-2">Data Artikel</h3>
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
                        <div class="my-3 col-md-6" wire:ignore>
                            <div class="col-12">
                                <label for="content" class="form-label">Konten</label>
                            </div>
                            <div class="col-12">
                                <div class="editor"></div>
                                <textarea wire:model="content" class="form-control" id="editor"></textarea>
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button wire:click="cancel" type="button" class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    @endif

     {{-- Form Tambah --}}
     @if ($isEditData)
     <div wire:transition class="card mb-5">
         <div class="card-header">
             <h5 class="card-title mb-0">Form Tambah Data</h5>
         </div>
         <div class="card-body">
             <form wire:submit="update">
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
                     <div class="my-3 col-md-6" wire:ignore>
                         <div class="col-12">
                             <label for="content" class="form-label">Konten</label>
                         </div>
                         <div class="col-12">
                             <div class="editor"></div>
                             <textarea wire:model="content" class="form-control" id="editor"></textarea>
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
            <h5 class="card-title mb-0">...</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-secondary">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Content</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                            <tr wire:key="{{ $article->id }}">
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $article->title }}</td>
                                <td>{{ $article->category }}</td>
                                <td><img src="uploads/{{ $article->photo }}" style="width: 80px;"></td>
                                <td>{{ $article->content }}</td>
                                <td><span role="button" class="btn btn-warning" wire:click="edit('{{ $article->id }}')"><i
                                            class="fa-solid fa-pen-to-square"></i></span>
                                    <span role="button" class="btn btn-danger"
                                        wire:click="delete('{{ $article->id }}')"><i
                                            class="fa-solid fa-trash-can"></i></span>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

            {{ $articles->links() }}
        </div>
    </div>



</div>
