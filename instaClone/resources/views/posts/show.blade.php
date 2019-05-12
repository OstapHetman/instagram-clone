@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-8">
        <img src="{{ $post->image }}" class="w-100" alt="Post Image">
      </div>
      <div class="col-4">
        <div>
          <div class="d-flex align-items-center">
              <div><img style="max-width: 40px;" class="w-100 rounded-circle" src="{{ $post->user->profile->profileImage() }}" alt="Image Profile"></div>
              <div class="pl-3">
                <a href="/profile/{{ $post->user->id }}" class="mb-0 font-weight-bold text-dark">{{ $post->user->username }}</a>
                <a class="ml-3 btn btn-primary btn-sm" href="#">Follow</a>
              </div>
          </div>
          <p class="pt-4"> <span class="font-weight-bold">{{ $post->user->username }}</span> {{ $post->caption }}</p>
        </div>
      </div>
    </div>
  </div>
@endsection
