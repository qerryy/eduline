@extends('templates.app')

@section('title', 'Kelas')

@section('style')
    <style>
        body{
            background-image: url({{ asset('image/hero_1.jpg') }});
            background-size: 1400px 800px;
            background-repeat: no-repeat;
            min-height: 693px;
        }
        .kotak{
            background-color: rgba(0,20,30,.8);
            color: white;
        }
    </style>
@endsection

@section('content')
<div class="container">
    <div class="jumbotron kotak">
        <h2> {{ Auth::user()->name }}, Kelas yang saat ini Anda ikuti</h2>
        <h2>
            <ul>
                <li> {{$user->mapel->mapel_name}} </li>
            </ul>
        </h2>
        {{-- <h3><a href="{{ route('welcome') }}" class="btn btn-md btn-primary">Ganti Kelas</a></h3> --}}
    </div>
</div>

@endsection