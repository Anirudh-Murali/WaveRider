<?php
$data = file_get_contents("https://api.coinmarketcap.com/v1/ticker/");
print_r($data);
?>
<html>
<head>
<script src="jquery-3.1.1.min.js"></script>
	<link rel="stylesheet" href="materialize.css">
	<script src="materialize.js"></script>
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>

	 <link rel="stylesheet" href="animate.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<style type="text/css">
		::-webkit-scrollbar {
			display: none;
	}
	::-moz-scrollbar {
			display: none;
	}
	.pow{
			box-shadow: inset 0 600px 0 0 #37474f;
	}
	.pointer{
		cursor: pointer;
	}
	.above{
		background: #0E1217;
	}
	#fbButton{
		position: absolute;
		top:57%;
		left: 50%;
		-webkit-transform: translate(-50%,0%);
	}
		</style>
</head>
<body  >
	<!-- <div class="above" id="firstScreen" style="height: 100%;width: 100%">
		<img src="fire-loader.gif" height="60%" style="position: absolute;left: 50%;top: 50%;transform: translate(-50%,0);">
		<div id="fbButton" onclick="login()">
				<a class="waves-effect waves-yellow btn-large"><i class="material-icons left">done</i>Login</a>
			</div>
			<div class="load" style="position: absolute;left: 50%;top: 50%;transform: translate(-50%,-50%);">
			</div>
	</div> -->
<div id="Insurer" style="display: none;overflow: scroll;">
	<nav>
		<div class="nav-wrapper teal">
			<a href="#" class="brand-logo center">Smart Blocks Trading Strategies</a>

			<!-- <a class="brand-logo center">Backtested Results of Statergy 1</a> -->
			<ul id="nav-mobile" class="left hide-on-med-and-down">
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
			</ul>
		</div>
	</nav>



	<!-- <nav class="nav-extended teal">
			<div class="nav-wrapper">
				<a href="#" class="brand-logo center">Smart Blocks Trading Stratergies</a>

				<ul class="left">
					<li><a href="#" data-activates="slide-out" class="butt"><i class="material-icons">menu</i></a></li>
				</ul>

				<ul class="tabs tabs-transparent">
					<li class="tab"><a class="active" href="#test1">Summary</a></li>
					</ul>
			</div>
		</nav> -->
		<div id="test1" class="col s12">
			<div class="row blue-grey darken-3">

				<div class="col l3 s12 m12 hoverable">
					 <div class="card">
						<div class="card-image waves-effect waves-block waves-light" id="conta">

						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Basket 1.1<i class="material-icons right">more_vert</i></span>
							<p><a href="data/1.1/index1.html">Detailed Summary</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Basket 1.1<i class="material-icons right">close</i></span>
							<table class="bordered highlight responsive-table">
	<thead>
		<tr>
				<th>no.of Coins</th>
				<th>Invested</th>
				<th>Returns</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>6</td>
			<td>Equally</td>
			<td>269.86%</td>
		</tr>

	</tbody>
</table>
						</div>
					</div>
			</div>

			<div class="col l3 s12 m12 hoverable">
					 <div class="card">
						<div class="card-image waves-effect waves-block waves-light" id="conta1">

						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Basket 1.2<i class="material-icons right">more_vert</i></span>
							<p><a href="data/1.2/index1.html">Detailed Summary</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Basket 1.2<i class="material-icons right">close</i></span>
							<table class="bordered highlight responsive-table">
	<thead>
		<tr>
				<th>No. Coins</th>
				<th>Invested</th>
				<th>Returns</th>
		</tr>
	</thead>

	<tbody>
		<tr>


			<td>24</td>
			<td>Equally</td>
			<td>313.17%</td>
		</tr>
	</tbody>
</table></div>
					</div>
			</div>
			<div class="col l3 s12 m12 hoverable">
					 <div class="card">
						<div class="card-image waves-effect waves-block waves-light" id="conta2">

						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Basket 1.3<i class="material-icons right" >more_vert</i></span>
							<p><a href="data/1.3/index1.html">Detailed Summary</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Basket 1.3<i class="material-icons right">close</i></span>
							<table class="bordered highlight responsive-table">
	<thead>
		<tr>
				<th>No. Coins</th>
				<th>Invested</th>
				<th>Returns</th>
		</tr>
	</thead>

	<tbody>
		<tr>


			<td>58</td>
			<td>Equally</td>
			<td>288.17%</td>
		</tr>
	</tbody>
</table>

</div>
					</div>
			</div>
			<div class="col l3 s12 m12 hoverable">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light" id="conta3">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Basket 1.4<i class="material-icons right">more_vert</i></span>
							<p><a href="data/1.4/index1.html">Detailed Summary</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Basket 1.4<i class="material-icons right">close</i></span>
							<table class="bordered highlight responsive-table">
	<thead>
		<tr>
				<th>No. Coins</th>
				<th>Invested</th>
				<th>Returns</th>
		</tr>
	</thead>

	<tbody>
		<tr>


			<td>19</td>
			<td>Equally</td>
			<td>224.2%</td>
		</tr>
	</tbody>
</table>
						</div>
						</div>
</div>

<div class="col l3 s12 m12 hoverable">
 <div class="card">
	<div class="card-image waves-effect waves-block waves-light" id="conta2.1">

	</div>
	<div class="card-content">
		<span class="card-title activator grey-text text-darken-4">Basket 2.1<i class="material-icons right">more_vert</i></span>
		<p><a href="data/2.1/index1.html">Detailed Summary</a></p>
	</div>
	<div class="card-reveal">
		<span class="card-title grey-text text-darken-4">Basket 2.1<i class="material-icons right">close</i></span>
		<table class="bordered highlight responsive-table">
