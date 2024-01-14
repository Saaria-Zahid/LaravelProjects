<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $ayat['name'] }} | Islam 365</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri+Quran&family=Aref+Ruqaa&display=swap" rel="stylesheet">
    <style>
          body{

background-color: rgb(236, 236, 236) 

}

*{
   font-family: 'Amiri Quran', serif;
}

a{
   text-decoration: none;
   color: black;
}
p{
   font-size: 30px;
}
      .previous {
 
  color: black;
}



    </style>
</head>

<body>
    <nav class="navbar bg-body-tertiary bg-primary border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid justify-content-center">
            <a class="navbar-brand " style="font-size: 40px;" href="../quran/">Islam 365</a>
       
         
        </div>
    </nav><br><br><br>

    <a href="../quran" class="previous h3 m-5">&laquo; Previous</a>
    
    <div class="container bg-light p-5 rounded">
        <div class="row">

            <div class="col-md-6">
                <h1 class="text-start">{{$ayat['englishName']}}</h1>
            </div>

            <div class="col-md-6">
                <h1 class="text-end">{{$ayat['name']}}</h1>
            </div>
            
            
            @foreach ($ayat['ayahs'] as $Ayah)
            
            <p class="text-center"><span >{{ $Ayah['numberInSurah'] }}. </span>{{ $Ayah['text'] }}</p>
            <audio controls >
                
                <source src="{{$Ayah['audio']}}" type="audio/mp3" >
                    
                </audio>
                @endforeach
                
              
            </div>
 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>