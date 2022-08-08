@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header d-flex justify-content-between">
                    檢視者：{{ Auth::user()->name }}
                    <a class="text-decoration-none" href="{{ route('unit.edit',[$unit->unid]) }}">{{ __('編輯文章') }}</a>
                    <a class="text-decoration-none" href="{{ route('unit.index') }}">{{ __('回上一頁') }}</a>
                </div>
                <div class="container">
                    <div class="card-body ">
                        <div class="mb-2">
                            <a href="{{ url('/') }}">{{ __('首頁') }}</a>
                            {{ __(' > ') }}
                            <a href="{{route('course.index')}}">{{ __('課程選單') }}</a>
                            {{ __(' > ') }}
                            @foreach (App\Models\course::all() as $course)
                                {{ $course->coname }}
                            @endforeach
                            {{ __(' > ') }}
                            <a href="{{route('unit.index')}}">{{ __('單元選單') }}</a>
                            {{ __(' > ') }}
                            {{ $unit->unname }}
                        </div>
                        <h1 class="pb-2">{{ $unit->unname }}</h1>
                        <h2>單元介紹</h2>
                        <p>{{ $unit->unintro }}</p>
                        <hr>
                        @if ($unit->video_id == NULL)
                        
                        <div class="card col-8 bg-black py-5" style="width: 560px;">
                            <div class="d-flex justify-content-center text-white fs-3">
                                {{ __('尚未新增影片') }}
                            </div>
                        </div>
                        @else
                        <h2>影片</h2>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $unit->video_id }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>;        
                        @endif
                        
                        <hr>
                        <p>{!! $unit->uncontent !!}</p>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection