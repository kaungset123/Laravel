@extends("layout.master")
@section('title',"About Page")

@section('content')
    <div class="container">
        <h2 class="text-center">I am About Page</h2>
            <div class="row">
                <div class="col-md-5 offset-md-2">
                    @if(count($about) > 0)
                        <p>I have something to tell you </p>
                        <ol>
                            @foreach($about as $case)
                                <li class="text-danger">{{$case}}</li>
                            @endforeach 
                        </ol>
                    @endif
                    <div class="">
                        <button class="btn btn-primary text-center">about button</button>
                    </div>
                </div>
            </div>
    </div>
@endsection