@section('title')
    <title>Popular</title>
@endsection

@section('content')
<style>
    .card-img-top {
        width: 100%;
        height: 200px; /* Adjust height as needed */
        object-fit: cover;
    }
</style>

<div class="container py-5">
    <h2 class="mb-4">Popular</h2>

    <div class="row g-4">
        <!-- Card 1 -->
        <div class="col-lg-4 col-md-6">
            <div class="card h-100">
                <img src="{{ asset('img/ds1.jpg') }}" class="card-img-top" alt="Machine Learning">
                <div class="card-body">
                    <h5 class="card-title">Machine Learning</h5>
                    <p class="card-text">14 May 2024 | by: Bia</p>
                    <p class="card-text">Di tengah pesatnya perkembangan teknologi kecerdasan buatan atau artificial intelligence (AI)...</p>
                    <a href="#" class="btn btn-dark">Read more...</a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-lg-4 col-md-6">
            <div class="card h-100">
                <img src="{{ asset('img/ds2.jpg') }}" class="card-img-top" alt="Deep Learning">
                <div class="card-body">
                    <h5 class="card-title">Deep Learning</h5>
                    <p class="card-text">14 May 2024 | by: Lia</p>
                    <p class="card-text">Deep learning merupakan subbidang machine learning yang algoritmanya terinspirasi dari struktur otak...</p>
                    <a href="#" class="btn btn-dark">Read more...</a>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-lg-4 col-md-6">
            <div class="card h-100">
                <img src="{{ asset('img/ds3.jpg') }}" class="card-img-top" alt="Natural Language Processing">
                <div class="card-body">
                    <h5 class="card-title">Natural Language Processing</h5>
                    <p class="card-text">15 May 2024 | by: Husna</p>
                    <p class="card-text">Natural Language Processing (NLP) merupakan salah satu cabang ilmu AI yang berfokus pada pengolahan...</p>
                    <a href="#" class="btn btn-dark">Read more...</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
