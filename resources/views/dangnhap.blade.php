
<form action="{{route('login.auth')}}" method="post">
    @csrf
    <input type="text" name="tk">
    <input type="text" name="mk">
    <input type="submit" value="đăng nhập">
</form>