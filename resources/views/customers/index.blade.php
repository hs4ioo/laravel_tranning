<h1>Customer List</h1>

@foreach ($customers as $item)
    <p><a href="./customer/{{$item}}">{{$item}}</a></p>
@endforeach

{{-- <p><a href="./customer/bank">Link1</a></p>
<p><a href="./customer/mr.bank">Link2</a></p> --}}
