<h1>User Login</h1>
<x-header data="Login Page"/>

<form action="users" method="POST">
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