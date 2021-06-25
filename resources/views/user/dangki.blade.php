<!DOCTYPE html>
<html>
<style>
    input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>
<body>

<h3>
    Dang ki khach hang
</h3>

<div>
    <form action="/user/dang-ki" method="post">
        @csrf
        <label for="fname">Full Name</label>
        <input type="text" id="fname" name="fullname" placeholder="Full name..">

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Email..">

        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" placeholder="Phone..">

        <label for="address">Address</label>
        <input type="text" id="address" name="address" placeholder="Address..">

        <label for="icard">Identity Card</label>
        <input type="text" id="icard" name="identitycard" placeholder="Identity Card..">

        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
