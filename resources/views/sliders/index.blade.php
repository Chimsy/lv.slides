@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach($sliders as $slider)
                <img src="{{url('images')}}/{{$slider->photo}}" alt="{{$slider->title}}" width="250" height="150">

                <a href="{{ route('slides.edit', $slider->id) }}" class="btn btn-block btn-info">edit</a>


                {!! Form::open(['method' => 'delete', 'route' => ['slides.destroy', $slider->id] ]) !!}
                <button class="btn btn-block btn-danger" type="submit">delete</button>
                {!! Form::close() !!}

                <br>
            @endforeach
        </div>
    </div>

@endsection

@section('scripts')
    @parent
    <script>
        $(document).ready(function(){
            $("#myCarousel").carousel({
                interval : 3000
            });
        });
    </script>
@endsection
