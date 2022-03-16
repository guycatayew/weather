@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Weather') }}</div>
                    <div class="card-body">
                        @include('components.table-weather')
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
