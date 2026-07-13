@extends('layout')

@section('title', 'เขียนบทความ')

@section('content')
    <h2 class="text text-center py-2">เขียนบทความ</h2>
    <form method="POST">
        <div class="group">
            <label for="title">ชื่อบทความ</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="group">
            <label for="content">เนื้อหาบทความ</label>
            <textarea class="form-control" name="content" cols="30" rows="5"></textarea>
        </div>
        <input type="submit" value="บันทึก" class="btn btn-success my-2">
        <a href="{{ route('blogs') }}" class="btn btn-primary my-2">บทความทั้งหมด</a>
    </form>
@endsection