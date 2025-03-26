<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>

    @csrf
        <input type="text" name="fname" placeholder="First name">
        <input type="text" name="lname" placeholder="Last name">
        <button type="submit">Submit</button>
    </form>

    @if (isset($fname))
        {{$fname}} {{$lname}}
    
    @endif
</body>
</html>