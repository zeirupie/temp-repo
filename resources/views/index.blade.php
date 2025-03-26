<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        @csrf
        <div>
            <label>First name:</label>
            <input type="text" name="fname" />
        </div>
        <div>
            <label>First name:</label>
            <input type="text" name="fname" />
        </div>
        <div>
            <label>Middle name:</label>
            <input type="text" name="mname" />
        </div>
        <div>
            <label>Last name:</label>
            <input type="text" name="lname" />
        </div>
        <div>
            <label>Suffix:</label>
            <input type="text" name="suffix" />
        </div>
        <div>
            <label>Gender</label>
            <input type="radio" value="M" name="gender" /> Male
            <input type="radio" value="F" name="gender" /> Female
        </div>
        <input type="date" name="bdate" />
        <button type="submit">Submit</button>
    </form>
</body>

</html>