<div>
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
                            <td><span role="button" class="btn btn-warning" wire:click="edit('{{ $comment->id }}')"><i class="fa-solid fa-pen-to-square"></i></span>
                                <span role="button" class="btn btn-danger" wire:click="delete('{{ $comment->id }}')"><i class="fa-solid fa-trash-can"></i></span>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
