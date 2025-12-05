@extends('layout.app')

@section('content')
<div class="contact">
    <h1>お問い合わせありがとうございます</h1>
    {{$form->name}}
    {{$form->email}}
    {{$form->tell}}
</div>
@endsection