<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <title>Department of Variety Gaming - Hack The Future 2022</title>
</head>
<body>
    <header>
        <h1>Welcome to the potion hub!</h1>
        <img src="{{asset('img/wizard-mage.gif')}}" alt="wizard-gif" class="wizard">
    </header>
    <main>
        <div class="container">
            <div class="col">
                <h2>Ingredients!</h2>
                <div>
                    <ul>
                        {{-- @foreach ($ingredients as $ingredient)
                            <li>{{$ingredient->name}}</li>
                        @endforeach--}}
                    </ul>
                </div>
            </div>

            <div class="col">
                <h2>Make your potion!</h2>

            </div>

            <div class="col">
                <h2>Brewed potions</h2>

            </div>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
