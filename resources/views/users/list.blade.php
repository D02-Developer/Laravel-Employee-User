<h2>List of User</h2>
<table border="1">
    <thead>
        <tr>
            <th>No.</th>
            <th>User Name</th>
            <th>Password</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @php
        $i = 0;
        @endphp
        @foreach ($users as $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->password }}</td>
            <td>
                <button><a href="user/edit/{{ $item->id }}">Update</a></button>
                <button><a href="user/delete/{{ $item->id }}">Delete</a></button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<br>
<span>
    {{$users->links()}}
</span>
<br><br>
<button><a href="user/add">ADD</a></button>
<button><a href="employee">Employee List</a></button>
<button><a href="/">Main List</a></button>

<style>
    .w-5 {
        display: none;
    }
</style>