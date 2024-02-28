@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
        
     <div class="row">
        <div class="col-8 offset-2">
            <div class="row">
                <h1>Edit Profile</h1>
            </div>

        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">Title</label>

                            <div class="col-md-6 pb-6">
                                <input 
                                id="title" 
                                type="text" 
                                class="form-control @error('title') is-invalid @enderror" 
                                style="margin-bottom: 10px;"
                                name="title" 
                                value="{{ old('caption') ?? $user->profile->title }}" required 
                                autocomplete="caption" 
                                autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $error->first('title') }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">Description</label>

                            <div class="col-md-6 pb-6">
                                <input 
                                id="description" 
                                type="text" 
                                class="form-control @error('description') is-invalid @enderror" 
                                style="margin-bottom: 10px;"
                                name="description" 
                                value="{{ old('caption') ?? $user->profile->description }}" 
                                required 
                                autocomplete="caption" 
                                autofocus>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $error->first('description') }}</strong>
                                    </span>
                                @enderror
                            </div>
                            

                            <div class="row mb-3">
                            <label for="url" class="col-md-4 col-form-label text-md-end">Url</label>

                            <div class="col-md-6 pb-6">
                                <input 
                                id="url" 
                                type="text" 
                                class="form-control @error('url') is-invalid @enderror" 
                                style="margin-bottom: 10px;"
                                name="url" value="{{ old('caption') }}" 
                                required 
                                autocomplete="caption" 
                                autofocus>

                                @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('url') }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="row mb-3">
                                <label for="image" class="col-md-4 col-form-label text-md-end">Profile Image</label>

                                <input type="file" class="form-control-file" style="margin-top:" 10px; id="image" name="image"/>
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $error->first('image') }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row pt-4">
                                <button class="btn btn-primary">Save Profile</button>
                            </div>
                            

                        </div>
        </div>
     </div>
    </form>
</div>
@endsection

