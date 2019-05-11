@extends('layouts.app')

@section('content')
  <div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
      @csrf
      <div class="row">
        <div class="col-8 mx-auto">

          <div class="row py-4">
            <h1>Add new post</h1>
          </div>

          <div class="form-group row">
            <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
            <input id="caption" name="caption" type="text" class="form-control @error('caption') is-invalid @enderror" caption="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus placeholder="Type here...">
  
            @error('caption')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="row">
            <label for="image" class="col-md-4 col-form-label">Post Image</label>
            <input type="file" class="form-control-fiile" id="image" name="image">
            @error('image')
              <strong class="text-danger">{{ $message }}</strong>
            @enderror
          </div>

          <div class="row pt-4">
            <button class="btn btn-primary ml-auto">Add New Post</button>
          </div>
      
        </div>
      </div>
    </form>
  </div>
@endsection