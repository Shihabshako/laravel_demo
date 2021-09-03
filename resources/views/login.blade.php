<x-header data="Login Page"/>
@if (session('userNeedAuth'))
    <span style="color:red" >You Need to login first</span>
@endif
<form action="usersAuth" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Username" value="{{old('username')}}"><br>
    <span>
        @error('username')
            <span style="color:red">{{$message}}</span>
        @enderror
    </span>
    <br>
    <input type="password" name="password" placeholder="password"><br>
    <span>
        @error('password')
            <span style="color:red">{{$message}}</span>
        @enderror
    </span>
    <br>
    <button type="submit">Login</button>
</form>