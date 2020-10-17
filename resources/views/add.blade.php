@extends('layouts')

@section('title', 'Todo list')


@section('content')
    <div class="col-md-12">
        <form action="{{route('ekle.post')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Not</label>
                <input type="text" class="form-control" name="not" id="exampleInputEmail1" >
            </div>
            <button type="submit" class="btn btn-primary">Kaydet</button>
        </form>
    </div>
@endsection

