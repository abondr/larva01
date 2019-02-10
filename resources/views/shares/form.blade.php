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
    <div class="form-group row">
            {!! Form::label('share_name', 'Name') !!}
        {!! Form::text("share_name", $share->share_name, ['class'=>'form-control']) !!}
        {!! $errors->first('share_name','<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="form-row">
        <div class='col-sm-6'>
            {!! Form::label('share_quantity','Quantity') !!}
            {!! Form::text("share_quantity", $share->share_quantity, ['class'=>'form-control']) !!}
            {!! $errors->first('share_quantity','<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class='col-sm-6'>
                {!! Form::label('share_price','Price') !!}
                {!! Form::text("share_price", $share->share_price, ['class'=>'form-control']) !!}
                {!! $errors->first('share_price','<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
   
    <div class="form-group row">
            {!! Form::label('share_description', 'Description')!!} 
        {!! Form::textarea("share_description",$share->share_description,['class'=>'form-control','cols'=>'2','rows'=>'5']) !!}
        {!! $errors->first('share_description','<div class="invalid-feedback">:message</div>') !!}
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