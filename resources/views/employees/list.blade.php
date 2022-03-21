<h2>List of Employee</h2>
<table border="1">
    <thead>
        <tr>
            <th>No.</th>
            <th>Employee Name</th>
            <th>Employee Code</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @php
        $i = 0;
        @endphp
        @foreach ($employees as $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $item->emp_name }}</td>
            <td>{{ $item->emp_code }}</td>
            <td>
                <button><a href="employee/edit/{{ $item->id }}">Update</a></button>
                <button><a href="employee/delete/{{ $item->id }}">Delete</a></button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<br>
<span>
    {{$employees->links()}}
</span>
<br><br>
<button><a href="employee/add">ADD</a></button>
<button><a href="user">User List</a></button>
<button><a href="/">Main List</a></button>

<style>
    .w-5 {
        display: none;
    }
</style>