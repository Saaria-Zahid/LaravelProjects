<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayah Details</title>
    <!-- Add your CSS or link Bootstrap -->
</head>

<body>
    <div class="container">
        <h1>Ayah Details</h1>
        <div>
            <p>Surah Number: {{ $surah }}</p>
            <p>Ayah Number: {{ $ayah }}</p>
        </div>
        <hr>
        <div>
            <h3>Ayah Text:</h3>
            <p>{{ $ayahText }}</p>
        </div>
    </div>
</body>

</html>
