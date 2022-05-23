@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>創建單元</h2>
            <form action="{{ route('unit.store') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="unname">單元名稱</label>
                    <input type="text" name="unname" id="unname" class="form-control" placeholder="請輸入課程名稱" required>
                </div>
                <div class="mb-3">
                    <label for="ucontent">單元內容</label>
                    <textarea type="text" name="ucontent" id="ucontent" class="form-control" placeholder="請輸入課程內容" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>

            </form>
        </div>
    </div>
</div>
@endsection