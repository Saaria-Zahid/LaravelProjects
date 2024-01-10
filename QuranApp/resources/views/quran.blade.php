<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Amiri+Quran&family=Aref+Ruqaa&display=swap" rel="stylesheet">
    <style>
        td {
            font-family: 'Amiri Quran', serif;
        }
    </style>

</head>

<body>

    <div class="container">


        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Surah Name</th>
                    <th scope="col">Surah Name Meaning</th>
                    <th scope="col">Surah English Name</th>
                    {{-- <th scope="col">Verses</th> --}}
                    <th scope="col">RevealationType</th>
                    <th scope="col">ReadSurah
                    </th>
                </tr>
            </thead>
            <tbody>
              
              @foreach ($surahdata as $dataa)
                    <tr>

                        <td>{{ $dataa['number'] }} </td>
                        <td>{{ $dataa['name'] }} </td>
                        <td>{{ $dataa['englishName'] }} </td>
                        <td>{{ $dataa['englishNameTranslation'] }} </td>
                        {{-- <td>{{ $dataa['numberOfAyahs'] }} </td> --}}
                        <td>{{ $dataa['revelationType'] }} </td>
                    
                        @foreach ($dataa['ayahs'] as $ayah)
                     @if ($dataa['surahs']['number'] . $ayah['number'])
  
                        <button>  {{ $ayah['text'] }} </button>
                     @endif
                    @endforeach
                   
                 



                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>