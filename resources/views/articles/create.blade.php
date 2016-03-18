<?php
/**
 * Created by PhpStorm.
 * User: ruyonga
 * Date: 18/03/2016
 * Time: 4:45 PM
 */ ?>
@extends('app')

@section('content')
    <h1>Write a new Article</h1>

    <hr>
    {!! Form::open(['url'=> 'articles']) !!}
    <div class="form-group">

        {!! Form::label('title', 'Name:') !!}
        {!! Form::text('title',null, ['class'=>'form-control']) !!}
    </div>
    <!--Body for form input-->
    <div class="form_group">

        <text-field>
            {!! Form::label('body', 'Body:') !!}
            {!! Form::textarea('body',null, ['class'=>'form-control']) !!}
        </text-field>
    </div>
    <!--Button-->
    <div class="form-group">

        {!! Form::submit('Add Article',['class' => 'bt btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}

@stop