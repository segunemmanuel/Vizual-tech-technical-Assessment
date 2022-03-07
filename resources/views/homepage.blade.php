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

        @foreach ($data as $key )

                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Book Title: {{$key->name}}</h5>
                            <br>
                            <p class="card-text">Author Names: {{$key->authors}}</p>
                        </div>
                        <div class="card-footer">
                    Publishers:
                        </div>
                    </div>
                </div>
        @endforeach


            </div>
        </div>
    </div>
    </section>





@endsection
