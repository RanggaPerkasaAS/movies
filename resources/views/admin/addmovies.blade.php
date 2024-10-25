@extends('layout.admin')

@section('content')
    <div class="page-content">
        <div class="card">
            <div class="card-header">
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible show fade"> {{ $message }} 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
                @endif
            </div>
            <div class="card-body">
                <form action='/insert' method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="basicInput">Title</label>
                        <input type="text" class="form-control" name="title" id="basicInput" placeholder="Enter Title" required>
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Title Long</label>
                        <input type="text" class="form-control" name="title_long" id="basicInput" placeholder="Enter Long title">
                    </div>
                    <div class="form-group">
                        <label for="basicInput">URL</label>
                        <input type="text" class="form-control" name="url" id="basicInput" placeholder="Enter URL">
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Slug</label>
                        <input type="text" class="form-control" name="slug" id="basicInput" placeholder="Enter Slug">
                    </div>
                    <div class="form-group">
                        <label for="basicInput">year</label>
                        <input type="number" class="form-control" name="year" id="basicInput" placeholder="Enter Year">
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Rating</label>
                        <input type="number" class="form-control" name="rating" id="basicInput" placeholder="Enter Rating">
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Runtime</label>
                        <input type="number" class="form-control" name="runtime" id="basicInput" placeholder="Enter Runtime">
                    </div>
                    <div class="form-group">
                        <label for="basicInput">IMDb code</label>
                        <input type="text" class="form-control" id="basicInput" placeholder="Enter IMDb Code" name="imdb_code">
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Genre</label>
                        <input type="text" class="form-control" name="genres" id="basicInput" placeholder="Enter Genre">
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Summary</label>
                        <textarea class="form-control" rows="3" name="summary"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Description</label>
                        <textarea class="form-control" rows="3" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Synopsis</label>
                        <textarea class="form-control" rows="3" name="synopsis"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Language</label>
                        <input type="text" class="form-control" name="language" id="basicInput" placeholder="Enter Language">
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Poster</label>
                        <input type="text" class="form-control" name="background_image" id="basicInput" placeholder="Enter Poster">
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Mpa Rating</label>
                        <input type="number" class="form-control" name="mpa_rating" id="basicInput" placeholder="Enter Mpa rating">
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Upload Date</label>
                        <input type="date" class="form-control" name="date_uploaded" id="basicInput" placeholder="Enter Upload Date">
                    </div>
                    <div class="col-sm-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                        <a href="{{ url()->previous() }}" class="btn btn-light-secondary me-1 mb-1">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
@endpush