<thead>
<tr>
<th>No. Coins</th>
<th>Invested</th>
<th>Returns</th>
</tr>
</thead>

<tbody>
<tr>


<td>6</td>
<td>MarketCap</td>
<td>268.54%</td>
</tr>
</tbody>
</table>    </div>
</div>
</div>
<div class="col l3 s12 m12 hoverable">
 <div class="card">
	<div class="card-image waves-effect waves-block waves-light" id="conta2.2">

	</div>
	<div class="card-content">
		<span class="card-title activator grey-text text-darken-4">Basket 2.2<i class="material-icons right">more_vert</i></span>
		<p><a href="data/2.2/index1.html">Detailed Summary</a></p>
	</div>
	<div class="card-reveal">
		<span class="card-title grey-text text-darken-4">Basket 2.2<i class="material-icons right">close</i></span>
		<table class="bordered highlight responsive-table">
<thead>
<tr>
<th>No. Coins</th>
<th>Invested</th>
<th>Returns</th>
</tr>
</thead>

<tbody>
<tr>


<td>24</td>
<td>MarketCap</td>
<td>321.60%</td>
</tr>
</tbody>
</table>
	</div>
</div>
</div>
<div class="col l3 s12 m12 hoverable">
 <div class="card">
	<div class="card-image waves-effect waves-block waves-light" id="conta2.3">

	</div>
	<div class="card-content">
		<span class="card-title activator grey-text text-darken-4">Basket 2.3<i class="material-icons right">more_vert</i></span>
		<p><a href="data/2.3/index1.html">Detailed Summary</a></p>
	</div>
	<div class="card-reveal">
		<span class="card-title grey-text text-darken-4">Basket 2.3<i class="material-icons right">close</i></span>
		<table class="bordered highlight responsive-table">
<thead>
<tr>
<th>No. Coins</th>
<th>Invested</th>
<th>Returns</th>
</tr>
</thead>

<tbody>
<tr>


<td>58</td>
<td>MarketCap</td>
<td>288.34%</td>
</tr>
</tbody>
</table>


	</div>
</div>
</div>
<div class="col l3 s12 m12 hoverable">
<div class="card">
	<div class="card-image waves-effect waves-block waves-light" id="conta2.4">
	</div>
	<div class="card-content">
		<span class="card-title activator grey-text text-darken-4">Basket 2.4<i class="material-icons right">more_vert</i></span>
		<p><a href="data/2.4/index1.html">Detailed Summary</a></p>
	</div>
	<div class="card-reveal">
		<span class="card-title grey-text text-darken-4">Basket 2.4<i class="material-icons right">close</i></span>
		<table class="bordered highlight responsive-table">
<thead>
<tr>
<th>No. Coins</th>
<th>Invested</th>
<th>Returns</th>
</tr>
</thead>

<tbody>
<tr>


<td>19</td>
<td>MarketCap</td>
<td>225.92%</td>
</tr>
</tbody>
</table>
	</div>
	</div>
</div>

<div class="col l3 s12 m12 hoverable">
 <div class="card">
	<div class="card-image waves-effect waves-block waves-light" id="conta3.1">

	</div>
	<div class="card-content">
		<span class="card-title activator grey-text text-darken-4">Basket 3.1<i class="material-icons right">more_vert</i></span>
		<p><a href="data/3.1/index1.html">Detailed Summary</a></p>
	</div>
	<div class="card-reveal">
		<span class="card-title grey-text text-darken-4">Basket 3.1<i class="material-icons right">close</i></span>
		<table class="bordered highlight responsive-table">
<thead>
<tr>
<th>No. Coins</th>
<th>Invested</th>
<th>Returns</th>
</tr>
</thead>

<tbody>
<tr>


<td>6</td>
<td>Volume</td>
<td>270.85%</td>
</tr>
</tbody>
</table>  </div>
</div>
</div>

<div class="col l3 s12 m12 hoverable">
 <div class="card">
	<div class="card-image waves-effect waves-block waves-light" id="conta3.2">

	</div>
	<div class="card-content">
		<span class="card-title activator grey-text text-darken-4">Basket 3.2<i class="material-icons right">more_vert</i></span>
		<p><a href="data/3.2/index1.html">Detailed Summary</a></p>
	</div>
	<div class="card-reveal">
		<span class="card-title grey-text text-darken-4">Basket 3.2<i class="material-icons right">close</i></span>
		<table class="bordered highlight responsive-table">
<thead>
<tr>
<th>No. Coins</th>
<th>Invested</th>
<th>Returns</th>
</tr>
</thead>

<tbody>
<tr>


<td>24</td>
<td>Volume</td>
<td>316.28%</td>
</tr>
</tbody>
</table>    </div>
</div>
</div>
<div class="col l3 s12 m12 hoverable">
 <div class="card">
	<div class="card-image waves-effect waves-block waves-light" id="conta3.3">

	</div>
	<div class="card-content">
		<span class="card-title activator grey-text text-darken-4">Basket 3.3<i class="material-icons right">more_vert</i></span>
		<p><a href="data/3.3/index1.html">Detailed Summary</a></p>
	</div>
	<div class="card-reveal">
		<span class="card-title grey-text text-darken-4">Basket 3.3<i class="material-icons right">close</i></span>
		<table class="bordered highlight responsive-table">
<thead>
<tr>
<th>No. Coins</th>
<th>Invested</th>
<th>Returns</th>
</tr>
</thead>

