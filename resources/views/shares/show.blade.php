@extends('layouts.layout01',['currentPage'=>"share_page"])
@section("page_title","Share Details")
@section("page_content")
<h3 class="mt-1">{{ $share->share_name }}<br>&nbsp;&nbsp;
<div class='row'>
    <div class='col-md-2'>
        <a href='{{ URL::to("/share/".$share->share_id."/edit") }}' class='btn btn-info'>Edit</a>
    </div>
    <div class='col-md-10 btn btn-denger'> {!! Form::open(['url' => 'share/'.$share->share_id,'method'=>'DELETE']) !!}
            {!! Form::submit("Delete",['class'=>'btn btn-danger']) !!}
            {!! Form::close() !!} </span>
    </div>
</h3>
<table class='table table-striped table-sm'>
<tbody>
    <tr>
        <td>Price</td>
        <td>{{ $share->share_price }}</td>
        <td>Quantity</td>
        <td>{{ $share->share_quantity }}</td>
        <td></td><td></td>
        <td></td><td></td>        
    </tr>
    <tr>
        <td colspan=6>{{ $share->share_description }}</td>
    </tr>
</tbody>
</table>

@endSection