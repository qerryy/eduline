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
        <h1>Eduline</h1>
            <p>Siapapun Anda, apapun profesi Anda. Sekarang Anda bisa menjadi seorang terpelajar dengan cara mudah dan cepat, silahkan bergabung bersama tiga ribu perserta lainnya untuk mulai belajar membuat dunia lebih baik.</p>
            <p>Dari manapun Anda, sedang berada dimanapun Anda. Selama terhubung dengan internet, Anda bisa belajar darimanapun.</p>

        @guest
            <p><a class="btn btn-lg btn-primary" href="{{ route('register') }}" role="button">Daftar Sekarang »</a></p>
        @else
        @endguest

    </div>
</div>

<div class="jumbotron" style="background-color: white; margin-top: 100px;">
    <div class="container">
        <div class="row" style="text-align: center;">
            @foreach ($mapel as $m)
                <div class="col-md-4 thumbnail">
                    <h3 class="btn btn-lg btn-primary">
                        <a href="{{ route('form', ['id'=>$m['id']]) }}" style="color: white;"> {{$m->mapel_name}} </a>
                    </h3>
                    <p> {{$m->total_price}} </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus quod est error nemo illum. Aspernatur velit iusto, laboriosam recusandae.</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection