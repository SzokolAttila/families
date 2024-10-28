@extends("layouts.main")

@section("title", $title)

@section("content")
    <h1 class="text-center my-3">
        {{$title}} <span class="badge text-black" style="background-color: {{$family[0]["color"]}};">{{$family[0]["year"]}}</span>
    </h1>
    <main class="container">
        <div class="row">
            @foreach($family as $character)
                <div class="my-2 col-12 col-sm-6 col-lg-4 col-xxl-3">
                    <div class="card h-100" style="background-color: {{$character["color"]}};">
                        <img src="{{asset("img/" . $slug . "/" . $character["image"])}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{$character["character"]}}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection