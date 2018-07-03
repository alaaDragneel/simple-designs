<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Css For Backend Developers</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> --}}

        <link rel="stylesheet" href="/css/all.css">
        <link rel="stylesheet" href="/css/app.css">

    </head>

    <body class="font-sans p-6">

        <div class="container mx-auto">

            <div class="flex">
                @php
                    $plans = [
                        ['name' => 'Monthly', 'price' => '15', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'],
                        ['name' => 'Yearly', 'price' => '30', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'],
                        ['name' => 'Forever', 'price' => '60', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'],
                        ['name' => 'Teams', 'price' => '50', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'],
                    ];
                @endphp

                @include('plan', $plans[0])

                @include('plan', $plans[1])

                @include('plan', $plans[2])

                @include('plan', $plans[3])

            </div>
        
        </div>

    </body>
</html>
