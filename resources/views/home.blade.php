@extends("layout.master")
@section('title',"Home Page")

@section('content')
    <div class="container">
        <h2 class="text-center">I am Home Page</h2>
            <div class="row">
                <div class="col-md-5 offset-md-2">
                    @if(count($cars) > 0)
                        <p>I bought some cars.They are </p>
                        <ol>
                            @foreach($cars as $car)
                                <li class="text-danger">{{$car}}</li>
                            @endforeach 
                        </ol>
                    @endif
                    <div class="">
                        <button class="btn btn-primary text-center">home button</button>
                    </div>
                </div>
            </div>
    </div>

@endsection