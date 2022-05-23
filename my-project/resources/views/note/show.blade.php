@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <h2>課程內容</h2>
        <p>筆記名字：{{ $note->noid }}</p>
        <p>筆記介紹：{{ $note->nocontent }}</p>
    </div>
</div>
@endsection