@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>編輯課程</h2>
            @if (session('success'))
            <div class="alert alert-success">
                編輯成功！
            </div>
            @endif
            <form action="{{ route('course.update', [$course->coid] ) }}" method="post">
                @csrf
                @method('put')

                <div class="mb-3">
                    <label for="coname">課程名稱</label>
                    <input type="text" name="coname" id="coname" class="form-control" value="{{ old('coname',$course->coname) }}" placeholder="請輸入課程名稱" required>
                </div>
                <div class="mb-3">
                    <label for="content">課程內容</label>
                    <textarea type="text" class="ckeditor form-control" name="content" id="content" placeholder="請輸入課程內容" required>{{ old('content',$course->content) }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="cointro">課程介紹</label>
                    <textarea name="cointro" id="cointro" class="form-control"  cols="110" rows="4" placeholder="請輸入課程介紹" required>{{ old('cointro',$course->cointro) }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>    
            </form>
            
            <hr>
            
            <form action="{{ route('course.destroy', [$course->coid] ) }}" method="post" onsubmit="return confirm('你確定要刪除文章嗎?')">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>

            <hr>

            <a href="{{ route('course.show', [$course->coid] ) }}" class="text-white text-decoration-none" ><button type="submit" class="btn btn-primary">Back</button></a>  
        </div>
    </div>
</div>
@endsection