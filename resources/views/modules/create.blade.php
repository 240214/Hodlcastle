@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Module
        </h1>
    </section>
    <div class="content" id="app">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'modules.store', 'files' => true]) !!}

                        @include('modules.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
