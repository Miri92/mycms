@extends('mycms::master')

@section('content')
<h2>dashboardd</h2>

    {{ dd(config('mycms.crud')) }}
@endsection