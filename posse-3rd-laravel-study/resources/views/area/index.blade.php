<h1>一覧画面</h1>
<p><a href="{{ route('post.create') }}">新規追加</a></p>
<!-- ここでのruteはコントローラーのname()にアクセスしている -->
 
@if ($message = Session::get('success'))
<p>{{ $message }}</p>
@endif
 
<table border="1">
    <tr>
        <th>name</th>
        <th>詳細</th>
        <th>編集</th>
        <th>削除</th>
    </tr>
    @foreach ($areas as $area)
    <tr>
        <td><a href="/post/choice/answer/{{$area->id}}">{{ $area->name }}</a></td>
        <th><a href="{{ route('post.show',$area->id)}}">詳細</a></th>
        <th><a href="{{ route('post.edit',$area->id)}}">編集</a></th>
        <th>
            <form action="{{ route('post.destroy', $area->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" name="" value="削除">
            </form>
        </th>
    </tr>
    @endforeach
</table>