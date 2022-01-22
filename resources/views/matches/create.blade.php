@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        <style type="text/css">
.form-style-5{
	max-width: 200px;
	padding: 10px 20px;
	background: #f4f7f8;
	margin: 10px auto;
	padding: 50%;
	background: #f4f7f8;
	border-radius: 8px;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-5 fieldset{
	border: none;
    margin-left: 20px
}

.form-style-5 label {
	display: block;
	margin-bottom: 8px;
    color: #16a085;
    font-size: 2em;
}
.form-style-5 input[type="text"],
.form-style-5 input[type="date"],
.form-style-5 input[type="datetime"],
.form-style-5 input[type="email"],
.form-style-5 input[type="number"],
.form-style-5 input[type="search"],
.form-style-5 input[type="time"],
.form-style-5 input[type="url"],
.form-style-5 textarea,
.form-style-5 select {
	font-family: Georgia, "Times New Roman", Times, serif;
	background: rgba(255,255,255,.1);
	border: none;
	border-radius: 4px;
	font-size: 15px;
	margin: 0;
	outline: 0;
	padding: 10px;
	width: 100%;
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	background-color: #e8eeef;
	color:#8a97a0;
	-webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
	box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
	margin-bottom: 30px;
}


.form-style-5 .number {
	background: #1abc9c;
	color: #fff;
	height: 30px;
	width: 30px;
	display: inline-block;
	font-size: 0.8em;
	margin-right: 4px;
	line-height: 30px;
	text-align: center;
	text-shadow: 0 1px 0 rgba(255,255,255,0.2);
	border-radius: 15px 15px 15px 0px;
}

.form-style-5 input[type="submit"],
.form-style-5 input[type="button"]
{
	position: relative;
	display: block;
	padding: 19px 39px 18px 69px;
	color: #FFF;
	margin: 0 auto;
    margin-left: 20px;
	background: #1abc9c;
	font-size: 18px;
	text-align: center;
	font-style: normal;
	width: 30%;
	border: 1px solid #16a085;
	border-width: 1px 1px 3px;
	margin-bottom: 20px;
    margin-left: 30px;
}
.form-style-5 input[type="submit"]:hover,
.form-style-5 input[type="button"]:hover
{
	background: #109177;
}

    </style>
    <title>Document</title>
</head>
<body>
    <div class="form-style-5">
        <form  method="POST"  action="{{ url('store') }}" >
            <fieldset>
                <label for="">create player</label>
                <input name="_token"type="hidden"  value="{{ csrf_token() }}">
             <input type="text" name="name" placeholder="First name*">
             <input type="text" name="user_name" placeholder="Last Name">
             <input type="email" name="email" placeholder=" Email player">
             {{-- <input type="text" name="def_pos" placeholder="Position"> --}}
             	<select id="job" name="def_pos">
                	            <optgroup label="Positions">
                              <option value="offensive">offensive</option>
                	              <option value="defensive">defensive</option>
                	              <option value="midfielder">midfielder</option>
                	              <option value="right winger">right winger</option>
                                  <option value="left winger">left winger</option>
                                  <option value="goal keeper">goal keeper</option>

                	            </optgroup>

                	            </select>

             <input type="number" name="phone" placeholder="Phone">
            </fieldset>

            <input type="submit" value="Save  " />
            </form>
            </div>








    </body>
</html>
@endsection
