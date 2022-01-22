@extends('layouts.app')

@section('content')

{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                       <style>
                           body {font: 1em "Helvetica Neue", Helvetica, Arial, sans-serif;padding: 80px 0 0 0}
a,a:hover {text-decoration: none}

.container { display: block; width: 50%; margin: 0 auto; }

 .radius {
-moz-border-radius: 6px;
-webkit-border-radius: 6px;
border-radius: 6px;
-webkit-background-clip: padding-box;
}


.trendy_btn {
display: block;
margin: 20px;
padding: 18px;
text-align: center;
-o-transition: .4s;
-ms-transition: .4s;
-moz-transition: .4s;
-webkit-transition: .4s;
transition: .4s;
}
span.txt { display: block; position: relative; z-index: 2; }


a.button_one { position: relative; overflow: hidden; width: 260px; font-size: 1.4em; letter-spacing: 2px; background-color: #46352b; color: #fff; text-shadow: 0 1px 0 rgba(0,0,0,0.7); }
a.button_one:hover { background-color: #31251e; }
a.button_one:active { top: 1px;
-o-transition: none;
-ms-transition: none;
-moz-transition: none;
-webkit-transition: none;
transition: none;
}


a.button_two { position: relative; overflow: hidden; width: 260px; font-size: 1.4em; font-weight: 700; background-color: #b52122; color: #fff; text-shadow: 0 1px 0 rgba(0,0,0,0.7); }
a.button_two:hover { background-color: #d33031; }
a.button_two:active { top: 1px;
-o-transition: none;/*  movement the btn **/
-ms-transition: none;
-moz-transition: none;
-webkit-transition: none;
transition: none;
}


a.button_three { position: relative; overflow: hidden; width: 260px; font-size: 1.4em; font-weight: 700; background-color: #007bc5; color: #fff; text-shadow: 0 1px 0 rgba(0,0,0,0.7); }
a.button_three:active { top: 1px;
-o-transition: none;
-ms-transition: none;
-moz-transition: none;
-webkit-transition: none;
transition: none;
}

                       </style>
                    <div>

                            <div class="container">
                                <a class="trendy_btn button_one radius gradient shadow" href="{{ url('appearInfo') }}" title="Button One"><span class="txt"> appear </span></a>
                                <a class="trendy_btn button_two radius shadow" href="{{ url('create') }}" title="Button Two"><span class="txt"> </span>create player </a>

                                <a class="trendy_btn button_two radius shadow" href="{{ url('createMatch') }}" title="Button Two"><span class="txt"> </span>create Match </a>
                                <a class="trendy_btn button_three radius shadow" href="{{ url('attach') }}" title="Button Three"><span class="txt"> connect</span></a>
                                </div>



                    </div>

                    {{-- {{ __('You are logged in!') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
