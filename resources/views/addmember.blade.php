<x-header data="Add a member" />

@if (session('memberAdd') == 'success')
    <span style="color:green">Member Added successfully</span>
@elseif(session('memberAdd') == 'error')
    <span style="color:red">Filed to add member</span>
@endif

<form action="addmember" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name"><br><br>
    <input type="text" name="email" placeholder="Email"><br><br>
    <input type="text" name="address" placeholder="Address"><br><br>
    <button type="submit">Submit</button>
</form>