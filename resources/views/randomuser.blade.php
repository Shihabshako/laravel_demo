<h1>Random users page {{$page}}</h1>

<a href="/randomUsers?page=1">Page1</a><br>
<a href="/randomUsers?page=2">Page2</a><br>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Fullname</th>
        <th>Email</th>
        <th>Image</th>
    </tr>
    @foreach ($data as $item)
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['first_name'].' '.$item['last_name']}}</td>
            <td>{{$item['email']}}</td>
            <td><img src="{{$item['avatar']}}" alt=""></td>
        </tr>        
    @endforeach
</table>