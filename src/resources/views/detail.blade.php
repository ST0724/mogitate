@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}" />
@endsection

@section('content')
<div class="content">
    <form action="/products/{id}/update" class="update-form" methoc="POST">
        @method('PATCH')
        @csrf

        <input type="hidden" name="id" value="{{ $products['id'] }}">

        <div class="detail">
            <div class="detail__card">
                <img src="{{asset('storage/fruits-img/fruits-img/'. $products['image'])}}" alt="画像" class="card__image">

                <input type="file" class="card__image--input" name="image">
            </div>


            <div class="detail__input">
                <label class="update-form__label">商品名</label>
                <div class="update-form__input">
                    <input type="text" class="update-form__text" value="{{ $products['name'] }}" name="name">
                </div>

                <label class="update-form__label">値段</label>
                <div class="update-form__input">
                    <input type="text" class="update-form__text" value="{{ $products['price'] }}" name="price">
                </div>

                <label class="update-form__label">季節</label>
                <div class="update-form__input">
                    <input type="radio" class="update-form__radio" name="seasons" value="春">春
                    <input type="radio" class="update-form__radio" name="seasons" value="夏">夏
                    <input type="radio" class="update-form__radio" name="seasons" value="秋">秋
                    <input type="radio" class="update-form__radio" name="seasons" value="冬">冬
                </div>
            </div>
        </div>

        
        <div class="description">
            <label class="update-form__label">商品説明</label>
            <div class="update-form__input">
                <textarea class="update-form__textarea" name="description">{{ $products['description'] }}</textarea>
            </div>

            <div class="update-form__button">
                <button class="update-form__button--return" type="button" onclick="location.href='/products'">戻る</button>
                <button class="update-form__button--submit" type="submit">変更を保存</button>
            </div>
        </div>

    </form>
</div>
@endsection