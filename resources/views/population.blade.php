@extends('homepage')
@section('content')
<div class="container default overview">
    <h1 class="fw-bold mb-4 text-center">population</h1>
    <p class="text-center mt-5">Palawan's population is 1,104,585 as of the 2015 census. Nearly a quarter of that number
        is
        in Puerto Princesa
        City, with 255,116. Its big size, however, makes Puerto Princesa the least densely populated city in the
        Philippines, with only 107 persons per square km. </p>
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Province(proposed)</h5>
                    <ol>
                        <li>Palawan del Sur</li>
                        <li>Palawan del Norte</li>
                        <li>Palawan Oriental</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Population(2015)</h5>
                    <ol>
                        <li>434,423</li>
                        <li>226,427</li>
                        <li>188,619</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-sm-6 m-auto mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Land Area (in sq. km.)</h5>
                    <ol>
                        <li>7,213.83</li>
                        <li>3,957.97</li>
                        <li>3,477.93</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="map my-5">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4023739.5411898294!2d114.32218859214939!3d9.981033358050285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33b5bce750b99e45%3A0xdfc65f6c0c8d3beb!2sPalawan!5e0!3m2!1sen!2sph!4v1693476799362!5m2!1sen!2sph"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</div>
@endsection