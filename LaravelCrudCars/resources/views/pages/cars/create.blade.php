@extends('master.main')
@section('content')
    @component('cars.car-form-create',['brands' => $brands])
    @endcomponent
@endsection
