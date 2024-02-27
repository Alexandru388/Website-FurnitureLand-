@extends('layouts.app')

@section('content')
<div class="container">
<h1>Dashboard</h1>

<a class="text-dark" href={{route("create")}}>Create</a>
<a class="text-dark" href={{route("catalog")}}>Read</a>
<a class="text-dark" href={{route("update")}}>Udate</a>
<a class="text-dark" href={{route("delete")}}>Delete</a>

</div>
@endsection
  