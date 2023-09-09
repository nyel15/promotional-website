@extends('homepage')
@section('content')
<div class="container default">
    <h1 class="text-center fw-bold">authentic palawan products to buy</h1>
    <p class="text-center">Palawan, named the best island in the world by several travel magazines, draws travelers with
        its breathtaking natural scenery and wonders. Apart from sharing picturesque photos on social media, there are
        unique souvenirs to take home from Palawan. From handcrafted items to local delicacies, the island has plenty of
        options for souvenir hunters.</p>
    <p class="text-center">Souvenir shops are abundant in Puerto Princesa, El Nido and Coron. However, beware of
        mass-produced items made in China or Indonesia that flood souvenir shops in popular tourist areas.</p>
    <ol>
        @foreach ($products as $product)
        <li>
            <h5>{{ $product->title }}</h5>
            <img src="{{ $product->image }}" class="img-fluid rounded w-50 mb-3">
            <p>{{ $product->description }}</p>
        </li>
        @endforeach
    </ol>
</div>
<a href="#"><img src="img/arrow-up-solid.svg" class="img-fluid arrowUp float-end mb-5 mx-5"></a>
@endsection