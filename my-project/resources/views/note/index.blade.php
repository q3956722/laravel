@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    檢視者：{{ Auth::user()->name }}
                    <a class="text-decoration-none" href="{{ route('note.create') }}">{{ __('Create Post') }}</a>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>筆記ID</th>
                                <th>筆記內容</th>
                                <th>使用者名稱</th>
                                <th class="d-flex justify-content-center">功能</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (App\Models\note::all() as $note)
                            <tr>
                                <td><a href="{{ route('note.show', $note->noid) }}">{{ $note->noid }}</a></td>
                                <td>{{ $note->nocontent }}</td>
                                <td>{{ $note->userid }}</td>
                                <td>
                                    @auth
                                    <div class="d-flex justify-content-around">
                                        <button type="submit" class="btn btn-primary"><a href="{{ route('note.edit', [$note->noid]) }}" class="text-decoration-none text-white">編輯</a></button>
                                        <form action="{{ route('note.destroy', [$note->noid] ) }}" method="post" onclick="return confirm('你確定要刪除文章嗎?')">
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