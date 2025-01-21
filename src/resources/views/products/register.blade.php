@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="content-form" >
    <div class="content-form__heading">
        <h2>商品登録</h2>
    </div>
    <form class="create-form" action="/products" method="post" >
    @csrf
    <div class="form__inner">
        <div class="form__inner--title">
            <span class="form__label--item">商品名</span>
            <span class="form__label--required">必須</span>
        </div>
        <div class="form__inner--content">
            <div class="form__input--text">
                <input type="text" name="name" placeholder="商品名を入力" {{ old('name')}}>
            </div>
            <div class="form__error">
                @error('name')
                    {{ $message }}
                @enderror
            </div>
        </div>
    </div>

    <div class="form__inner">
        <div class="form__inner--title">
            <span class="form__label--item">値段</span>
            <span class="form__label--required">必須</span>
        </div>
        <div class="form__inner--content">
            <div class="form__input--text">
                <input type="number" name="price" placeholder="値段を入力"  {{ old('price')}}>
            </div>
            <div class="form__error">
                @error('price')
                    {{ $message }}
                @enderror
            </div>
        </div>
    </div>

    <div class="form__inner">
        <div class="form__inner--title">
            <span class="form__label--item">商品画像</span>
            <span class="form__label--required">必須</span>
        </div>
        <div class="form__inner--content">
            <div class="form__input--text">
                <input type="file" name="image" {{ old('image')}}>
            </div>
            <div class="form__error">
                @error('image')
                    {{ $message }}
                @enderror
            </div>
        </div>
    </div>

    <div class="form__inner">
        <div class="form__inner--title">
            <span class="form__label--item">季節</span>
            <span class="form__label--required">必須</span>
            <span class="form__label--select">複数選択可</span>
        </div>
        <div class="form__inner--content">
            <div class="form__input--text">
                <input type="checkbox" name="season" value="1">春
                <input type="checkbox" name="season" value="2">夏
                <input type="checkbox" name="season" value="3">秋
                <input type="checkbox" name="season" value="4">冬

            </div>
            <div class="form__error">
                @error('season')
                    {{ $message }}
                @enderror
            </div>
        </div>
    </div>

    <div class="form__inner">
        <div class="form__inner--title">
            <span class="form__label--item">商品説明</span>
            <span class="form__label--required">必須</span>
        </div>
        <div class="form__inner--content">
            <div class="form__input--textarea">
                <textarea name="description" placeholder="商品の説明を入力"  {{ old('description')}}></textarea>
            </div>
            <div class="form__error">
                @error('description')
                    {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <div class="form__button">
        <div class="form__button--content">
            <button class="form__button-submit" type="submit">戻る</button>
        </div>
        <div class="form__button--content">
            <button class="form__button-submit" type="submit">登録</button>
        </div>
    </div>

</form>
</div>


@endsection
