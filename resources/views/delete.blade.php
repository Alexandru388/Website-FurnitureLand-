@extends('layouts.app')

@section('content')
<div style="display: flex;"  class="container">
  <div>
    <img style="padding-bottom:15px ;height: 60px; width: 170px" src={{asset('images/delete.png')}} alt="working" class="img-thumbnail"> 
     <hr>
     @foreach($furnitures as $furniture)
     <div>
        <p style="font-size: 0.5cm; font-weight:500;">
          {{$furniture -> nume }} {{$furniture -> brand }} {{$furniture -> categorie }} {{$furniture -> pret }}
            <br>
            <form action="/catalog" method="POST">
            @method('DELETE')
            @csrf
              <input type="hidden" name="id" value={{$furniture -> id}}> 
              <button style="font-size: 0.6cm" class="btn btn-outline-danger" type="submit">Delete</button>
            </form>
        </p>
     </div>
@endforeach</div>
<img style="margin-left:200px; margin-top:100px;height: 550px; width: 550px" src={{asset('images/trash-bin.png')}} alt="working" class="img-thumbnail">
</div>
@endsection
  