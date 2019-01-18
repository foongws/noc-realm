@extends('nocrealm.master')

@section('content')
    <div class="page-content">
        @include('voyager::alerts')
        @include('voyager::dimmers')
        @include('nocrealm.dimmers')
    </div>
@stop

