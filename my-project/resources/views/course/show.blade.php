@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <h2>課程內容</h2>
        <p>課程名字：{{ $course->coname }}</p>
        <p>課程介紹：{{ $course->content }}</p>
        <p>單元列表</p>
        
        @foreach (App\Models\course::all() as $course)
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">                
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    {{ $course->coname }}
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the first test.</strong> {{ $course->content }}.
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection