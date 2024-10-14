@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/products.css') }}" />
@endsection

@section('content')
<div class="content">
    <!-- タイトル・商品追加ボタン -->
    <div class="head">
        <h2 class="head__title">商品一覧</h2>
        <form class="head__register" action="/products/register" method="POST">
            @csrf
            <button class="head__register--button" type="submit">+ 商品を追加</button>
        </form>
    </div>
    

    <div class="main-contant">
        <!-- 検索欄 -->
        <form class="search-form" action="/products/search" method="POST">
            @csrf
            <input type="text" class="search-form__name" placeholder="商品名で検索" name="keyword">
            <button class="search-form__button">検索</button>
            <h3 class="search-form__price--title">価格順で表示</h3>
            <select name="" id="" class="search-form__price__select"></select>
        </form>
            

        <!-- 商品データ -->
        <div class="product">
            <div class="product__image">
                @foreach($products as $product)
                <div class="card">
                    <a href="/products/{{ $product['id'] }}" class="card__link">
                        <img src="{{asset('storage/fruits-img/fruits-img/'. $product['image'])}}" alt="画像" class="card__image">
                        <div class="card__info">
                            <span class="card__info--name">{{ $product['name'] }}</span>
                            <span class="card__info--price">¥{{ $product['price'] }}</span>
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