@extends('layouts.app')

@section('content')
<div class="simplecontainer">
    <div class="row justify-content-center">
        <div class="col-md-10">
               <p style="padding-left: 34%;font-size: 1cm">Cauta mobila preferata</p>
               <form action="/home" method="GET">
                @csrf
                <input input style=" width: 90%;background: transparent;  padding: 10px 15px; font-size: 20px; color: brown;" style="width: 90%; height:50px; background: rgba(255, 255, 255, 0.2); align-items:center; border-radius: 60px; padding: 10px 20px; backdrop-filter: blur(4px) saturate(180%);" type="text" placeholder="Cauta orice" name="nume" id="">
                <button style="border: 0; border-radius: 50%; width 60px; height: 60px; background: white; cursor: pointer;" type="submit"><img style="height: 50px; border-radius: 40%; " src={{asset("images/search.png" )}} alt="furniture image"  class="shop-btn"></button>
               </form>
               <img style="margin-top:20px; margin-bottom:30px; height: 500px;  width:1380px;" src={{asset("images/shop.png" )}} alt="shop image" class="img-thumbnail">
              
<br>
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
                      
                      <form action="/cart" method="POST">
                       @csrf
                       <br>
                        <input type="hidden" name="furniture_id" value={{$furniture -> id}}>
                        <button class="btn btn-dark" type="submit">Add to Cart</button>
                      </form>
                   </div>   
                   
               
               </div>
               <br>
               @endforeach




        </div>
    </div>
</div>

@endsection
