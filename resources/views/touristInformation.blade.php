@extends('homepage')
@section('content')
<div class="container default overview">

    <video controls class="video mb-5">
        <source src="img/EL NIDO PALAWAN Short video.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <h1 class="fw-bold mb-3">tourist spots in palawan</h1>
    <ol>
        @foreach($touristSpots as $touristSpot)
        <li>
            <h5>{{ $touristSpot->title }}</h5>
            <p>- {{ $touristSpot->description }}</p>
            <img src="{{ $touristSpot->image }}" class="img-fluid rounded mb-5">
        </li>
        @endforeach
    </ol>
</div>
<a href="#"><img src="img/arrow-up-solid.svg" class="img-fluid arrowUp float-end mb-5 mx-5"></a>
@endsection