@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center my-5">
                    <div>
                        <h1>Aggiungi Nuovo post</h1>
                    </div>
                    <div>
                        <a href="{{route('admin.posts.index')}}" class="btn btn-sm btn-primary">Tutti gli articoli</a>
                    </div>

                </div>
            </div>
            <div class="col-12">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $err)
                                <li>{{$err}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('admin.posts.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-4">
                        <input type="text" name="title" id="title" placeholder="Titolo" class="form-control @error('title')is-invalid @enderror" value="{{old('title')}}">
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <select name="category_id" id="category_id" class="form-control  @error('category_id')is_invalid @enderror">
                            <option value="">Seleziona categoria...</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" >{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <p>Seleziona i tag</p>
                        @foreach($tags as $tag)
                            <div class="form-check @error('tags') is-invalid @enderror">
                                <input type="checkbox" name="tags" id="" value="{{$tag->id}}" class="form-check-input" >
                                <label class="form-check-label">{{$tag->name}}</label>

                            </div>
                        @endforeach
                        @error('tags')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <input type="file" class="form-control @error('cover_image')is_invalid @enderror" name="cover_image" id="cover_image">
                        @error('cover_image')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                       
                    <div class="form-group mt-4">
                        
                        <textarea class="form-control" name="content" id="content" placeholder="Contenuto">{{old('content')}}</textarea>
                    </div>
                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-success">Salva
                    </div>
                </form>
            </div>
                        

                    
                    
                    
        </div>
    </div>
@endsection
