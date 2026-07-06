@extends('layout')

@section('title','บทความ')

@section('content')
<h2>บทความทั้งหมด</h2>
    <hr>
    @forelse ($blogs as $item)
        <h2>{{$item['title']}}</h2>
        <p>{{$item['content']}}</p>
        @if ($item['status'])
            <p class="text-success">สถานะ: เผยแพร่</p>
        @else
            <p class="text-danger">สถานะ: ไม่เผยแพร่</p>
        @endif
        <hr>
    @empty
        <p>ไม่พบข้อมูล</p>
    @endforelse
@endsection