<!DOCTYPE html>
<html lang="ja">
<head>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クイズだお</title>
</head>
<body>

    <div class="mainvisual">
    <h1>{{$titles->name}}</h1> 
    @foreach($questions as $question)
    <div>
        <h2> <span class="under"> {{$question->question_number}}. この地名はなんて読む？</span></h2>
      
        <div class="picture">
        <img src="{{asset('storage/img/'.$question->img)}}" alt="画像">
        </div>
        <ul>
        @foreach($question->choices->shuffle() as $choice)
            <li id='s{{ $question->id }}-{{$choice->valid}}-{{$choice->id %3}}' 
                class="button answerlist_{{ $question->id }}"data-number="{{$choice->valid}}"onclick="check({{$choice->id %3}},{{ $question->id }},{{$choice->valid}})"
            >
                <b>{{$choice->name}}</b>
            </li>
        @endforeach
        </ul>
        <div id="answerbox_{{ $question->id }}" class="answerbox">
        <p id="TorF_{{ $question->id }}"class="TorF"></p>
        <p id="answer_{{ $question->id }}" class="answer_comment">正解は「{{$question->name}}」です</p>
        </div>
    @endforeach
    </div>
    <script src="{{asset('/js/script.js')}}"></script>
</body>
</html>