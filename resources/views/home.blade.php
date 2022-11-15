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
            <div class="col1">
                <h2>Ingredients!</h2>
                <div>
                    {{$ingredients}}
                    @foreach($ingredients as $ingredient)
                        <div>
                            <p>{{$ingredient['name']}}</p>
                            <img src="{{ asset('img/' . $ingredient['name'] . '.png') }}" alt="{{$ingredient['name']}}" class="{{$ingredient['name']}}">
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col2">
                <h2>Make your potion!</h2>
                <img src="{{asset('img/cauldron.gif')}}" alt="cauldron" class="cauldron"/>
                <button class=button>Add to potion!</button>
            </div>

            <div class="col3">
                <h2>Brewed potions</h2>
                <ul>
                    <li class="row1">SLOT 1 <img src="{{asset('img/flask-1.png')}}" alt="temp" class="temp"/></li>
                    <li class="row1">SLOT 2 <img src="{{asset('img/flask-1.png')}}" alt="temp" class="temp"/></li>
                    <li class="row1">SLOT 3 <img src="{{asset('img/flask-1.png')}}" alt="temp" class="temp"/></li>
                    <li class="row2">SLOT 4 <img src="{{asset('img/flask-1.png')}}" alt="temp" class="temp"/></li>
                    <li class="row2">SLOT 5 <img src="{{asset('img/flask-1.png')}}" alt="temp" class="temp"/></li>
                    <li class="row2">SLOT 6 <img src="{{asset('img/flask-1.png')}}" alt="temp" class="temp"/></li>
                    <li class="row3">SLOT 7 <img src="{{asset('img/flask-1.png')}}" alt="temp" class="temp"/></li>
                    <li class="row3">SLOT 8 <img src="{{asset('img/flask-1.png')}}" alt="temp" class="temp"/></li>
                    <li class="row3">SLOT 9 <img src="{{asset('img/flask-1.png')}}" alt="temp" class="temp"/></li>
                    {{-- @foreach ($potions as $potion)
                        <li>{{$potion->name}}</li>
                    @endforeach--}}
                </ul>

            </div>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
