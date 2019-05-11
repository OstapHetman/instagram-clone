@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-3 p-5">
        <img class="rounded-circle" src="https://instagram.frix7-1.fna.fbcdn.net/vp/11cedf826aaf9daf3623948cc028c2f9/5D655738/t51.2885-19/s150x150/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=instagram.frix7-1.fna.fbcdn.net" alt="Profile logo">
      </div>
      <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-items-center">
          <h1>{{ $user->username }}</h1>
          <a href="/p/create" class="btn btn-sm btn-primary">Add New Post</a>
        </div>
        <div class="d-flex">
          <div class="pr-5"><strong>153</strong> posts</div>
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
          <img class="w-100" src="/storage/{{ $post->image }}" alt="Post Image">
        </div>
      @endforeach
    </div>
</div>
@endsection
