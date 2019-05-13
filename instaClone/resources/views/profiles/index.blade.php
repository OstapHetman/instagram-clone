@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-3 p-5">
        <img class="w-100 rounded-circle" src="{{ $user->profile->profileImage() }}" alt="Profile logo">
      </div>
      <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-items-center">
          <div class="d-flex align-items-center pb-4">
            <h2 class="mb-0">{{ $user->username }}</h2>
            <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
          </div>
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
          <div class="pr-5"><strong>{{ $user->profile->followers->count() }}</strong> followers</div>
          <div class="pr-5"><strong>{{ $user->following->count() }}</strong> followings</div>
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
            <img class="w-100" src="/storage/{{ $post->image }}" alt="Post Image">
          </a>
        </div>
      @endforeach
    </div>
</div>
@endsection
