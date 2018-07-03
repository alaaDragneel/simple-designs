<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Css For Backend Developers</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> --}}

        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/all.css">
        <link rel="stylesheet" href="/css/tailwind.min.css">
        <link rel="stylesheet" href="/css/app.css">

    </head>

    <body class="flex justify-center items-center">
        {{-- Second Utilities Approache --}}
        <div class="card flex rounded">
            {{-- Left --}}
            <div class="card-left flex flex-col justify-between rounded p-6 items-center text-center text-white">
                <a href="#" class="card-skill-button no-underline text-sm rounded-full py-1 px-6 text-inherit">PHP</a>

                <img src="/images/image.png" alt="PHP" title="PHP">

                <span class="card-difficulty text-xs">Intermediate Difficulty</span>
            </div>

            {{-- Right --}}
            <div class="card-right flex flex-col text-grey-darker p-6">
               <h3 class="card-title text-black font-light text-3xl mb-3"><a href="#" class="no-underline text-inherit">Training On Css</a></h3> 

               <p class="card-description flex-1">
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, velit quod aperiam cupiditate maxime, aut labore, esse nostrum tempora, in fugit repellat.
               </p>

               <div class="card-meta flex text-sm">
                    <div class="mr-4">
                        <i class="fas fa-book"></i>
                        5 Lessons
                    </div>
                    
                    <div>
                        <i class="far fa-clock"></i>
                        53:10 min
                    </div>
               </div>
            </div>
        </div>
    </body>
</html>
