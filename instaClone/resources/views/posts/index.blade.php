@extends('layouts.app')

@section('content')
  <div class="container">
    @foreach ($posts as $post)
      <div class="row">
        <div class="col-6 mx-auto mb-4">
          <div class="border">

            <div class="d-flex align-items-center p-2">
              <div><img style="max-width: 40px;" class="w-100 rounded-circle" src="{{ $post->user->profile->profileImage() }}" alt="Image Profile"></div>
              <div class="pl-3">
                <a href="/profile/{{ $post->user->id }}" class="mb-0 font-weight-bold text-dark">{{ $post->user->username }}</a>
              </div>
            </div>

            <div>
              <img src="/storage/{{ $post->image }}" class="w-100" alt="Post Image">
            </div>
  
            <div class="pl-2">
              <p class="p-3 mb-0"> <span class="font-weight-bold">{{ $post->user->username }}</span> {{ $post->caption }}</p>
            </div>

          </div>
        </div>
      </div>
    @endforeach

    <div class="row">
      <div class="col-6 mx-auto d-flex justify-content-center">
        {{ $posts->links() }}
      </div>
    </div>
  </div>
@endsection
