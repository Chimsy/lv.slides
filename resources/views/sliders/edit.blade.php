@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            {{ Form::model($slider, array('route' => array('slides.update', $slider->id), 'method' => 'put', 'files' => true)) }}

            {{Form::label('title', 'title')}}
            {{Form::text('title', null, array('class' => 'form-control'))}}
            <br>

            {{Form::label('photo', 'photo')}}
            {{Form::file('photo', array('class' => 'form-control'))}}

            <br>
            <img src="{{url('images')}}/{{$slider->photo}}" alt="image">

            <br><br><br>

            {{ Form::submit('update slide', array('class' => 'btn btn-success')) }}

            {{Form::close()}}

        </div>
    </div>

@endsection

