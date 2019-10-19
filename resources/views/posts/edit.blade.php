@extends('layouts.app')
@section('content')

    <h3 dir="rtl">ویرایش فرم</h3>
    {!! Form::model($post,['method'=>'PATCH','action'=>['PostsController@update',$post->id]] ) !!}
    <div class="form-group">
        {!! Form::label('title','عنوان:') !!}
        {!! Form::text('title',$post->title,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description','توضیحات:') !!}
        {!! Form::textarea('description',$post->content,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('به روز رسانی',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
    {!! Form::model($post,['method'=>'DELETE','action'=>['PostsController@destroy',$post->id]]) !!}
    <div class="form-group">
        {!! Form::submit('حذف',['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

{{--    <h3 dir="rtl">ویرایش فرم</h3>--}}
{{--    <form method="post" action="/posts/{{$post->id}}" dir="rtl">--}}
{{--        @csrf--}}
{{--        <input type="hidden" name="_method" value="PATCH">--}}
{{--        <input type="text" name="title" placeholder="عنوان مطلب" value="{{$post->title}}">--}}
{{--        <br/>--}}
{{--        <textarea type="text" name="description" placeholder="توضیحات مطلب">{{$post->content}}</textarea>--}}
{{--        <br/>--}}
{{--        <button type="submit" name="submit">به روز رسانی</button>--}}

{{--    </form>--}}
{{--    <form method="post" action="/posts/{{$post->id}}" dir="rtl">--}}
{{--        @csrf--}}
{{--        <input type="hidden" name="_method" value="DELETE">--}}
{{--        <button type="submit" name="submit">حذف</button>--}}

{{--    </form>--}}
@endsection

