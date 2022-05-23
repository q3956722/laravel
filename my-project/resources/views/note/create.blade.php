@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>創建筆記</h2>
            <form action="{{ route('note.store') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="noname">筆記名稱</label>
                    <input type="text" name="noname" id="noname" class="form-control" placeholder="請輸入課程名稱" required>
                </div>
                <div class="mb-3">
                    <label for="nocontent">筆記內容</label>
                    <textarea type="text" name="nocontent" id="nocontent" class="form-control" placeholder="請輸入課程內容" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>

            </form>
        </div>
    </div>
</div>
@endsection