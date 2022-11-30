@extends('layouts.app')

@section('content')
    <div class="nav-tabs-custom layout">
        @include('trainings.tabs', ['active' => 'training_notify_templates'])
        <div class="tab-content">
            <div class="tab-pane active">
                <section class="content-header">
                    <div class="pull-right">
                        <a class="btn btn-success" href="{!! route('trainingNotifyTemplates.create') !!}"><i class="fa fa-plus"></i> Add New</a>
                    </div>
                    <h1>Training Notify Templates</h1>
                </section>
                <div class="content">
                    <div class="clearfix"></div>

                    @include('flash::message')

                    <div class="clearfix"></div>
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_1" data-toggle="tab">Public templates</a></li>
                            <li><a href="#tab_2" data-toggle="tab">Custom templates</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1">
                                @include('training_templates.table_public')
                            </div>
                            <div class="tab-pane" id="tab_2">
                                @include('training_templates.table')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
