<h2>Update User</h2>
<form action="{{$users->id}}" method="POST">
    @csrf
    <input type="hidden" name="id" id="id" value="{{$users->id}}" id="id" />
    <input type="text" name="name" placeholder="User Name" value="{{$users->name}}"/><br><br>
    <input type="password" name="password" placeholder="Password" value="{{$users->password}}"/><br><br>
    <input type="submit" value="Update">
</form>