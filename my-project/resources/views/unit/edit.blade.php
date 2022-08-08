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
                    <input type="text" name="unname" id="unname" class="form-control" value="{{ old('unname',$unit->unname) }}" placeholder="請輸入單元名稱" required>
                </div>
                <div class="mb-3 d-flex">
                    @if ( old('order',$unit->order) == 1 )
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="order" id="flexRadioDefault1" value="1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            單元
                        </label>
                    </div>
                    <div class="form-check ms-2">
                        <input class="form-check-input" type="radio" name="order" id="flexRadioDefault2" value="2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            小單元
                        </label>
                    </div>
                    @else
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="order" id="flexRadioDefault1" value="1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            單元
                        </label>
                    </div>
                    <div class="form-check ms-2">
                        <input class="form-check-input" type="radio" name="order" id="flexRadioDefault2" value="2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            小單元
                        </label>
                    </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="unintro">單元介紹</label>
                    <textarea name="unintro" id="unintro" class="form-control"  cols="110" rows="4" placeholder="請輸入單元介紹" required>{{ old('unintro',$unit->unintro) }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="video_id">影片連結</label>
                    <input type="text" name="video_id" id="video_id" class="form-control" value="{{ old('video_id',$unit->video_id) }}" placeholder="輸入影片代碼即可" required>
                </div>
                <div class="mb-3">
                    <label for="uncontent">單元內容</label>
                    <textarea type="text" class="ckeditor form-control" name="uncontent" id="uncontent" placeholder="請輸入單元內容" required>{{ old('uncontent',$unit->uncontent) }}</textarea>
                    <!-- <textarea type="text" name="uncontent" id="uncontent" class="form-control" placeholder="請輸入課程內容" rows="4" required>{{ old('uncontent',$unit->uncontent) }}</textarea> -->
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>

            <hr>

            <form action="{{ route('unit.destroy', [$unit->unid] ) }}" method="post" onsubmit="return confirm('你確定要刪除文章嗎?')">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>

            <hr>

            <a href="{{ route('unit.show', [$unit->unid] ) }}" class="text-white text-decoration-none"><button type="submit" class="btn btn-primary">Back</button></a>
        </div>
    </div>
</div>
@endsection


