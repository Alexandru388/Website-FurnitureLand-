@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/catalog">&larr; Back</a>
<h1>{{$pret}}</h1>

<hr> 

 @foreach($furnitures as $furniture)
 <div style="background-color: white ; display: flex; " class="furniture">
   <img style="height: 400px; " src={{asset("images/" . $furniture-> image )}} alt="furniture image" class="img-thumbnail"> 
   <div style="padding-right: 7%; right:-100px; position:absolute; height:400px; width: 840px;">
       <p style="font-size: 0.8cm; font-weight:700;  ">{{$furniture -> nume }}</p>
      <p style="font-size: 0.6cm; font-weight:500;  "> Brand: {{$furniture -> brand }}</p>
      <p style="font-size: 0.6cm; font-weight:500;  ">Categorie: {{$furniture -> categorie  }}</p>
      <p style="font-size: 0.6cm; font-weight:500;  ">Latime: {{$furniture -> latime }} mm</p>
      <p style="font-size: 0.6cm; font-weight:500;  ">Lungime: {{$furniture -> lungime  }} mm</p>
      <p style="font-size: 0.6cm; font-weight:500; color: red";>{{ $furniture -> pret }} mdl</p>
      
     
   </div>   
   

     </div>
     <br>
   @endforeach
   </div>
@endsection
  