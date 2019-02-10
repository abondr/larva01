@extends('layouts.layout01',['currentPage'=>"share_page"])
@section("page_title","Share Listing")
@section("page_content")
<h3 class="mt-1">Share Listing <a class='btn btn-info' href='{{ URL::to("/share/create") }}'>Add Share</a></h3>
@if (session()->has('message'))
<div class="alert alert-info">
    {{ session('message') }}
</div>
@endif
<table class='table table-striped table-sm'>
    <thead class='thead-dark'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($shares as $share)
        <tr>
                <td>{{ $share->share_id }}</td>
                <td>{{ $share->share_name }}</td>
                <td>{{ $share->share_quantity }}</td>
                <td>{{ $share->share_price }}</td>
                <td><a href='{{ URL::to("/share/".$share->share_id) }}' class='btn btn-warning'>Details</a></td>
            </tr>
        @endforeach
        <tr><td colspan=5>{{ $shares->links() }}</td></tr>
    </tbody>
</table>
@endSection