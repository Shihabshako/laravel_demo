<x-header data="List from DB" />

@if (session('memberDelete') == 'success')
    <span style="color:green">Member Deleted successfully</span>
@elseif(session('memberDelete') == 'error')
    <span style="color:red">Filed to Delete member</span>
@endif

@if (session('memberEdit') == 'success')
    <span style="color:green">Member Updated successfully</span>
@elseif(session('memberEdit') == 'error')
    <span style="color:red">Filed to update member</span>
@endif

<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Action</th>
    </tr>
    @foreach ($listData as $item)
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['name']}}</td>
        <td>{{$item['email']}}</td>
        <td>{{$item['address']}}</td>
        <td>
            <a href="delete/{{$item['id']}}">Delete</a>
            <a href="edit/{{$item['id']}}">Edit</a>

        </td>
    </tr>
    @endforeach
</table>

<span>
    {{$listData->links()}}
</span>

<style>
    .w-5 {
        display: none;
    }
</style>