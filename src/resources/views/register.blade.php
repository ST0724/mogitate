@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}" />
@endsection

@section('content')
<div class="content">
    <h2 class="title">商品登録</h2>

    <form class="create-form" action="/products/store" method="POST">
        @csrf
        <label class="create-form__label">商品名<span class="span__required">必須</span></label>
        <div class="create-form__input">
            <input type="text" class="create-form__text" placeholder="商品名を入力" name="name">
        </div>

        <label class="create-form__label">値段<span class="span__required">必須</span></label>
        <div class="create-form__input">
            <input type="text" class="create-form__text" placeholder="値段を入力" name="price">
        </div>
        
        <label class="create-form__label">商品画像<span class="span__required">必須</span></label>
        <div class="create-form__input">
            <input type="file" class="create-form__image" name="image">
        </div>

        <label class="create-form__label">
            季節<span class="span__required">必須</span><span class="span__multiple">複数選択可</span>
        </label>
        <div class="create-form__input">
            <input type="radio" class="create-form__radio" name="seasons" value="春">春
            <input type="radio" class="create-form__radio" name="seasons" value="夏">夏
            <input type="radio" class="create-form__radio" name="seasons" value="秋">秋
            <input type="radio" class="create-form__radio" name="seasons" value="冬">冬
        </div>

        <label class="create-form__label">商品説明<span class="span__required">必須</span></label>
        <div class="create-form__input">
            <textarea class="create-form__textarea" name="description" placeholder="商品の説明を入力"></textarea>
        </div>

        <div class="create-form__button">
            <button class="create-form__button--return" type="button" onclick="location.href='/products'">戻る</button>
            <button class="create-form__button--submit" type="submit">登録</button>
        </div>
    </form>
</div>

@endsection