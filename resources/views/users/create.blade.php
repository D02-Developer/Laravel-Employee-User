<h2>Add New User</h2>
<form action="add" method="POST">
    @csrf
    <input type="text" name="name" placeholder="User Name"/><br><br>
    <input type="password" name="password" placeholder="Password"/><br><br>
    <input type="submit" value="Add">
</form>