@extends('layouts')

@section('title', 'Todo list')


@section('content')
    @include('message')
    <div class="col-md-12 row">
        <div class="col-md-6"><a href="{{route('ekle')}}" class="btn btn-success text-center">Yeni Not</a></div>
        <div class="col-md-6"><strong>Toplam not: {{$data->count()}}</strong></div></div>
    <div class="col-md-12 my-5">
        <table class="table">
            <thead>
            <tr>
                <th style="width: 5%" scope="col">#</th>
                <th style="width: 55%" scope="col">Not</th>
                <th style="width: 20%" scope="col">Kategori</th>
                <th style="width: 20%" scope="col">İşlemler</th>
            </tr>
            </thead>
            <tbody>

            @foreach($data as $value)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$value->not}}</td>
                <td>{{$value->kategori()->first()->ad}}</td>

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

