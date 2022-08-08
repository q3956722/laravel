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
                    <input type="text" name="unname" id="unname" class="form-control" placeholder="請輸入單元名稱" required>
                </div>
                <div class="mb-3 d-flex">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="order" id="flexRadioDefault1" value="1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            單元
                        </label>
                    </div>                    
                    <div class="form-check ms-2">
                        <input class="form-check-input" type="radio" name="order" id="flexRadioDefault2" value="2" >
                        <label class="form-check-label" for="flexRadioDefault2">
                            小單元
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="unintro">單元介紹</label>
                    <textarea name="unintro" id="unintro" class="form-control" cols="110" rows="4" placeholder="請輸入單元介紹" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="video_id">影片連結</label>
                    <input type="text" name="video_id" id="video_id" class="form-control" placeholder="輸入影片代碼即可" required>
                </div>
                <div class="mb-3">
                    <label for="uncontent">單元內容</label>
                    <textarea type="text" class="ckeditor form-control" name="uncontent" id="uncontent" required></textarea>
                    <!-- <textarea type="text" name="ucontent" id="ucontent"   rows="4" required></textarea> -->
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>

            <hr>

            <a href="{{ route('unit.index') }}" class="text-white text-decoration-none" ><button type="submit" class="btn btn-primary">Back</button></a>
        </div>
    </div>
</div>
@endsection