<tbody>
<tr>


<td>58</td>
<td>Volume</td>
<td>288.84%</td>
</tr>
</tbody>
</table>  </div>
</div>
</div>
<div class="col l3 s12 m12 hoverable">
<div class="card">
	<div class="card-image waves-effect waves-block waves-light" id="conta3.4">
	</div>
	<div class="card-content">
		<span class="card-title activator grey-text text-darken-4">Basket 3.4<i class="material-icons right">more_vert</i></span>
		<p><a href="data/3.4/index1.html">Detailed Summary</a></p>
	</div>
	<div class="card-reveal">
		<span class="card-title grey-text text-darken-4">Basket 3.3<i class="material-icons right">close</i></span>
		<table class="bordered highlight responsive-table">
<thead>
<tr>
<th>No. Coins</th>
<th>Invested</th>
<th>Returns</th>
</tr>
</thead>

<tbody>
<tr>


<td>19</td>
<td>Volume</td>
<td>228.78%</td>
</tr>
</tbody>
</table>  </div>
	</div>
</div>
					</br>
					</br>
					</br>
					</br>
					</br>
					</br>

			<div class="col s12">&nbsp</div>
			<div class="col s12">&nbsp</div>
			</div>
		</div>
		<!-- <div id="test2" class="col s12" style="min-height: 100%;transition: all ease 1.8s;background: #546e7a">
			<div id="userContent" style="min-height: 100%;width: 100%;display: none;">
				<div class="row">
					<div class="col s12 l3">
						<div class="card small">
								<div class="card-image">
									<img src="bg.jpg">
									<span class="card-title nameOfUser">Card Title</span>
									<a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
								</div>
								<div class="card-content">
									<p class="details">Bought In Year 2017.</p>
								</div>
						</div>
							 <ul class="collapsible" data-collapsible="accordion">
							<li>
								<div class="collapsible-header"><i class="material-icons">filter_drama</i>Personal Data</div>
								<div class="collapsible-body white center"><span class="pdata">Lorem ipsum dolor sit amet.</span></div>
							</li>
							<li>
								<div class="collapsible-header"><i class="material-icons">place</i>Analysed Tags</div>
								<div class="collapsible-body center white"><span class="tagss">Lorem ipsum dolor sit amet.</span></div>
							</li>
							<li>
								<div class="collapsible-header"><i class="material-icons">whatshot</i>Other</div>
								<div class="collapsible-body center white"><span>Lorem ipsum dolor sit amet.</span></div>
							</li>
						</ul>
					</div>
					<div class="col s12 l9" >
						<div class="card"  style="height: 30%" id="map">

						</div>
					</div>
					<div class="col s12 l5" >
						<div class="card" id="conta4">

						</div>
					</div>
					<div class="col s12 l4" >
						<div class="card">
							<div class="card-content">
								<p id="test8">I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
								<p id="test5">I am a very simple . I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
								<p id="test6">I am a very  card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
							</div>
							<div class="card-tabs">
								<ul class="tabs tabs-fixed-width">
									<li class="tab"><a href="#test8">Twitter</a></li>
									<li class="tab"><a class="active" href="#test5">Band</a></li>
									<li class="tab"><a href="#test6">Cr/De Cards</a></li>
								</ul>
							</div>
							<div class="card-content grey lighten-4">
								<div>Variable Dashboard</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row container lala" style="display: block">
				<div class="col s12 m6 l4 animated fadeInUp lifeClass">
						<div class="card"  style="background-color: #0E1717">
							<div class="card-content white-text">
									<ul class="collection" style="background-color: #0E1717;border:1px solid transparent">
							<li class="collection-item avatar"  style="background-color: #0E1717;border:1px solid transparent">
							 <i class="material-icons circle green">flash_on</i>
								<span class="title" >THIS HOURS USAGE</span>
								<p id="usageToday">First Line <br>
									 Second Line
								</p>
							</li>
						 </ul>
						 <div class="card-action">
									 <a class="waves-effect waves-light btn" onclick="showUserData()"><i class="material-icons right">cloud</i>button</a>
									</div>
							</div>
						</div>
					</div>
					<div class="col s12 m6 l4 animated fadeInUp lifeClass" style="animation-delay: 0.5s;">
						<div class="card"  style="background-color: #0E1717">
							<div class="card-content white-text">
									<ul class="collection" style="background-color: #0E1717;border:1px solid transparent">
							<li class="collection-item avatar"  style="background-color: #0E1717;border:1px solid transparent">
								<i class="material-icons circle red">multiline_chart</i>
								<span class="title" >Dummy Data</span>
								<p id="recordHigh">Dummy Insurance <br>
									 Second Line
								</p>
							</li>
						 </ul>
						 <div class="card-action">
									 <a class="waves-effect waves-light btn" onclick="showUserData()"><i class="material-icons right">cloud</i>button</a>
									</div>
							</div>
						</div>
					</div>
					<div class="col s12 m6 l4 animated fadeInUp lifeClass" style="animation-delay: 1s;">
						<div class="card"  style="background-color: #0E1717">
							<div class="card-content white-text">
									<ul class="collection" style="background-color: #0E1717;border:1px solid transparent">
							<li class="collection-item avatar"  style="background-color: #0E1717;border:1px solid transparent">
								<i class="material-icons circle indigo">perm_contact_calendar</i>
								<span class="title" >LAST YEAR</span>
								<p id="thisTime">First Line <br>
									 Second Line
								</p>
							</li>
						 </ul>
						 <div class="card-action">
									 <a class="waves-effect waves-light btn" onclick="showUserData()"><i class="material-icons right">cloud</i>button</a>
									</div>
							</div>
						</div>
					</div>
			</div>
		</div>
		<div id="test3" class="col s12" class="row blue-grey darken-3">Test 3</div>
		<div id="test4" class="col s12" class="row blue-grey darken-3">Test 4</div>


	<ul id="slide-out" class="left side-nav">
		<li><div class="userView">
				<div class="background">
					<img src="assests/other/bg1.jpg">
				</div>
				<a href="#!user"><img class="circle" id="sideBarUsrPic" src="assests/other/download.jpg"></a>
				<a href="#!name"><span class="white-text name" id="nameUsr">John Doe</span></a>
				<a href="#!email"><span class="white-text email" id="emailUsr">jdandturk@gmail.com</span></a>
			</div>
		</li>
		<li><a href="#!"><i class="material-icons" onmouseover="chartsCal(1)">attach_money</i>Current Policies</a></li>
		<li><div class="divider"></div></li>
		<li><a href="#!"><i class="material-icons" onmouseover="chartsCal(2)">bubble_chart</i>Statistics</a></li>
		<li><div class="divider"></div></li>
		<li><a href="#!"><i class="material-icons">cloud</i>File Claims</a></li>
		<li><div class="divider"></div></li>
		<li><a href="#!"><i class="material-icons">alarm</i>Connect Fitbit</a></li>
		<li><div class="divider"></div></li>
		<li><a href="#!"><i class="material-icons">help</i>Help</a></li>
		<li><div class="divider"></div></li>
		<li><a href="#!"><i class="material-icons">local_pizza</i>About Us</a></li>

	</ul> -->
