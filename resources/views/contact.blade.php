<h2>Contact Form</h2>

<form method="POST" action="/contact">
    @csrf
    <input type="text" name="name" placeholder="Enter Name"><br><br>
    <input type="email" name="email" placeholder="Enter Email"><br><br>
    <button type="submit">Submit</button>
</form>