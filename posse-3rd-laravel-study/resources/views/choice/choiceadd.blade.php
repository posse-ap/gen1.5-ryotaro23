<h1>新規選択肢作成画面</h1>
<p><a href="{{ route('post.index')}}">一覧画面</a></p>

@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
 
<form action="{{ route('newchoice.store')}}" method="POST">
    @csrf
    <p>選択肢：<input type="text" name="newchoice" value="{{old('newchoice')}}"></p>
    <p><input type="hidden" name="valid" value="0"></p>
    <p><input type="hidden" name="quiestion_id" value="{{$id}}"></p>
    <input type="submit" value="登録する">
</form>