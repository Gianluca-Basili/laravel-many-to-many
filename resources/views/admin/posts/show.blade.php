@extends ('layouts.admin')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center my-5">
                    <div>
                        <h1>{{$post->title}}</h1>
                    </div>
                    <div>
                        <a href="{{route('admin.posts.index')}}" class="btn btn-sm btn-primary">Tutti gli articoli</a>
                    </div>

                </div>
            </div>
            <div class="col-12 mt-3">
                <img src="{{asset('storage/'.$post->cover_image)}}"  width="500px">
            </div>
            <div class="col-12 mt-3">
               <strong>Categoria:</strong>
              
                
               <a href="{{route('admin.categories.show', $post->id)}}" class="btn btn-sm btn-primary">visualizza categoria</a>
            </div>
            <div class="col-12 mt-3">
                <strong>Tags:</strong>
                @if($post->tags)
                    @foreach($post->tags as $tag)
                        <a href="{{route('admin.tags.show', $tag->id)}}" class="badge text-bg-primary text-decoration-none">{{$tag->name}}</a>
                    @endforeach

                @else
                    Non sono presenti tag associati al post
                @endif
            </div>
            <div class="col-12">
                <p>{{$post->content}}</p>
            </div>
        </div>
    </div>
@endsection