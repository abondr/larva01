@extends('layouts.layout01',['currentPage'=>"share_page"])
@section("page_title","Share Details")
@section("page_content")
<h3 class="mt-1">{{ $share->share_name }}<br>&nbsp;&nbsp;
    <a href='{{ URL::to("/share/".$share->share_id."/edit") }}' class='btn btn-info'>Edit</a> 
    &nbsp;&nbsp;<span>{!! Form::open(['url' => 'share/'.$share->share_id,'method'=>'DELETE']) !!}
{!! Form::submit("Delete",['class'=>'btn btn-denger','id'=>'btnDeleteID']) !!}
{!! Form::close() !!}</span>
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