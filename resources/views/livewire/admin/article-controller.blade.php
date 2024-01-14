<div>
    <h3 class="mb-2">Data Artikel</h3>
    <a wire:navigate href="/article-add" class="btn btn-primary mb-4"><i class="fa-solid fa-circle-plus"></i>
        &nbsp;Tambahkan
        Data</a>

    {{-- Form Tambah --}}


    {{-- Form Tambah --}}
    @if ($isEditData)
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
                                <td>{!! $article->content !!}</td>
                                <td><a wire:navigate href="/article-edit/{{ $article->id }}" class="btn btn-warning"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
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
