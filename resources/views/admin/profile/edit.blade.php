@extends('layouts.admin')
@section('titile','プロフィールの編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md mx-auto">
                <h2>プロフィールの編集</h2>
                <form action="{{ action('Admin\ProfileController@update) }}" method="post" enctype="multipart/form-date">
                    @if (count($errors->all() > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif    
                    <div class="form-group row">
                        <label class="col-md-2" for="name">名前</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ $profile_form->title }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="gender">性別</label>
                        <div class"col-md-10">
                            <textarea class="form-control" name="gender" row="20">{{ $profile_form->gender }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="hobby">趣味</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="hobby" row="20">{{ $profile_form->hobby }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="introduction">自己紹介</label>
                        <div class="col-md-10"> 
                            <textarea class="form-control" name="introduction" row="20">{{ $profile_form->introduction }}</textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection        
   