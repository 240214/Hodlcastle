@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="pull-right">
           <a class="btn btn-success" href="{!! route('campaigns.create') !!}">Start New</a>
        </div>
        <h1>Campaigns</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                @include('campaigns.table', ['show_status' => 1])
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

