@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>創建課程</h2>
            <form action="{{ route('course.store') }}" method="post">
                @csrf
                
                <div class="mb-3">
                    <label for="coname">課程名稱</label>
                    <input type="text" name="coname" id="coname" class="form-control" placeholder="請輸入課程名稱" required>
                </div>                
                <div class="mb-3">
                    <label for="content">課程內容</label>
                    <textarea type="text" class="ckeditor form-control" name="content" id="content" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="cointro">課程介紹</label>
                    <textarea name="cointro" id="cointro" class="form-control"  cols="110" rows="4" placeholder="請輸入課程介紹" required>{{ old('cointro',$course->cointro) }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>

            </form>

            <hr>

            <a href="{{ route('unit.index') }}" class="text-white text-decoration-none" ><button type="submit" class="btn btn-primary">Back</button></a>  
        </div>
    </div>
</div>
@endsection