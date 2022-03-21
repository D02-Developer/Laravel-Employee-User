<h2>Add New Employee</h2>
<form action="add" method="POST">
    @csrf
    <select name="user_id">
        @foreach ($user as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select><br><br>
    <input type="text" name="emp_name" placeholder="Employee Name" /><br><br>
    <input type="text" name="emp_code" placeholder="Employee Code" /><br><br>
    <input type="submit" value="Add">
</form>