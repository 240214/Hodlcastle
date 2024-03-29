@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Course
        </h1>
    </section>
    <div class="content" id="app">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'courses.store', 'files' => true]) !!}

                        @include('courses.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
