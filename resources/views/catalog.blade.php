@extends('master')

@section('title', 'Shop Jibbitz™ Shoe Charms')
@section('content')
    <div class="section catalog-main">
            <div class="catalog-container">
                <h1 class="catalog-header h-l text-black">
                    Shop Jibbitz™ Shoe Charms
                </h1>
                <div class="row">
                    <div class="catalog-filter">
                        <form method="GET" action="{{ route('catalog') }}">
                            <div class="sort-header">
                                <span class="text-extrabold"><i class="fa-solid fa-filter"></i>Filter & Sort</span>
                                <span>{{ $products->count() }} items</span>
                            </div>
                            <div class="dropdown dropdown-sort">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div>
                                        <span class="text-12 text-uppercase text-gray">Sort By</span>
                                        <p class="text-black">
                                            @if ($sortBy == 'newest') Newest
                                                @elseif ($sortBy == 'highToLow') Price: High to Low
                                                    @elseif ($sortBy == 'lowToHigh') Price: Low to High
                                                        @else Newest
                                            @endif
                                        </p>
                                    </div>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><button type="submit" onclick="filterSetValue('newest')" class="dropdown-item @if ($sortBy == 'newest' || $sortBy == null) bg-gray @else bg-white @endif" href="#">Newest</button></li>
                                    <li><button type="submit" onclick="filterSetValue('lowToHigh')" class="dropdown-item @if ($sortBy == 'lowToHigh') bg-gray @else bg-white @endif" href="#">Price: Low to High</button></li>
                                    <li><button type="submit" onclick="filterSetValue('highToLow')" class="dropdown-item @if ($sortBy == 'highToLow') bg-gray @else bg-white @endif" href="#">Price: High to Low</button></li>
                                </ul>
                            </div>
                            <input class="hidden" id="filterInput" type="text" name="sortBy">
                        </form>
                    </div>
                    <div class="catalog-items">
                        @foreach($products as $product)
                        <div class="card catalog-item">
                            <div class="catalog-item-fav">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                                <div class="new-badge">
                                    @if($product->isNew())
                                    <span>New</span>
                                    @endif
                                </div>
                            <a href="{{ route('product', $product->code) }}">
                                <img src="{{ Storage::url($product->image) }}" class="card-img-top" alt="...">
                                <div class="card-body catalog-item-body">
                                    <div class="catalog-item-name text-14 text-black">{{ $product->name }}</div>
                                    <div class="catalog-item-price-old text-18 text-black text-bold">
                                        @if($product->isSale())
                                        <span>
                                            ${{ $product->old_price }}
                                        </span>
                                        @endif
                                    </div>
                                    <div class="catalog-item-price text-18 @if($product->isSale()) text-red @else text-black @endif text-bold">${{ $product->price }}</div>
                                    <form action="{{ route('cart-add', $product->id) }}" method="POST">
                                        <button type="submit" class="catalog-item-btn button-blue text-bold">Add to Cart</button>
                                        @csrf
                                    </form>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    {{ $products->links() }}
                </div>

            </div>
        </div>
@endsection
