<h2>Welcome to Employee-User</h2>
<table border="1">
    <thead>
        <tr>
            <th>No.</th>
            <th>Employee Name</th>
            <th>Employee Code</th>
            <th>User Name</th>
        </tr>
    </thead>
    <tbody>
        @php
        $i = 0;
        @endphp
        @foreach ($mergeTable as $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $item->emp_name }}</td>
            <td>{{ $item->emp_code }}</td>
            <td>{{ $item->name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<br>
<span>
    {{$mergeTable->links()}}
</span>
<br><br>
<button><a href="user">User List</a></button>
<button><a href="employee">Employee List</a></button>

<style>
    .w-5 {
        display: none;
    }
</style>