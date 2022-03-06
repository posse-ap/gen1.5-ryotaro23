<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>quizy管理者画面</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">
</head>

<body>
    <div><a href='/post/choice/create/{{$titles->id}}'>大問追加</a></div>
    <ul>
        <div class="mainvisual">
    <h1>{{$titles->name}}難読地名クイズ</h1> 

    @foreach($questions as $question)
    <div>
    @if ($message = Session::get('success'))
    <p>{{ $message }}</p>
    @endif
        <h2> <span class="under"> {{$question->question_number}}. この地名はなんて読む？</span></h2>
        <h3 >{{$question->id}}</h3>
        <form action="{{ route('choice.destroy', $question->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" name="" value="大問削除">      
                <a href="/post/choice/add/{{$question->id}}">選択肢追加</a>
        <div class="picture">
        <img src="{{asset('storage/img/'.$question->img)}}" alt="画像">
        </div>
        <ul>
        @foreach($question->choices as $choice)
            <li id='s{{ $question->id }}-{{$choice->valid}}-{{$choice->id %3}}' 
                class="button answerlist_{{ $question->id }}"data-number="{{$choice->valid}}"onclick="check({{$choice->id %3}},{{ $question->id }},{{$choice->valid}})"
            >
                <b>{{$choice->name}}</b>
            </li>
        @endforeach
        </ul>
    @endforeach


        </div>
    </ul>

</body>

</html>