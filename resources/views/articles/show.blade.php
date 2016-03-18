<?php
/**
 * Created by PhpStorm.
 * User: ruyonga
 * Date: 18/03/2016
 * Time: 2:37 PM
 */?>
@extends('app')

@section('content')
    <h1>{{$article->title}}</h1>


        <article>
            <p>
                {{$article->body}}
            </p>
        </article>
@stop