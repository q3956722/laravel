@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <h2>課程內容</h2>
        <p>課程名字：{{ $course->coname }}</p>
        <p>課程介紹：{{ $course->content }}</p>
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
                            <div>
                                {{ $unit->ucontent }}
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
@endsection