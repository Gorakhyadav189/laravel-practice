<h2>Edit Contact</h2>

<form method="POST" action="/contact/update/{{ $contact->id }}">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $contact->name }}"><br><br>
    <input type="email" name="email" value="{{ $contact->email }}"><br><br>

    <button type="submit">Update</button>
</form>