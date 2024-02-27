@extends('layouts.app')

@section('content')
<div class="container">
    <div style="display: flex"> 
<form action="/sort" method="POST">
    @csrf<img style="height: 50px; " src={{asset("images/search.png" )}} alt="furniture image" class="img-thumbnail">
     <select name="categorie" >
        <option value="Canapele">Canapele</option>
        <option value="Fotolii">Fotolii</option>
        <option value="Coltare">Coltare</option>
    </select>
    <button class="btn btn-success" type="submit">Sorteaza dupa categorie</button>
</form>
<form action="/sort2" method="POST">
    @csrf
    <select style="margin-left: 0.5cm; margin-top:0.25cm" name="pret" >
        <option value="6000">6000</option>
        <option value="7000">7000</option>
        <option value="8000">8000</option>
        <option value="9000">9000</option>
        <option value="10000">10000</option>
        <option value="11000">11000</option>
        <option value="12000">12000</option>
        <option value="13000">13000</option>
        <option value="14000">14000</option>
        <option value="15000">15000</option>
        <option value="16000">16000</option>
        <option value="17000">17000</option>
        <option value="18000">18000</option>
    </select>
    <button class="btn btn-success" type="submit">Sorteaza dupa pret maxim</button>
   </form> 
</div>
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
@endsection
  