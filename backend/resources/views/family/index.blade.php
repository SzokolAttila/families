@extends("layouts.main")

@section("title", $title)

@section("content")
    <main class="container">
        <h1 class="text-center my-3">
            {{ $title }}
        </h1>
        <ol>
            <li><a href="{{route("family.list", ["slug" => "simpson"])}}">A Simpson csalad</a></li>
            <li><a href="{{route("family.list", ["slug" => "mezga"])}}">A Mezga csalad</a></li>
            <li><a href="{{route("family.list", ["slug" => "familyguy"])}}">Family Guy</a></li>
        </ol>
    </main>
@endsection