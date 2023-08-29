@extends ('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center my-5">
                    <div>
                        <h1>{{$tag->name}}</h1>
                    </div>
                    <div>
                        <a href="{{route('admin.tags.index')}}" class="btn btn-sm btn-primary">Tutti i tag</a>
                    </div>

                </div>
            </div>
           
            
            <div class="col-12">
                <h4>Post della Categoria</h4>
                <div class="col-12">
                     <h6>{{$tag->slug}}</h6>
                </div>
                <div class="row">
                    @foreach($tag->posts as $post)
                        <div class="col-12 col-md-4">
                            <div class="card">
                                <div class="card-image">
                                    <img  src="{{asset('storage/'.$post->cover_image)}}" alt="" width="300">
                                </div>
                                <div class="card-body">
                                    <div class="card-content">
                                        <h4 xlass="mb-5">{{$post->title}}</h4>
                                        <a class="btn btn-sm btn-primary" href="{{route('admin.posts.show', $post->id)}}">leggi l'articolo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection