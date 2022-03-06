<h1>編集画面</h1>
<p><a href="{{ route('post.index')}}">一覧画面</a></p>
 
@if ($message = Session::get('success'))
<p>{{ $message }}</p>
@endif

@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
 
<form action="{{ route('post.update',$areas->id)}}" method="POST">
    @csrf
    @method('PUT')
    <p>タイトル：<input type="text" name="name" value="{{ $areas->name }}"></p>
    <input type="submit" value="編集する">
</form>