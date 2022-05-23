@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>編輯筆記</h2>
            @if (session('success'))
            <div class="alert alert-success">
                編輯成功！
            </div>
            @endif
            <form action="{{ route('note.update', [$note->noid] ) }}" method="post">
                @csrf
                @method('put')

                <div class="mb-3">
                    <label for="nocontent">課程內容</label>
                    <textarea type="text" name="nocontent" id="nocontent" class="form-control" placeholder="請輸入課程內容" rows="4" required>{{ old('nocontent',$note->nocontent) }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>    
            </form>
            
            <hr>
            
            <form action="{{ route('note.destroy', [$note->noid] ) }}" method="post" onsubmit="return confirm('你確定要刪除文章嗎?')">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection