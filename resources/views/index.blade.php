<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Bangla PDF</title>
</head>
<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    a {
        background-color: #585883;
        padding: 11px 25px;
        color: #ffffff;
        font-size: 15px;
        font-weight: 600;
        border: 1px solid #585883;
        border-radius: 5px;
    }

    a:hover {
        background-color: #5252a3;
        border: 1px solid #5252a3;
    }
</style>

<body>
    <div class="container">
        <a href="{{ route('view.pdf') }}">View PDF</a>
    </div>
</body>

</html>
