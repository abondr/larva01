@extends("layouts.layout01",['activePage'=>$activePage])
@section('page_title',"Shares Listing")
@section('page_content')    
    <h1 class="mt-5">Shares Listing's</h1>
    <table class='table  table-striped'>
        <thead class="thead-light ">
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th colspan=2>Actions</th>
            </tr>
        </thead>
        <tbldy>
            @foreach($shares as $share)
            <tr>
                <td><a class='btn-sm btn-info' href='{{ URL::to("/shares/$share->share_id") }}'>{{ $share->share_name }}</a></td>
                <td>{{ $share->share_price }}</td>
                <td>{{ $share->share_quantity }}</td>
                <td>
                    <a class='btn-sm btn-primary' href='URL::to("/share/{$share->share_id}/edit")'>Edit</a>
                    <a class='btn-sm btn-danger' data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure?" href='{{ URL::to("/shares/{$share->share_id}")}}'>Delete</a>
                </td>
            </tr>    
            @endforeach
        </tbody>
    </table> 
    {{ $shares->links()  }}   
@endsection