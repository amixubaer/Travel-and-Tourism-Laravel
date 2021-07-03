<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Hotel List</title>
		<link rel="stylesheet" href="{{asset('css/adminstyle.css')}}">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
	    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,400,500,600" rel="stylesheet" type="text/css">
	</head>
	<body>

		<!--wrapper start-->
		<div class="wrapper">
		@include ('admin.sidebar')

			<!--main container start-->
			<div class="main-container">

				<center>
					<h1>Hotels</h1>
				</center>
				
				<table id="table" border="1">
                   <tr>
                        <th> Id </th>
                        <th> User Id</th>
                        <th> Room Id </th>
                        <th> Arrival Date </th>
                        <th> Departure Date </th>
                        <th> Status </th>
                        <th> Action </th>
                    </tr>

                @foreach($showhotelallboking as $roombook)
                    <tr>
                        <td> {{$roombook->id}} </td>
                        <td> {{$roombook->user_id}}  </td>
                        <td> {{$roombook->room_id}} </td>
                        <td> {{$roombook->fromdate}} </td>
                        <td> {{$roombook->todate}}  </td>
                        <td> {{$roombook->req}}  </td>
                        <td> <a href="{{route('hotel.showcustomerroominfo', [$roombook->id])}}"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                        <a href="{{route('hotel.bookingdelete', [$roombook->id])}}"><i class="fa fa-trash" aria-hidden="true"></i></a> </td>
                @endforeach
                </table>

                    
                </table>

				
			</div>
			<!--main container end-->
		</div>
		<!--wrapper end-->

		<style>
			body{
				color: white;
				background-color:rgb(114, 155, 172);
			}

			.wrapper .main-container #table {
		        font-family: Arial, Helvetica, sans-serif;
		        border-collapse: collapse;
		        width: 70%;
		        margin: auto;
		        color: #34495e;
		        border-radius: 0px;
		        text-align: center;
		        font-weight: bold;
		        box-shadow: 0px 0px 30px black;
		        margin-top: 5vh;
		      }

		      .wrapper .main-container #table td, #table th {
		        padding: 10px;
		      }

		      .wrapper .main-container #table tr:nth-child(even){
		      	background-color: #f2f2f2;
		      }
		      .wrapper .main-container #table tr:nth-child(odd){
		      	background-color: #cdcfd0;
		      }

		      .wrapper .main-container #table tr:hover {
		      	background-color: #ddd;
		      }

		      .wrapper .main-container #table th {
		        padding-top: 12px;
		        padding-bottom: 12px;
		        text-align: center;	
		        background-color: #2e4154;
		        color: white;
		      }

			.wrapper .main-container #table tr td a{
				color: #34495e;
				cursor: pointer;
				transition: 0.3s;
				transition-property: color;
			}

			.wrapper .main-container #table tr td a:hover{
				color: red;
			}


		</style>

	</body>
</html>