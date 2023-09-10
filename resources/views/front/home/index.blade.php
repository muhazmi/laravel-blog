@extends('front.layout.app')

@section('content')
  <h1>Latest Blog</h1>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($posts as $post)
      <div class="col">
        <div class="card">
          <img src="{{ $post->image }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ Str::limit($post->name, 35) }}</h5>
            <p class="card-text">{{ Str::limit($post->description, 75) }}</p>
          </div>
          <div class="card-footer">
            <a href="post/{{ $post->slug }}" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Read more</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection
