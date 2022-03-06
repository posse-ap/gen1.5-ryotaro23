<h1>詳細画面</h1>
<p><a href="{{ route('post.index')}}">一覧画面</a></p>

<table border="1">
    <tr>
        <th>id</th>
        <th>title</th>
        <th>created_at</th>
        <th>updated_at</th>
    </tr>
    <tr>
        <td>{{ $area->id }}</td>
        <td>{{ $area->name }}</td>
        <td>{{ $area->created_at }}</td>
        <td>{{ $area->updated_at }}</td>
    </tr>
</table>