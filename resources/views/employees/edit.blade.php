<h2>Update Employee</h2>
<form action="{{$employees->id}}" method="POST">
    @csrf
    <input type="hidden" name="id" id="id" value="{{$employees->id}}" id="id" />
    <select name="user_id">
        @foreach ($user as $item)
        <option value="{{ $item->id }}" @if($item->id == $employees->user_id) selected @endif> {{ $item->name }}</option>
        @endforeach
    </select><br><br>
    <input type="text" name="emp_name" placeholder="Employee Name" value="{{$employees->emp_name}}" /><br><br>
    <input type="text" name="emp_code" placeholder="Employee Code" value="{{$employees->emp_code}}" /><br><br>
    <input type="submit" value="Update">
</form>