</div>

<script type="text/javascript">

$('#bt').click(function() {
		 $('#ex').click();
});
</script>
<script type="text/javascript">

function showUserData(){
$(".lifeClass").removeClass('fadeInUp');
$(".lifeClass").addClass('fadeOutDown');
setTimeout(function(){
	$("#test2").addClass('pow');
	$("#userContent").css("display","block");

},1500)

}

$(document).ready(function(){
	$('.collapsible').collapsible();
});
$('.butt').sideNav({
		menuWidth: 300, // Default is 240
		edge: 'left', // Choose the horizontal origin
		closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
		draggable: false // Choose whether you can drag to open on touch screens
	}
);

window.onload = function login(){
	$("#fbButton").remove();
	// $(".load").html('<div class="preloader-wrapper big active center-align"> <div class="spinner-layer spinner-blue"> <div class="circle-clipper left"> <div class="circle"></div> </div><div class="gap-patch"> <div class="circle"></div> </div><div class="circle-clipper right"> <div class="circle"></div> </div> </div> <div class="spinner-layer spinner-red"> <div class="circle-clipper left"> <div class="circle"></div> </div><div class="gap-patch"> <div class="circle"></div> </div><div class="circle-clipper right"> <div class="circle"></div> </div> </div> <div class="spinner-layer spinner-yellow"> <div class="circle-clipper left"> <div class="circle"></div> </div><div class="gap-patch"> <div class="circle"></div> </div><div class="circle-clipper right"> <div class="circle"></div> </div> </div> <div class="spinner-layer spinner-green"> <div class="circle-clipper left"> <div class="circle"></div> </div><div class="gap-patch"> <div class="circle"></div> </div><div class="circle-clipper right"> <div class="circle"></div> </div> </div> </div>');
	// Materialize.toast('Login Successful', 3000, 'rounded');
	// setTimeout(()=>{
	// 	Materialize.toast('Taking to something Beautiful!', 3000, 'rounded');
	// },1000)
	setTimeout(()=>{
		$("#firstScreen").addClass("animated slideOutLeft");
		$("#Insurer").css("display","block")
		setTimeout(()=>{
			$("#firstScreen").remove();
			Materialize.toast('Welcome to the console!', 3000, 'rounded');
			abcde();
		},100)
	},450)

}
</script>
<script>
		$(function () {

});
	 </script>
		 <script>
