@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-3 p-5">
        <img class="rounded-circle" src="https://instagram.frix7-1.fna.fbcdn.net/vp/11cedf826aaf9daf3623948cc028c2f9/5D655738/t51.2885-19/s150x150/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=instagram.frix7-1.fna.fbcdn.net" alt="Profile logo">
      </div>
      <div class="col-9 pt-5">
        <div><h1>{{ $user->username }}</h1></div>
        <div class="d-flex">
          <div class="pr-5"><strong>153</strong> posts</div>
          <div class="pr-5"><strong>23k</strong> followers</div>
          <div class="pr-5"><strong>212</strong> followings</div>
        </div>
        <div class="pt-3 font-weght-bold">
          freeCodeCamp.org
        </div>
        <div>
          We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.
        </div>
        <div>
          <a href="#">www.freecodecamp.org</a>
        </div>
      </div>
    </div>

    <div class="row pt-4">
      <div class="col-4 mb-4">
        <img class="w-100" src="https://instagram.frix7-1.fna.fbcdn.net/vp/1d535b69275c9d92dcd822fdd8148b40/5D5296BF/t51.2885-15/e35/c2.0.745.745/s150x150/59798809_471455543593928_4744519222242354045_n.jpg?_nc_ht=instagram.frix7-1.fna.fbcdn.net" alt="">
      </div>

      <div class="col-4 mb-4">
        <img class="w-100" src="https://instagram.frix7-1.fna.fbcdn.net/vp/1d535b69275c9d92dcd822fdd8148b40/5D5296BF/t51.2885-15/e35/c2.0.745.745/s150x150/59798809_471455543593928_4744519222242354045_n.jpg?_nc_ht=instagram.frix7-1.fna.fbcdn.net" alt="">
      </div>

      <div class="col-4 mb-4">
        <img class="w-100" src="https://instagram.frix7-1.fna.fbcdn.net/vp/1d535b69275c9d92dcd822fdd8148b40/5D5296BF/t51.2885-15/e35/c2.0.745.745/s150x150/59798809_471455543593928_4744519222242354045_n.jpg?_nc_ht=instagram.frix7-1.fna.fbcdn.net" alt="">
      </div>

      <div class="col-4 mb-4">
        <img class="w-100" src="https://instagram.frix7-1.fna.fbcdn.net/vp/1d535b69275c9d92dcd822fdd8148b40/5D5296BF/t51.2885-15/e35/c2.0.745.745/s150x150/59798809_471455543593928_4744519222242354045_n.jpg?_nc_ht=instagram.frix7-1.fna.fbcdn.net" alt="">
      </div>
    </div>
</div>
@endsection
