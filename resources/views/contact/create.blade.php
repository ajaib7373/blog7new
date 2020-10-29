@extends('master')

@section('categoryortagcreate')
<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">>

<style>

*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: 'Quicksand', sans-serif;
}



.container1{
	position: relative;
	width: 100%;
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	padding: 20px 100px;
}

.container1:after{
	content: '';
	position: absolute;
	/* width: 100%; */
	/* height: 100%; */
	left: 0;
	top: 0;
	filter: blur(50px);
	z-index: -1;
}
.contact-box{
	max-width: 850px;
	display: grid;
	grid-template-columns: repeat(2, 1fr);
	justify-content: center;
	align-items: center;
	text-align: center;
	background-color: #fff;
	box-shadow: 0px 0px 19px 5px rgba(0,0,0,0.19);
}

.left{
	background: url("img/bg.jpg") no-repeat center;
	background-size: cover;
	height: 100%;
}
.phone {
  padding-top: 50px;
}
.phone,
.email
 {
  margin-bottom:30px;
}
.diva
 {
  margin-bottom:30px;
}
.phone h2,
.email h2
 {
  margin-top:0px;
}
.phone a,
.email a
 {
  color: #fd4f00;
  font-size:18px;
}

.right{
	padding: 25px 40px;
}

h2{
	position: relative;
	padding: 0 0 10px;
	margin-bottom: 10px;
}

h2:after{
	content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    height: 4px;
    width: 50px;
    border-radius: 2px;
    background-color: #2ecc71;
}

.field{
	width: 100%;
	border: 2px solid rgba(0, 0, 0, 0);
	outline: none;
	background-color: rgba(230, 230, 230, 0.6);
	padding: 0.5rem 1rem;
	font-size: 1.1rem;
	margin-bottom: 22px;
	transition: .3s;
}

.field:hover{
	background-color: rgba(0, 0, 0, 0.1);
}

textarea{
	min-height: 150px;
}

.btn{
	width: 100%;
	padding: 0.5rem 1rem;
	background-color: #2ecc71;
	color: #fff;
	font-size: 1.1rem;
	border: none;
	outline: none;
	cursor: pointer;
	transition: .3s;
}

.btn:hover{
    background-color: #27ae60;
}
.flash-success{
    background-color: #eee;
    color: #08a700;
    padding: 10px;
    display: inline-block;
    width: 1250px;
	font-size: 35px;
	text-align: center;            
}

.field:focus{
    border: 2px solid rgba(30,85,250,0.47);
    background-color: #fff;
}

@media screen and (max-width: 880px){
	.contact-box{
		grid-template-columns: 1fr;
	}
	.left{
		height: 200px;
	}
}


</style>

@endsection
@section('content')

@if(session()->has('success'))
    <div class="flash-success">{{session()->get('success')}}</div>
@endif

<div class="container1">
		<div class="contact-box">
			<div class="right">
			<p>If you have any questions or inquiries, please contact me through
				 my email address:-
			</p>
<div class="email" style="margin-bottom: 30px;" >
<h2>Email</h2>
<a href="mailto:ethiopika73@gmail.com">ethiopika73@gmail.com</a>
<p>Or send me message here.</p>
</div>
		   
</div>
			<div class="right">
				<h2>Contact Us</h2>
				<form action="/contact" method="post">
				@csrf
				<input type="text" class="field" name="name" value="{{old('name')}}" placeholder="Your Name">
			<p style="font-size: 20px; color:red;" >@error('name') {{$message}} @enderror</p>	
				<input type="text" class="field" name="email" value="{{old('email')}}" placeholder="Your Email">
			<p style="font-size: 20px; color:red;">	@error('email') {{$message}} @enderror</p>
				<textarea placeholder="Message" name="message" value="{{old('message')}}" class="field"></textarea>
				<p style="font-size: 20px; color:red;" > 	@error('message') {{$message}} @enderror</p>
				<button class="btn">Send</button>
				</form>
			</div>
		</div>
	</div>

@endsection