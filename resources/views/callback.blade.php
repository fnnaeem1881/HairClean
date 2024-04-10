@extends('layout.base')

@section('content')


    <div class="container">
        <div class="row">

            @if (Session::has('success'))
                <div class="alert alert-success text-center">

                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <h4 class="text-center m-4">{{ Session::get('success') }}</h4>

                </div>
            @endif

        </div>
    </div>

@endsection
