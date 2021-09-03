<x-header data="List from DB" />

<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
    </tr>
    @foreach ($listData as $item)
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['name']}}</td>
            <td>{{$item['email']}}</td>
            <td>{{$item['address']}}</td>
        </tr>
    @endforeach
</table>

<span>
    {{$listData->links()}}
</span>

<style>
    .w-5{
        display: none;
    }
</style>