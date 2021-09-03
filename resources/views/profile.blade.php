<x-header data="Profile Page"/>
@if (session('userLoginStatus'))
    <span style="color:green"> login Succesfull</span>
@endif

<h2>Hello {{session('username')}}</h2>
<a href="/logout">Logout</a>