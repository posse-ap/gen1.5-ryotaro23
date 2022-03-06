<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>quizy</title>
    <link href="">
</head>

<body>
    <h2>{{$titles->name}}難読地名クイズ大問追加画面</h2>
    <form action="{{ route('choice.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <p>問題番号：<input type="number" name="question_number" value="{{old('question_number')}}"></p>
    <p>正解選択肢：<input type="text" name="correct_choice" value="{{old('correct_choice')}}"></p>
    <p>不正解選択肢：<input type="text" name="incorrect_choice1" value="{{old('incorrect_choice1')}}"></p>
    <p>不正解選択肢：<input type="text" name="incorrect_choice2" value="{{old('incorrect_choice2')}}"></p>
    <p>画像追加：<input type="file" name="img" class="form-control"></p>
    <p><input type="hidden" name="area_number" value="{{$titles->id}}"></p>
    <p><input type="hidden" name="area_id" value="{{$questions}}"></p>
    <input type="submit" value="登録する">
</form>
</body>

</html>