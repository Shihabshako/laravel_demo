<x-header data="Edit a member" />

<form action="updateMember" method="post">
    @csrf
    <input type="text" name="id" placeholder="id" value="{{$data['id']}}" readonly><br><br>
    <input type="text" name="name" placeholder="Name" value="{{$data['name']}}"><br><br>
    <input type="text" name="email" placeholder="Email" value="{{$data['email']}}"><br><br>
    <input type="text" name="address" placeholder="Address" value="{{$data['address']}}"><br><br>
    <a href="/list">Cancel</a>
    <button type="submit">Update</button>
</form>