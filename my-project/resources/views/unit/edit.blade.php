@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>編輯單元</h2>
            @if (session('success'))
            <div class="alert alert-success">
                編輯成功！
            </div>
            @endif
            <form action="{{ route('unit.update', [$unit->unid] ) }}" method="post">
                @csrf
                @method('put')

                <div class="mb-3">
                    <label for="unname">單元名稱</label>
                    <input type="text" name="unname" id="unname" class="form-control" value="{{ old('unname',$unit->unname) }}" placeholder="請輸入課程名稱" required>
                </div>
                <div class="mb-3">
                    <label for="ucontent">單元內容</label>
                    <textarea type="text" name="ucontent" id="ucontent" class="form-control" placeholder="請輸入課程內容" rows="4" required>{{ old('ucontent',$unit->ucontent) }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>    
            </form>
            
            <hr>
            
            <form action="{{ route('unit.destroy', [$unit->unid] ) }}" method="post" onsubmit="return confirm('你確定要刪除文章嗎?')">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection