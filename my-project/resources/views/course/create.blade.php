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
                    <textarea type="text" name="content" id="content" class="form-control" placeholder="請輸入課程內容" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>

            </form>
        </div>
    </div>
</div>
@endsection