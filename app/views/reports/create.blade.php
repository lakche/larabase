@extends('layouts.master')
@section('content')

        {{ Form::open(array('route' => 'reports.store', 'method' =>'post', 'role'=>'form')) }}

        {{ Form::textField('title', 'Title', null) }}

        {{ Form::textareaField('content', 'Content', 'Start writing...') }}

        {{ Form::textField('category', 'Category', null) }}

        {{ Form::textField('tag', 'Tag', null) }}

        {{ Form::textField('status', 'Status', null) }}

        {{ Form::textField('visibility', 'Visibility', null) }}

        <a href='{{URL::previous()}}' class='btn btn-default pull-right'>Cancel</a>

        {{ Form::submitField('Submit') }}

        {{ Form::close() }}

@stop
