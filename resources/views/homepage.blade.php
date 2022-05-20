@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="page-header">
                <p class="page-title">Featured Books</p>
            </div>
        </div>

    </div>

    <section id="books">
<div class="container mt-5">
    <div class="row">


        @foreach($books as $key => $value)
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Book Title: {{$value->name}}</h5>
                            <br>

                            @foreach ($value->books as $aa)

                            <p class="card-text">Author Names:{{$aa->name}}</p>

@endforeach
                        </div>
                        <div class="card-footer">
                    Publishers:{{$value->publisher}}
                        </div>
                    </div>
                </div>
        @endforeach

            </div>
        </div>
    </div>
    </section>





@endsection
