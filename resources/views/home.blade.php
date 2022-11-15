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
        <img src="{{asset('img/wizard-mage.gif')}}" alt="wizard-gif" class="wizard"/>
    </header>
    <main>
        <div class="container">
            <div class="col">
                <h2>Ingredients!</h2>
                <div>
                    <ul>
                        <li class="row1">Basil <img src="{{asset('img/basil.png')}}" alt="basil" class="basil"/></li>
                        <li class="row1">Chives <img src="{{asset('img/chives.png')}}" alt="chives" class="chives"/></li>
                        <li class="row1">Flask <img src="{{asset('img/flask-1.png')}}" alt="flask" class="flask"/></li>
                        <li class="row2">Lavender <img src="{{asset('img/lavender.png')}}" alt="lavender" class="lavender"/></li>
                        <li class="row2">Oregano <img src="{{asset('img/oregano.png')}}" alt="oregano" class="oregano"/></li>
                        <li class="row2">Rosemary <img src="{{asset('img/rosemary.png')}}" alt="rosemary" class="rosemary"/></li>
                        <li class="row3">Sage <img src="{{asset('img/sage.png')}}" alt="sage" class="sage"/></li>
                        <li class="row3">Wands <img src="{{asset('img/wands.png')}}" alt="wands" class="wands"/></li>
                        <li class="row3">Specialities <img src="{{asset('img/potions.png')}}" alt="potions" class="potions"/></li>
                        {{-- @foreach ($ingredients as $ingredient)
                            <li>{{$ingredient->name}}</li>
                        @endforeach--}}
                    </ul>
                </div>
            </div>

            <div class="col">
                <h2>Make your potion!</h2>
                <img src="{{asset('img/cauldron.gif')}}" alt="cauldron" class="cauldron"/>
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
