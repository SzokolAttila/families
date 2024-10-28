@extends("layouts.main")

@section("title", $title)

@section("content")
<h1 class="text-center text-uppercase my-3">
    {{$title}}
</h1>

<main class="container">
    <img src="{{asset("img/" . $slug . "/" . $character["image"])}}" class="img-fluid d-block mx-auto" alt="">
</main>

@endsection