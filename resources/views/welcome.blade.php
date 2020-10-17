@extends('layouts')

@section('title', 'Todo list')


@section('content')
    @include('message')
    <div class="col-md-12"><a href="{{route('ekle')}}" class="btn btn-success text-center btn-lg">Yeni Not</a></div>
    <div class="col-md-12">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Not</th>
                <th scope="col">İşlemler</th>
            </tr>
            </thead>
            <tbody>

            @foreach($data as $value)
            <tr>

                <th scope="row">{{$loop->index}}</th>
                <td>{{$value->not}}</td>

                <td>
                    <a href="{{route('sil',['id'=>$value->id])}}" class="btn btn-danger">Sil</a>
                    <a href="{{route('guncelle',['id'=>$value->id])}}" class="btn btn-success">Güncelle</a>
                </td>
            </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection

