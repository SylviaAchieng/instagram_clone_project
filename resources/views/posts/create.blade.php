@extends('layouts.app')

@section('content')
<div class="container align-items-center">
    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf
     <div class="row">
        <div class="col-8 offset-2">
            <div class="row">
                <h1>Add New Post</h1>
            </div>

        <div class="row mb-3">
                            <label for="caption" class="col-md-4 col-form-label text-md-end">Post Caption</label>

                            <div class="col-md-6">
                                <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                                @error('caption')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $error->first('caption') }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <label for="image" class="col-md-4 col-form-label text-md-end">Post Image</label>

                                <input type="file" class="form-control-file" id="image" name="image"/>
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $error->first('image') }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row pt-4">
                                <button class="btn btn-primary">Add New Post</button>
                            </div>
                            

                        </div>
        </div>
     </div>
    </form>
</div>
@endsection
