@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="products__content">
    <div class="content-top__container">
        <div class="left">
            <h2>商品一覧</h2>
        </div>
        <div class="right">
            <form action="/products/register" method="get">
                <button class="add-form__button-submit" type="submit">+ 商品を追加</button>
            </form>
        </div>
    </div>

    <div class="products__content-inner">
        <div class="search__container">
            <div class="search__form">
                <div class="search-form__item">
                    <input type="search" name="search" placeholder="商品名で検索"></input>
                </div>
            </div>
            <div class="search-form__button">
                <button class="search-form__button-submit" type="submit">検索</button>
            </div>
            <div class="products-sorter__container">
                <div class="products-sorter__title">
                    <p>価格順で表示</p>
                </div>
                <select class="products-sorter__select">
                    <option value="">価格で並べ替え</option>
                </select>
            </div>
        </div>
        <div class="products-cards__container">
            <div class="product-card__img-wrapper">
                @foreach($products as $product)
                    <img src="{{ asset('storage.fruits-img.' . $product->image) }}" alt="{{ $product->name }}"
                        style="width: 100px; height: auto;"><br>
                    <strong>{{ $product->name }}</strong>
                    ￥{{ $product->price }}<br>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection