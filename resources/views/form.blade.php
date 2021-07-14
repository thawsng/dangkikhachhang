<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Form</h1>
<form action="/" method="post">
    {{csrf_field()}}
    <div>
        <label for="Inumber">Identity Number</label>
        <input type="text" id="inumber" name="identitynumber" placeholder="Identity Number..">
        <br><br>

        <label for="fname">First Name</label>
        <input type="text" id="fname" name="fisrtname" placeholder="First Name..">
        <br><br>

        <label for="lname">Last Name</label>
        <input type="text" id="lnamename" name="lastname" placeholder="Last Name..">
        <br><br>

        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" placeholder="Phone..">
        <br><br>

        Gender <input type="radio" name="gender" value="male"> Male <input type="radio" name="gender" value="female"> Female
        <br><br>
        <input type="Submit">
        <input type="reset">
    </div>
</form>
</body>
</html>
