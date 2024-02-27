@extends('layouts.app')

@section('content')
<div class="container">
 
    <img style="margin-right:37%;height: 80px; width: 100px" src={{asset('images/software.png')}} alt="working" class="img-thumbnail">   <img style="height: 80px; width: 100px;margin-right:37%;" src={{asset('images/updated.png')}} alt="working" class="img-thumbnail">   <img style="height: 80px; width: 100px" src={{asset('images/updated1.png')}} alt="working" class="img-thumbnail"> 
<hr>
@if(!isset($sent))
<form action="/update" method="POST">
@csrf
<select name="selected_furniture">
@foreach($furnitures as $furniture)
<option style="font-zise: 30px  " ; value={{$furniture -> id}}>{{$furniture -> nume}} {{$furniture -> brand}}</option>
@endforeach
</select>
<button class="btn btn-primary" type="submit">Edit</button>
<br>

<img style="height: 550px; width: 1300px" src={{asset('images/select.png')}} alt="working" class="img-thumbnail">

</form>
@else
<a href={{route("update")}}>&larr; back</a>
<br>
<form action="/catalog" method="POST" enctype="multipart/form-data">
@method("PUT")
@csrf
<div style="display: flex"><p style="margin-right: 12%">Nume</p><p style="margin-right: 12%">Brand</p><p style="margin-right: 9%">Categorie</p><p style="margin-right: 12%">Latime</p><p style="margin-right: 10%">Lungime</p><p >Pret</p></div>
<input type="text" name="nume" value={{$furniture -> nume}}>
<input type="text" name="brand" value={{$furniture -> brand}}>
<input type="text" name="categorie" value={{$furniture -> categorie}}>
<input type="number" name="latime" value={{$furniture -> latime}}>
<input type="number" name="lungime" value={{$furniture -> lungime}}>
<input type="number" name="pret" value={{$furniture -> pret}}>

<input type="file" name="image">
<input type="hidden" name="id" value={{$furniture -> id}}>
<button style="margin-left:240px; margin-top: 10px" class="btn btn-danger" type="submit">Update</button>
</form>
<br>
<img style="height: 480px; width: 1170px" src={{asset('images/1234.png')}} alt="working" class="img-thumbnail">

@endif
</div>
@endsection
  