<h1>Add Members</h1>

<form action="/add" method="POST">
@csrf

    <input type="text" name="name" placeholder="Enter Name"><br><br>
    <input type="text" name="address" placeholder="Enter address"><br><br>
    <input type="text" name="email" placeholder="Enter email"><br><br>
    <button type="submit">Add Member</button>
</form>