function abcde() {

			// Build the chart
			Highcharts.chart('conta', {
				chart: {
									backgroundColor :'#546e7a',
									color:'white',
									width: null,
							height: 230
							},
					title: {
						style:{
									color:'white'
								},
							text: 'Basket 1.1',
							x: -20 //center
					},
					subtitle: {
						style:{
									color:'white'
								},
							text: 'Money Growth',
							x: 1000000
					},
					xAxis: {
							categories: []
					},
					yAxis: {
							title: {
									text: 'Money',
									color: 'white'
							},
							plotLines: [{
									value: 0,
									width: 1,
									color: '#808080'
							}]
					},
					tooltip: {
							valuePrefix: '$'
					},
					legend: {
							layout: 'vertical',
							align: 'right',
							verticalAlign: 'middle',
							borderWidth: 0
					},
					series: [{
							name: 'Money',
							data: [1000000.02,
				1069953.13138418,
				1069654.16671196,
				1113939.25545474,
				1170298.30628474,
				1191097.33757941,
				1271672.81616565,
				1450582.05462387,
				1223818.07104062,
				1287189.57070313,
				1442528.30608546,
				1485571.00703085,
				1465148.93049706,
				1540635.10530851,
				1735795.68637086,
				1872458.4917966,
				1786551.86933055,
				1890643.86130073,
				1949857.05422931,
				1857233.85109752,
				2258372.04896932,
				2852232.12803625,
				2840371.1259826,
				3260329.59481887,
				3224473.3235221,
				3417785.35369185,
				3639557.01548323,
				3948794.68385904,
				3904598.38629369,
				3838836.37188606,
				4129730.61165141,
				3525030.92186224,
				3798314.99339384,
				3553802.03274999,
				3698897.45365749
				]
					}]
				});



				Highcharts.chart('conta1', {
					chart: {
										backgroundColor :'#546e7a',
										color:'white',
										width: null,
								height: 230
								},
						title: {
							style:{
										color:'white'
									},
								text: 'Basket 1.2',
								x: -20 //center
						},
						subtitle: {
							style:{
										color:'white'
									},
								text: 'Money Growth',
								x: 1000000
						},
						xAxis: {
								categories: []
						},
						yAxis: {
								title: {
										text: 'Money',
										color: 'white'
								},
								plotLines: [{
										value: 0,
										width: 1,
										color: '#808080'
								}]
						},
						tooltip: {
								valuePrefix: '$'
						},
						legend: {
								layout: 'vertical',
								align: 'right',
								verticalAlign: 'middle',
								borderWidth: 0
						},
						series: [{
								name: 'Money',
								data: [1000000.02,
									1074732.4570054,
			1084102.64622989,
			1131842.80195491,
			1220485.26642812,
			1408283.31293405,
			1469008.25264276,
			1415919.86344834,
			1186496.82411854,
			1296560.82105713,
			1453447.33661253,
			1596121.90578311,
			1655863.2353433,
			1945035.48449314,
			2131199.54718556,
			2503953.67855375,
			2251089.28312742,
			2444794.99353219,
			2378691.89631575,
			2299053.78160564,
			2429633.75445981,
			2613870.09506634,
			2776563.12539409,
			2900616.54481328,
			2878064.40847345,
			3085600.80416341,
			3364112.09978061,
			3860049.42077431,
			3570930.35155081,
			3870573.72901281,
			4045373.2421713,
			3234161.13104677,
			3743648.33104015,
			4002800.12907103,
			4131713.17974115

					]
						}]
					});


				Highcharts.chart('conta2', {
					chart: {
										backgroundColor :'#546e7a',
										color:'white',
										width: null,
								height: 230
								},
						title: {
							style:{
										color:'white'
									},
								text: 'Basket 1.3',
								x: -20 //center
						},
						subtitle: {
							style:{
										color:'white'
									},
								text: 'Money Growth',
								x: 1000000
						},
						xAxis: {
								categories: []
						},
						yAxis: {
								title: {
										text: 'Money',
										color: 'white'
								},
								plotLines: [{
										value: 0,
										width: 1,
										color: '#808080'
								}]
						},
						tooltip: {
								valuePrefix: '$'
						},
						legend: {
								layout: 'vertical',
								align: 'right',
								verticalAlign: 'middle',
								borderWidth: 0
						},
						series: [{
								name: 'Money',
								data: [1000000.02,
									1053225.06133918,
1044250.77118731,
1080402.05403304,
1141556.70380123,
1219317.3452066,
1273531.75108298,
1313340.37850671,
1172442.99992361,
1272163.96765131,
1408865.68225016,
1475556.46556803,
1643042.56702545,
1735191.39553957,
1868635.73271928,
1915354.8693449,
1777664.03247759,
1851592.75711712,
1785335.90915455,
1693547.99300376,
1920923.40871756,
2045573.05968737,
2082391.88719022,
2147596.55390765,
2116512.07731075,
2333184.58540124,
2449966.60904468,
2821150.61013021,
2822701.07748706,
2946119.72498668,
3315125.92459287,
2948538.07813532,
3350946.33131179,
3735334.31575936,
3881177.74782035


					]
						}]
					});

Highcharts.chart('conta3', {
	chart: {
						backgroundColor :'#546e7a',
						color:'white',
						width: null,
				height: 230
				},
		title: {
			style:{
						color:'white'
					},
				text: 'Basket 1.4',
				x: -20 //center
		},
		subtitle: {
			style:{
						color:'white'
					},
				text: 'Money Growth',
				x: 1000000
		},
		xAxis: {
				categories: []
		},
		yAxis: {
				title: {
						text: 'Money',
						color: 'white'
				},
				plotLines: [{
						value: 0,
						width: 1,
						color: '#808080'
				}]
		},
		tooltip: {
				valuePrefix: '$'
		},
		legend: {
				layout: 'vertical',
				align: 'right',
				verticalAlign: 'middle',
				borderWidth: 0
		},
		series: [{
				name: 'Money',
				data: [1000000.02,
					1067350.09388545,
1059062.82657078,
1076845.59104584,
1189712.48944903,
1206512.54124738,
1227714.84977618,
1238476.81884956,
1068208.75661813,
1107105.12752702,
1246930.94985782,
1282371.0666452,
1350862.02079806,
1474824.57723489,
1536051.06631874,
1609285.73540197,
1680879.70765062,
1638167.76788931,
1605610.74233748,
1499099.29136036,
1645380.90931059,
1747422.64890591,
1805933.15021723,
1835219.84413216,
1900641.71607005,
1995293.4457788,
2013541.6061115,
2477115.16576245,
2312615.42368194,
2217450.36080875,
2314096.83850069,
1990208.30808503,
2296850.36898241,
2687479.12931183,
3242054.06684026


	]
		}]
	});

	Highcharts.chart('conta2.1', {
		chart: {
							backgroundColor :'#546e7a',
							color:'white',
							width: null,
					height: 230
					},
			title: {
				style:{
							color:'white'
						},
					text: 'Basket 2.1',
					x: -20 //center
			},
			subtitle: {
				style:{
							color:'white'
						},
					text: 'Money Growth',
					x: 1000000
			},
			xAxis: {
					categories: []
			},
			yAxis: {
					title: {
							text: 'Money',
							color: 'white'
					},
					plotLines: [{
							value: 0,
							width: 1,
							color: '#808080'
					}]
			},
			tooltip: {
					valuePrefix: '$'
			},
			legend: {
					layout: 'vertical',
					align: 'right',
					verticalAlign: 'middle',
					borderWidth: 0
			},
			series: [{
					name: 'Money',
					data: [1000000.0,
1075237.4,
1068451.3,
1107655.6,
1169296.2,
1195183.8,
1284285.0,
1474776.8,
1242522.6,
1309119.6,
1483505.3,
1534016.8,
1510867.2,
1597368.5,
1828986.6,
2000683.7,
1903746.2,
2004228.4,
2067476.2,
1969977.2,
2406687.7,
3008551.1,
2949149.3,
3286843.9,
3285917.7,
3508869.6,
3771506.5,
4092401.6,
4032370.5,
3968072.2,
4141678.6,
3490139.2,
3785240.0,
3559620.5,
3685434.5,

		]
			}]
		});
		Highcharts.chart('conta2.2', {
			chart: {
								backgroundColor :'#546e7a',
								color:'white',
								width: null,
						height: 230
						},
				title: {
					style:{
								color:'white'
							},
						text: 'Basket 2.2',
						x: -20 //center
				},
				subtitle: {
					style:{
								color:'white'
							},
						text: 'Money Growth',
						x: 1000000
				},
				xAxis: {
						categories: []
				},
				yAxis: {
						title: {
								text: 'Money',
								color: 'white'
						},
						plotLines: [{
								value: 0,
								width: 1,
								color: '#808080'
						}]
				},
				tooltip: {
						valuePrefix: '$'
				},
				legend: {
						layout: 'vertical',
						align: 'right',
						verticalAlign: 'middle',
						borderWidth: 0
				},
				series: [{
						name: 'Money',
						data: [1000000.01,
1074860.9,
1084426.1,
1132046.3,
1221250.0,
1408120.1,
1468861.2,
1415848.4,
1187273.1,
1297786.6,
1454672.1,
1598426.2,
1658741.6,
1948604.3,
2136433.7,
2506710.6,
2252306.1,
2446837.7,
2381555.9,
2299299.7,
2431008.2,
2614273.6,
2774098.9,
2898840.3,
2877353.5,
3084374.4,
3362820.4,
3853717.0,
3565139.6,
3867928.5,
4043261.4,
3229477.7,
3743775.3,
4010813.2,
4139440.5

			]
				}]
			});



Highcharts.chart('conta2.3', {
				chart: {
									backgroundColor :'#546e7a',
									color:'white',
									width: null,
							height: 230
							},
					title: {
						style:{
									color:'white'
								},
							text: 'Basket 2.3',
							x: -20 //center
					},
					subtitle: {
						style:{
									color:'white'
								},
							text: 'Money Growth',
							x: 1000000
					},
					xAxis: {
							categories: []
					},
					yAxis: {
							title: {
									text: 'Money',
									color: 'white'
							},
							plotLines: [{
									value: 0,
									width: 1,
									color: '#808080'
							}]
					},
					tooltip: {
							valuePrefix: '$'
					},
					legend: {
							layout: 'vertical',
							align: 'right',
							verticalAlign: 'middle',
							borderWidth: 0
					},
					series: [{
							name: 'Money',
							data: [1000000,
1053185,
1044234,
1080379,
1141751,
1219473,
1273585,
1313539,
1172649,
1272546,
1408533,
1475764,
1644134,
1736348,
1870256,
1916227,
1779174,
1853747,
1787109,
1694951,
1922783,
2046944,
2084222,
2149449,
2118345,
2334888,
2451567,
2822079,
2825148,
2947330,
3319480,
2951108,
3353902,
3736572,
3883437,


				]
					}]
				 });
Highcharts.chart('conta2.4', {
								chart: {
													backgroundColor :'#546e7a',
													color:'white',
													width: null,
											height: 230
											},
									title: {
										style:{
													color:'white'
												},
											text: 'Basket 2.4',
											x: -20 //center
									},
									subtitle: {
										style:{
													color:'white'
												},
											text: 'Money Growth',
											x: 1000000
									},
									xAxis: {
											categories: []
									},
									yAxis: {
											title: {
													text: 'Money',
													color: 'white'
											},
											plotLines: [{
													value: 0,
													width: 1,
													color: '#808080'
											}]
									},
									tooltip: {
											valuePrefix: '$'
									},
									legend: {
											layout: 'vertical',
											align: 'right',
											verticalAlign: 'middle',
											borderWidth: 0
									},
									series: [{
											name: 'Money',
											data: [1000000,
1067601,
1059074,
1077164,
1191236,
1207404,
1228430,
1238608,
1068223,
1106882,
1247394,
1282890,
1349964,
1473702,
1536665,
1609162,
1682682,
1638851,
1607787,
1500838,
1647282,
1748933,
1806808,
1836661,
1904035,
1998137,
2016964,
2490926,
2321055,
2221986,
2319587,
1991935,
2301582,
2689750,
3259181,

]
									}]
								});

								Highcharts.chart('conta3.1', {
																chart: {
																					backgroundColor :'#546e7a',
																					color:'white',
																					width: null,
																			height: 230
																			},
																	title: {
																		style:{
																					color:'white'
																				},
																			text: 'Basket 3.1',
																			x: -20 //center
																	},
																	subtitle: {
																		style:{
																					color:'white'
																				},
																			text: 'Money Growth',
																			x: 1000000
																	},
																	xAxis: {
																			categories: []
																	},
																	yAxis: {
																			title: {
																					text: 'Money',
																					color: 'white'
																			},
																			plotLines: [{
																					value: 0,
																					width: 1,
																					color: '#808080'
																			}]
																	},
																	tooltip: {
																			valuePrefix: '$'
																	},
																	legend: {
																			layout: 'vertical',
																			align: 'right',
																			verticalAlign: 'middle',
																			borderWidth: 0
																	},
																	series: [{
																			name: 'Money',
																			data: [1000000,
																				1075094,
											1068187,
											1106371,
											1166595,
											1193070,
											1281867,
											1475148,
											1241097,
											1307932,
											1481229,
											1531518,
											1507768,
											1594030,
											1826061,
											1998650,
											1900440,
											1998087,
											2055232,
											1957857,
											2383859,
											2973915,
											2922776,
											3291441,
											3280566,
											3505456,
											3763945,
											4080289,
											4021827,
											3961443,
											4161461,
											3516211,
											3808985,
											3577634,
											3708557

								]
																	}]
																});


Highcharts.chart('conta3.2', {
chart: {
	backgroundColor :'#546e7a',
	color:'white',
	width: null,
height: 230
},
title: {
style:{
		color:'white'
	},
text: 'Basket 3.2',
x: -20 //center
},
subtitle: {
style:{
		color:'white'
	},
text: 'Money Growth',
x: 1000000
},
xAxis: {
categories: []
},
yAxis: {
title: {
		text: 'Money',
		color: 'white'
},
plotLines: [{
		value: 0,
		width: 1,
		color: '#808080'
}]
},
tooltip: {
valuePrefix: '$'
},
legend: {
layout: 'vertical',
align: 'right',
verticalAlign: 'middle',
borderWidth: 0
},
series: [{
name: 'Money',
							data: [1000000,
											1075064,
											1085059,
											1133852,
											1223413,
											1414611,
											1474075,
											1420394,
											1190491,
											1300954,
											1460610,
											1607295,
											1665447,
											1956742,
											2145581,
											2535108,
											2277648,
											2476373,
											2407570,
											2327716,
											2456589,
											2639748,
											2807250,
											2929328,
											2908142,
											3116131,
											3396701,
											3893250,
											3597847,
											3900843,
											4076319,
											3257685,
											3773921,
											4039408,
											4162786,

																									]
																																		}]
																																	});
	Highcharts.chart('conta3.3', {
	chart: {
			backgroundColor :'#546e7a',
			color:'white',
			width: null,
	height: 230
	},
	title: {
	style:{
				color:'white'
			},
		text: 'Basket 3.3',
		x: -20 //center
	},
	subtitle: {
	style:{
				color:'white'
			},
		text: 'Money Growth',
		x: 1000000
	},
	xAxis: {
		categories: []
	},
	yAxis: {
		title: {
				text: 'Money',
				color: 'white'
		},
		plotLines: [{
				value: 0,
				width: 1,
				color: '#808080'
		}]
	},
	tooltip: {
		valuePrefix: '$'
	},
	legend: {
		layout: 'vertical',
		align: 'right',
		verticalAlign: 'middle',
		borderWidth: 0
	},
	series: [{
		name: 'Money',
									data: [1000000,
													1053277,
													1044298,
													1080474,
													1141721,
													1219459,
													1273472,
													1313553,
													1172609,
													1272617,
													1408570,
													1475976,
													1644610,
													1737080,
													1871175,
													1916755,
													1780001,
													1854318,
													1787631,
													1695619,
													1924281,
													2049228,
													2086153,
													2151652,
													2120873,
													2337927,
													2454875,
													2825995,
													2827639,
													2948985,
													3323573,
													2953993,
													3358637,
													3740770,
													3888381,
																						]
																																				}]
																																			});
Highcharts.chart('conta3.4', {
chart: {
	backgroundColor :'#546e7a',
	color:'white',
	width: null,
height: 230
},
title: {
style:{
		color:'white'
	},
text: 'Basket 3.4',
x: -20 //center
},
subtitle: {
style:{
		color:'white'
	},
text: 'Money Growth',
x: 1000000
},
xAxis: {
categories: []
},
yAxis: {
title: {
		text: 'Money',
		color: 'white'
},
plotLines: [{
		value: 0,
		width: 1,
		color: '#808080'
}]
},
tooltip: {
valuePrefix: '$'
},
legend: {
layout: 'vertical',
align: 'right',
verticalAlign: 'middle',
borderWidth: 0
},
series: [{
name: 'Money',
							data: [1000000,
1069019,
1060990,
1078824,
1192571,
1211160,
1234295,
1246501,
1074787,
1115412,
1257714,
1293560,
1361477,
1485854,
1548974,
1623706,
1699653,
1654757,
1620317,
1515151,
1654213,
1753011,
1806001,
1842728,
1914863,
2010080,
2031499,
2507884,
2340253,
2242409,
2337245,
2004659,
2316696,
2716566,
3287782,
			]
																																		}]
																																	});

};

	 </script>

	 <script>
