@extends('templates.app')

@section('title', 'Welcome')

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
    <div class="jumbotron kotak" style="text-align: center;">
        <form action="{{ route('form.update', Auth::User()->id) }}" method="POST">
        @csrf
        @method('PUT')
            <input type="text" name="mapel_id" hidden="" value=" {{$mapel->id}} ">
            <h1> {{$mapel->mapel_name}} </h1>
                <p>Rp. {{$mapel->total_price}} /Bln </p>
                <p> {{ Auth::user()->name }}, Ayo gabung dengan kelas {{$mapel->mapel_name}} untuk belajar.</p>
            
            @if(Auth::User()->admin == 0)
                <button class="btn btn-lg btn-primary">
                    Gabung Kelas
                </button>
            @else
            @endif
        </form>
    </div>
</div>

@endsection