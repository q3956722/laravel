@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    檢視者：{{ Auth::user()->name }}
                    <a class="text-decoration-none" href="{{ route('unit.create') }}">{{ __('新增單元') }}</a>
                </div>

                <div class="card-body">
                    <div class="mb-2">
                        <a href="{{ url('/') }}">{{ __('首頁') }}</a>
                        {{ __(' > ') }}
                        <a href="{{route('course.index')}}">{{ __('課程選單') }}</a>
                        {{ __(' > ') }}
                        @foreach (App\Models\course::all() as $course)
                            {{ $course->coname }}
                        @endforeach
                        {{ __(' > ') }}
                        {{ __('單元選單') }}
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="col-md-2">單元名稱</th>
                                <th class="col-md-8">單元介紹</th>
                                <th class="col-md-2 text-center">功能</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (App\Models\unit::all() as $unit)
                            <tr>
                                <td><a href="{{ route('unit.show', $unit->unid) }}">{{ $unit->unname }}</a></td>
                                <td class="text-truncate overflow-hidden" style="max-width: 400px;">{{ $unit->unintro }}</td>
                                <td>
                                    @auth
                                    <div class="d-flex justify-content-around">
                                        <button type="submit" class="btn btn-primary"><a href="{{ route('unit.edit', [$unit->unid]) }}" class="text-decoration-none text-white">編輯</a></button>
                                        <form action="{{ route('unit.destroy', [$unit->unid] ) }}" method="post" onclick="return confirm('你確定要刪除文章嗎?')">
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