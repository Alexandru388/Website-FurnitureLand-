@extends('layouts.app')

@section('content')
<div class="container">
<h1>Create</h1>

<form action="/catalog" method="POST" enctype="multipart/form-data">
@csrf
    <input style="margin-bottom: 7px" class="form-control" type="text"    name="nume"   id="nume"    placeholder=" nume">
    <input style="margin-bottom: 7px" class="form-control" type="text"    name="brand"   id="brand"    placeholder=" brand">
    <input style="margin-bottom: 7px" class="form-control" type="text"    name="categorie"   id="categorie"    placeholder="categorie">
    <input style="margin-bottom: 7px" class="form-control" type="number"  name="latime"  id="latime"   placeholder="latime">
    <input style="margin-bottom: 7px" class="form-control" type="number"  name="lungime" id="lungime"  placeholder="lungime">
    <input style="margin-bottom: 7px" class="form-control" type="text"    name="culoare" id="culoare"  placeholder="culoare">
    <input                            class="form-control" type="number"  name="pret"    id="pret"     placeholder="pret" min="50" max="50000000" step="5">
   
        Import image <input  style="margin-bottom: 7px"         class="form-control" type="file"    name="image"  id="file"   >
    
    <button type="submit" id="submit" class="btn btn-outline-primary" >Creaza mobila</button>

</form>
<div style="display: flex" >
    <img style="height: 310px; width: 500px" src={{asset('images/harnic.png')}} alt="working" class="img-thumbnail">
    <img style="height: 310px; width: 500px" src={{asset('images/harnic2.png')}} alt="working2" class="img-thumbnail"> 
    <img style="height: 310px; width: 500px" src={{asset('images/harnic3.png')}} alt="working3" class="img-thumbnail">  
</div>
</div>
<script src="{{asset("js/create_validate.js") }}"></script>
@endsection
  