function myMap() {
var mapCanvas = document.getElementById("map");
var mapOptions = {
	center: new google.maps.LatLng(51.5, -0.2),
	zoom: 5
}
var map = new google.maps.Map(mapCanvas, mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
<script>
function sendData(){
console.log("ko")
			var settings = {
			"async": true,
			"crossDomain": true,
			"url": "http://10.71.2.210:8082/web",
			"method": "GET",
			"headers": {
				"cache-control": "no-cache",
				"postman-token": "cd89f25c-812d-8419-5aa4-18b5185ca49f"
			},
			"data": {
				"email": "swastikshrivastava0@gmail.com"
			}
		}

		$.ajax(settings).done(function (response) {
			console.log(response);
			$(".lala").html('<div class="col s12 m6 l4 animated fadeInUp lifeClass"> <div class="card" style="background-color: #0E1717"> <div class="card-content white-text"> <ul class="collection" style="background-color: #0E1717;border:1px solid transparent"> <li class="collection-item avatar" style="background-color: #0E1717;border:1px solid transparent"> <i class="material-icons circle green">flash_on</i> <span class="title" >'+response[0].name+'</span> <p id="usageToday">HDFC LIFE EASY HEALTH<br> Rs. '+ response[0].premium+' For 5years </p> </li> </ul> <div class="card-action"> <a class="waves-effect waves-light btn" onclick="showUserData()"><i class="material-icons right">cloud</i>More</a> </div> </div> </div> </div><div class="col s12 m6 l4 animated fadeInUp lifeClass" style="animation-delay: 0.5s;"> <div class="card" style="background-color: #0E1717"> <div class="card-content white-text"> <ul class="collection" style="background-color: #0E1717;border:1px solid transparent"> <li class="collection-item avatar" style="background-color: #0E1717;border:1px solid transparent"> <i class="material-icons circle red">multiline_chart</i> <span class="title" >Dummy Data</span> <p id="recordHigh">Dummy Insurance <br> Second Line </p> </li> </ul> <div class="card-action"> <a class="waves-effect waves-light btn" onclick="showUserData()"><i class="material-icons right">cloud</i>button</a> </div> </div> </div> </div> <div class="col s12 m6 l4 animated fadeInUp lifeClass" style="animation-delay: 1s;"> <div class="card" style="background-color: #0E1717"> <div class="card-content white-text"> <ul class="collection" style="background-color: #0E1717;border:1px solid transparent"> <li class="collection-item avatar" style="background-color: #0E1717;border:1px solid transparent"> <i class="material-icons circle indigo">perm_contact_calendar</i> <span class="title" >LAST YEAR</span> <p id="thisTime">First Line <br> Second Line </p> </li> </ul> <div class="card-action"> <a class="waves-effect waves-light btn" onclick="showUserData()"><i class="material-icons right">cloud</i>button</a> </div> </div> </div> </div>');
			$(".nameOfUser").html(response[0].name);

			$(".details").html('Brought in year 2017.<br>Age :'+ response[0].age+'<br>Gender :'+response[0].gender);
			$(".pdata").html("<br>BMI :"+response[0].BMI+"<br>Child :"+response[0].child+"<br>Smoke :"+response[0].smoke);
			$(".tagss").html("<br>Tags :"+response[0].tag_1+"  , "+response[0].tag_2);

			$("#test8").html("Twitter Handle: " +response[0].twitter+"<br>Total Analysed Tweets: "+response[0].tweets+"<br>Tweets Found Risky : "+response[0].risky_tweets+"<br>Analysed Tagged Tweets: "+response[0].tagged_tweets)
			$("#test5").html("Activities Past 27 days. <br>Sleep Days :" +response[0].sleep+"<br>Workout Days : "+response[0].workout+"<br>Walk Days : "+response[0].walk+"<br>Bike Days : "+response[0].bike)
			$("#test6").html("Card Transaction Frequency.<br>At Shopping :" +response[0].shopping+"<br>At Recharge : "+response[0].recharge+"<br>At Bills : "+response[0].bills+"<br>At Movies : "+response[0].movie);

var arrp=[];
response[0].risk_factor.forEach((i)=>{
arrp.push(parseInt(i));
});


			Highcharts.chart('conta4', {
			chart: {
					type: 'area',
					backgroundColor :'#546e7a',
					color:'white',
					height:300,
					width:null
			},
			title: {
					text: 'Risk Factor'
			},
			subtitle: {
					text: 'Source:'
			},
			xAxis: {
					categories: ['1', '2', '3', '4', '5', '6', '7','8','9','10','11','12','13','14','15','16','17','18','19','20'],
					tickmarkPlacement: 'on',
					title: {
							enabled: false
					}
			},
			yAxis: {
					title: {
							text: 'Billions'
					},
					labels: {
							formatter: function () {
									return this.value / 1000;
							}
					}
			},
			tooltip: {
					split: true,
					valueSuffix: ' % Risky'
			},
			plotOptions: {
					area: {
							stacking: 'normal',
							lineColor: '#666666',
							lineWidth: 1,
							marker: {
									lineWidth: 1,
									lineColor: '#666666'
							}
					}
			},
			series: [{
					name: 'Risk',
					data: arrp
			}]
	});
});

};

	function getRisk(){
					var settings = {
			"async": true,
			"crossDomain": true,
			"url": "http://10.71.2.210:8082/risk",
			"method": "POST",
			"headers": {
				"content-type": "application/x-www-form-urlencoded",
				"cache-control": "no-cache",
				"postman-token": "e38c6ac1-fb8d-92b0-c1ef-0e2210185018"
			},
			"data": {	"email":"swastikshrivastava0@gmail.com"
					}
		}

		$.ajax(settings).done(function (response) {
			console.log(response);
		});
			}
setInterval(getRisk,30000)

	 setInterval(sendData,8000)
</script>
</body>
</html>
