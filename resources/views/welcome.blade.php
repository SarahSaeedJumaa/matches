<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Matches</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->







        <style>

       /*     @media (min-width: 500px)
.sm\:pt-0 {
    body{
        width:500px;
    }
    .container{
        padding-top: 0;
    padding-left:100px;
    }
     .big{
         display: none;
     }
      @media(max-width: 400px) {
  /* body {
    background-color: rgb(110, 18, 18);
  }
  .big{
    display: block;
  }



}

@media (min-width: 500px)
.sm\:items-center {
    align-items: center;
}*/
body {font: 1em "Helvetica Neue", Helvetica, Arial, sans-serif;padding: 80px 0 0 0}
a,a:hover {text-decoration: none}

.container { display: block; width: 50%; margin: 0 auto; }

.radius {

border-radius: 6px;

}


.trendy_btn {
display: block;
margin: 20px;
margin-left: 200PX;
padding: 18px;
text-align: center;
-o-transition: .4s;
-ms-transition: .4s;
-moz-transition: .4s;
-webkit-transition: .4s;
transition: .4s;
}



a.button_one { position: relative; overflow: hidden; width: 260px; font-size: 1.4em; letter-spacing: 2px; background-color: #46352b; color: #fff; text-shadow: 0 1px 0 rgba(0,0,0,0.7); }

/* for movment*/
a.button_one:active { top: 1px;
-o-transition: none;
-ms-transition: none;
-moz-transition: none;
-webkit-transition: none;
transition: none;
}


a.button_two { position: relative; overflow: hidden; width: 260px; font-size: 1.4em; font-weight: 700; background-color: #b52122; color: #fff; text-shadow: 0 1px 0 rgba(0,0,0,0.7); }

a.button_two:active { top: 1px;
-o-transition: none;/*  movement the btn **/
-ms-transition: none;
-moz-transition: none;
-webkit-transition: none;
transition: none;
}
        </style>
    </head>
    <body class="antialiased">
        <div class="big">
            @if (Route::has('login'))
                <div class="container">
                    @auth
                      <a  class="trendy_btn button_one radius gradient shadow"href="{{ url('/home') }}" class=" ">Home</a>

                    @else
                      <a href="{{ route('login') }}"  class="trendy_btn button_one radius gradient shadow">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="trendy_btn button_two radius gradient shadow">Register</a>
                    @endif
                    @endauth

                </div>
            @endif


                </div>
            </div>
        </div>
    </body>
</html>
