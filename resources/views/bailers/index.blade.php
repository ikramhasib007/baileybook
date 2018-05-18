@extends('layouts.app') 


@section('content')
    <div class="col d-flex flex-column">
        <div class="list-group">

            <div class="card mb-3 list-group-item list-group-item-action list-group-item-primary">
                <div class="card-body text-center">
                        <h5 class="card-title">
                            <a style="text-decoration: none;" href="{{ route('spa') }}" class="display-4">Single Page Application</a>
                        </h5>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col d-flex flex-column">
            <div class="list-group">
                
                <div class="card mb-3 list-group-item list-group-item-action list-group-item-primary">
                    <div class="card-body text-center">
                        <h5 class="card-title">
                            <a style="text-decoration: none;" href="{{ route('search') }}" class="display-4">Advanced Searching</a>
                        </h5>
                </div>
            </div>

        </div>
    </div>
@endsection