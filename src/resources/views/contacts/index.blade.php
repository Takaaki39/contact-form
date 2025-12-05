@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact">
    <h1>お問い合わせ</h1>
    <form action="confirm" method="post">
        @csrf
        <div class="contact__element">
            <h3>お名前<span class="must">必須</span></h3>
            <input type="text" name="name">
        </div>
        <div class="contact__element">
            @error('name')
            <h3></h3>
            <p class="error">{{$errors->first('name')}}</p>
            @enderror
        </div>  

        <div class="contact__element">
            <h3>メールアドレス<span class="must">必須</span></h3>
            <input type="text" name="email">
        </div>
        <div class="contact__element">
            @error('email')
            <h3></h3>
            <p class="error">{{$errors->first('email')}}</p>
            @enderror
        </div>  

        <div class="contact__element">
            <h3>電話番号<span class="must">必須</span></h3>
            <input type="text" name="tell">
        </div>
        <div class="contact__element">
            @error('tell')
            <h3></h3>
            <p class="error">{{$errors->first('tell')}}</p>
            @enderror
        </div>  

        <div class="contact__element">
            <h3>お問い合わせ内容</h3>
            <textarea name="content"></textarea>
        </div>
        @error('content')
        <p class="error">{{$errors->first('content')}}</p>
        @enderror

        <button>送信</button>
    </form>
</div>
@endsection
