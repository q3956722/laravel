@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <h2>單元內容</h2>
        <p>單元名字：{{ $unit->unname }}</p>
        <p>單元介紹：{{ $unit->ucontent }}</p>
        <p>影片</p>
        
        <div class="card col-8 bg-black" style="height: 400px;">

        </div>
    </div>
</div>
@endsection