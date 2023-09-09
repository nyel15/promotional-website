@extends('homepage')
@section('content')
<div class="container default">
    <h1 class="text-center fw-bold">delicacies must try in palawan</h1>
    <p class='text-center'>If there's one thing most rewarding when it comes to traveling, it's the food. A place is
        defined by its beauty
        and the cuisine that it serves. Exceptional locations with great food are a heavenly combination. A feast for
        both the eyes and the stomach is all we need for a memorable travel getaway.</p>
    <p class='text-center'>Palawan may be famous for its natural wonders, but this island paradise in the Philippines
        also steps up its game
        when it comes to local dishes. If you wish to journey to this island destination, you might want to consider
        trying out these delectable treats. Here are 8 local delicacies to try when you visit Palawan.</p>
    <ol>
        @foreach($delicacies as $delicacy)
        <li>
            <h5>{{ $delicacy->title }}</h5>
            <img src="{{ $delicacy->image }}" class="img-fluid rounded w-50 mb-3">
            <p>{{ $delicacy->description }}</p>
        </li>
        @endforeach
    </ol>
</div>
<a href="#"><img src="img/arrow-up-solid.svg" class="img-fluid arrowUp float-end mb-5 mx-5"></a>
@endsection