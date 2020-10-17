@extends('layouts')

@section('title', 'Todo list')


@section('content')
    @include('message')
    <div class="col-md-12">
        <form action="{{url()->current()}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Not</label>
                <input type="text" class="form-control" name="not" value="{{$data->not}}" >
            </div>
            <select class="form-control" name="kategori">
                @foreach(\App\Models\Kategori::all() as $value)
                    <option value="{{$value->id}}" {{$value->id == $data->kategori_id ? 'selected' : ''}}>{{$value->ad}}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Güncelle</button>
        </form>
    </div>
@endsection

