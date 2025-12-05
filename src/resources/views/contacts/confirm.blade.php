@extends('layout.app')

@section('css')

@endsection

@section('content')
<div class="contact">
    <h1>お問い合わせ内容確認</h1>
    <form action="store" method="post">
        @csrf
        <table>
            <tr>
                <th>お名前</th>
                <td>{{$form->name}}</td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td>{{$form->email}}</td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td>{{$form->tell}}</td>
            </tr>
            <tr>
                <th>お問い合わせ内容</th>
                <td>{{$form->content}}</td>
            </tr>
        </table>
        <button>送信</button>
    </form>
</div>
@endsection