@extends('layout.master')

@section('title')
<title>Writers</title>

<style>
    .writers-container {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 30px;
        padding: 20px;
    }

    .writer-card {
        text-align: center;
        width: 200px;
        margin: 7%;
        transition: transform 0.3s;
    }

    .writer-card:hover{
        transform: translateY(-10px);
    }

    .writer-image {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        margin-bottom: 10px;
    }

    .writer-name {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .writer-specialty {
        color: #666;
        font-size: 14px;
    }
</style>

@section('content')

<div class="row">
    <div class="col-12">
        <h1>Our writers:</h1>
        <div class="writers-container">
            <div class="writer-card">
                <img src="{{ asset('img/orang1.jpg') }}" class="writer-image" alt="Raka Putra Wicaksono">
                <div class="writer-name">Raka Putra Wicaksono</div>
                <div class="writer-specialty">Spesialis Interactive Multimedia</div>
            </div>

            <div class="writer-card">
                <img src="{{ asset('img/orang2.jpg') }}" class="writer-image" alt="Bia Mecca Annisa">
                <div class="writer-name">Bia Mecca Annisa</div>
                <div class="writer-specialty">Spesialis Data Science</div>
            </div>

            <div class="writer-card">
                <img src="{{ asset('img/orang3.png') }}" class="writer-image" alt="Aldi Firmansyah">
                <div class="writer-name">Aldi Firmansyah</div>
                <div class="writer-specialty">Spesialis Network Security</div>
            </div>
        </div>
    </div>
  </div>

@endsection

@endsection
