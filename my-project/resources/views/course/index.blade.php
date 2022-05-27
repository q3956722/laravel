@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    檢視者：{{ Auth::user()->name }}
                    <a class="text-decoration-none" href="{{ route('unit.create') }}">{{ __('Create Post') }}</a>
                </div>

                <div class="card-body">
                    <a href="{{ url('/') }}">{{ __('首頁') }}</a>{{ __(' > ') }}{{ __('課程') }}
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="col-2">課程名稱</th>
                                <th class="col-8">課程內容</th>
                                <th class="col-2" class="d-flex justify-content-center">功能</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (App\Models\course::all() as $course)
                            <tr>
                                <td><a href="{{ route('course.show', $course->coid) }}">{{ $course->coname }}</a></td>
                                <td>{!! nl2br($course->content) !!}</td>
                                <td>
                                    @auth
                                    <div class="d-flex justify-content-around">
                                        <button type="submit" class="btn btn-primary"><a href="{{ route('course.edit', [$course->coid]) }}" class="text-decoration-none text-white">編輯</a></button>
                                        <form action="{{ route('course.destroy', [$course->coid] ) }}" method="post" onclick="return confirm('你確定要刪除文章嗎?')">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">刪除</button>
                                        </form>
                                    </div>
                                    @endauth
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection