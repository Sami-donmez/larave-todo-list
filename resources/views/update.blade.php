@extends('layouts')

@section('title', 'Todo list')


@section('content')
    <div class="col-md-12">
        <form action="{{url()->current()}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Not</label>
                <input type="text" class="form-control" name="not" value="{{$data->not}}" >
            </div>
            <button type="submit" class="btn btn-primary">Güncelle</button>
        </form>
    </div>
@endsection

