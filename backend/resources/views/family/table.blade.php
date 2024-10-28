@extends("layouts.main")

@section("title", $title)

@section("content")
    <h1 class="text-center my-3">
        {{$title}}
    </h1>
    <main class="container">
        <h2 class="my-2">
            Karakterek
        </h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-center">Nev</th>
                    <th class="text-center">Csalad</th>
                    <th class="text-center">Ev</th>
                    <th class="text-center">Reszletek</th>
                </tr>
            </thead>
            <tbody>
                @foreach($characters as $slug => $family)
                    @foreach($family as $character)
                        <tr>
                            <td>{{$character["character"]}}</td>
                            <td>{{$character["family"]}}</td>
                            <td>{{$character["year"]}}</td>
                            <td><a href="{{route("family.show", ["slug" => $slug, "id" => $loop->index])}}" class="btn" style="background-color: {{$character["color"]}};">Reszletek</a></td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </main>
@endsection