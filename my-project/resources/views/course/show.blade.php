@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    檢視者：{{ Auth::user()->name }}
                    <a class="text-decoration-none" href="{{ route('course.edit',[$course->coid]) }}">{{ __('編輯課程') }}</a>
                </div>
                <div class="card-body">

                    <div class="mb-2">
                        <a href="{{ url('/') }}">{{ __('首頁') }}</a>
                        {{ __(' > ') }}
                        <a href="{{route('course.index')}}">{{ __('課程選單') }}</a>
                        {{ __(' > ') }}
                        {{ $course->coname }}
                    </div>
                    <h1 class="pb-2">{{ $course->coname }}</h1>
                    <h2>課程介紹</h2>
                    <p>{{ $course->cointro }}</p>
                    <hr>
                    <h2>課程內容</h2>
                    {!! $course->content !!}
                    <hr>
                    <h3>單元列表</h3>

                    @foreach (App\Models\unit::all() as $unit)
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $unit->unid }}" aria-expanded="flase" aria-controls="collapse{{ $unit->unid }}">
                                    {{ $unit->unname }}
                                </button>
                            </h2>
                            <div id="collapse{{ $unit->unid }}" class="accordion-collapse collapse hidden" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="text-truncate overflow-hidden"  style="max-width: 630px;">
                                            {!! $unit->unintro !!}
                                        </div>
                                        <div>
                                            <a href="{{ route('unit.show', [$unit->unid]) }}">{{ __('進入上課') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection