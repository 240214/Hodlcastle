@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>Training</h1>
    </section>
    <div class="content">
        @include('flash::message')
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'trainings.store', 'files' => false, 'id' => 'js_training_form']) !!}

                    @include('trainings.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
