<h2>All Contacts</h2>

<table>
    <tr>
        <th>S.No</th>
        <th>name</th>
        <th>email</th>
        <th>Action</th>
    </tr>
     @foreach($contacts as $contact)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->email }}</td>
            <td>
        <!-- Edit Button -->
        <a href="/contact/edit/{{ $contact->id }}">Edit</a>

        <!-- Delete Button -->
        <form action="/contact/delete/{{ $contact->id }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </td>

        </tr>
    @endforeach

</table>