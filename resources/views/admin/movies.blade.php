@extends('layout.admin')

@section('content')
    <div class="page-content">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-12 d-flex justify-content-between align-items-center">
                        <h5>List Movies</h5>
                        <a href='/addMovies' class="btn btn-primary me-1 mb-1">Add Data</a>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible show fade"> {{ $message }} 
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                    @endif
                </div>
            </div>            
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Title Long</th>
                                <th>URL</th>
                                <th>Slug</th>
                                <th>Year</th>
                                <th>Rating</th>
                                <th>Runtime</th>
                                <th>IMDb code</th>
                                <th>Genre</th>
                                <th>Summary</th>
                                <th>Description</th>
                                <th>Synopsis</th>
                                <th>Language</th>
                                <th>Poster</th>
                                <th>Mpa Rating</th>
                                <th>Upload Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_movies as $item)
                            <tr>
                                <td scope="item">{{ $item->title }}</td>
                                <td scope="item">{{ $item->title_long  }}</td>
                                <td scope="item">{{ $item->url }}</td>
                                <td scope="item">{{ $item->slug }}</td>
                                <td scope="item">{{ $item->year }}</td>
                                <td scope="item">{{ $item->rating }}</td>
                                <td scope="item">{{ $item->runtime }}</td>
                                <td scope="item">{{ $item->imdb_code }}</td>
                                <td scope="item">{{ $item->genres }}</td>
                                <td scope="item">{{ $item->summary }}</td>
                                <td scope="item">{{ $item->description }}</td>
                                <td scope="item">{{ $item->synopsis }}</td>
                                <td scope="item">{{ $item->language }}</td>
                                <td scope="item">{{ $item->background_image }}</td>
                                <td scope="item">{{ $item->mpa_rating }}</td>
                                <td scope="item">{{ $item->date_uploaded }}</td>
                                <td>
                                    <a href="/findData/{{ $item ->id }}"><i class="bi bi-pencil-fill"></i></a>
                                    <a onclick="return confirm('Are you sure to delete this?')" href='/deleteData/{{ $item->id }}' id="question"><i class="bi bi-trash-fill"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $data_movies->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
@endpush
