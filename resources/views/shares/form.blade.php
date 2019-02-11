@extends('layouts.layout01',['currentPage'=>"share_page"])

@section("page_content")
<h3 class="mt-1">{!! !empty($share) && !empty($share->share_id)? 'Edit':'Add'  !!} Share</h3>
@if(!empty($share) && !empty($share->share_id))
@section("page_title",$share->share_name)
{!! Form::open(['url'=>'share/'.$share->share_id,'method'=>'PUT']) !!}
@else    
@section("page_title",'Share Addition')
    {!! Form::open(['url' => 'share','method'=>'POST']) !!}
@endif
    <div class="form-group row" >
        <div class='col-sm-6'>
            {!! Form::label('share_name', 'Name') !!}
        {!! Form::text("share_name", $share->share_name, ['class'=>'form-control']) !!}
        <span class="error_block">{!! $errors->first('share_name') !!}</span>
    </div>
    </div>
    <div class="form-group row">
        <div class='col-sm-3'>
            {!! Form::label('share_quantity','Quantity') !!}
            {!! Form::text("share_quantity", $share->share_quantity, ['class'=>'form-control']) !!}
            {!! $errors->first('share_quantity','<span class="error_block">:message</span>') !!}
        </div>
        <div class='col-sm-3'>
                {!! Form::label('share_price','Price') !!}
                {!! Form::text("share_price", $share->share_price, ['class'=>'form-control']) !!}
                {!! $errors->first('share_price','<span class="error_block">:message</span>') !!}
        </div>
    </div>
   
    <div class="form-group row col-sm-10">

        {!! Form::label('share_description', 'Description')!!} 
        {!! Form::textarea("share_description",$share->share_description,['class'=>'form-control','cols'=>'2','rows'=>'6']) !!}
        {!! $errors->first('share_description','<span class="error_block">:message</span>') !!}
    </div>
    <div class="form-group row">
        @if(!empty($share) && !empty($share->share_id))
        {!! Form::submit("Save Details") !!}
        @else
        {!! Form::submit("Add Details",['class'=>'btn btn-info']) !!}
        @endif
    </div>
{!! Form::close() !!}
@endSection