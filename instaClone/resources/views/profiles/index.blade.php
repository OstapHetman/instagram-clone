@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-3 p-5">
        <img class="w-100 rounded-circle" src="{{ $user->profile->profileImage() }}" alt="Profile logo">
      </div>
      <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-items-center">
          <h1>{{ $user->username }}</h1>
          @can('update', $user->profile)
            <a href="/p/create" class="btn btn-sm btn-primary">Add New Post</a>
          @endcan
        </div>
        @can('update', $user->profile)
          <div class="pb-3">
              <a href="/profile/{{ $user->id }}/edit" class="btn btn-sm btn-primary">Edit Profile</a>
          </div>
        @endcan
        <div class="d-flex">
          <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
          <div class="pr-5"><strong>23k</strong> followers</div>
          <div class="pr-5"><strong>212</strong> followings</div>
        </div>
        <div class="pt-3 font-weght-bold">
          {{ $user->profile->title }}
        </div>
        <div>
          {{ $user->profile->description }}
        </div>
        <div>
          <a href="#">{{ $user->profile->url}}</a>
        </div>
      </div>
    </div>

    <div class="row pt-4">
      @foreach ($user->posts as $post)
        <div class="col-4 mb-4">
          <a href="/p/{{ $post->id }}">
            <img class="w-100" src="{{ $post->profileImage() }}" alt="Post Image">
          </a>
        </div>
      @endforeach
    </div>
</div>
@endsection
