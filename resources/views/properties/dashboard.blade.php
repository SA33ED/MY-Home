@extends("layout")
@extends("nav")

@include('nav')
@section("btn")


@section("page-contant")




{{-- <br>
<form method="post" action="{{ route('properties.result_by_dynamically')}}">
    @csrf
    <input type="text" name="term" class="form-control" placeholder="Search" value="{{request('term')}}" style="text-align: center"><br>
    <button type="submit" class="btn btn-primary" style="width: 100%">Search</button>
</form>
<br> --}}


    {{-- @empty($pro)

        <table class="table">
            <tr>
                <th scope="col">Type</th>
                <th scope="col">Address</th>
                <th scope="col">City</th>
                <th scope="col">Area</th>
                <th scope="col">Price per Month</th>
                <th scope="col">Num Of Rooms</th>
                <th scope="col">Num Of Bathrooms</th>
                <th scope="col">Num Of kitchens</th>
                <th scope="col">Num Of Floors</th>
                <th scope="col">Floor</th>
                <th scope="col">Owner</th>
            </tr>
            @forelse($properties as $properity)
            <tr>
                <td>{{ $properity->type->name }}</td>
                <td>{{ $properity->address }}</td>
                <td>{{ $properity->city->name }}</td>
                <td>{{ $properity->area }}</td>
                <td>{{ $properity->price_per_month }}</td>
                <td>{{ $properity->num_of_rooms }}</td>
                <td>{{ $properity->num_of_bathrooms }}</td>
                <td>{{ $properity->num_of_kitchen }}</td>
                <td>{{ $properity->num_of_floors }}</td>
                <td>{{ $properity->floors }}</td>
                <td>{{ $properity->customer->name }}</td>
            </tr>
            @empty
                <td colspan="4">No Records match your Query</td>
            @endforelse

    @else
        <table class="table">
            <tr>
                <th scope="col">Type</th>
                <th scope="col">Address</th>
                <th scope="col">City</th>
                <th scope="col">Area</th>
                <th scope="col">Price per Month</th>
                <th scope="col">Num Of Rooms</th>
                <th scope="col">Num Of Bathrooms</th>
                <th scope="col">Num Of kitchens</th>
                <th scope="col">Num Of Floors</th>
                <th scope="col">Floor</th>
                <th scope="col">Owner</th>
            </tr>
            @forelse($pro as $properity)
            <tr>
                <td>{{ $properity->type->name }}</td>
                <td>{{ $properity->address }}</td>
                <td>{{ $properity->city->name }}</td>
                <td>{{ $properity->area }}</td>
                <td>{{ $properity->price_per_month }}</td>
                <td>{{ $properity->num_of_rooms }}</td>
                <td>{{ $properity->num_of_bathrooms }}</td>
                <td>{{ $properity->num_of_kitchen }}</td>
                <td>{{ $properity->num_of_floors }}</td>
                <td>{{ $properity->floors }}</td>
                <td>{{ $properity->customer->name }}</td>
            </tr>
            @empty
                <td colspan="4">No Records match your Query</td>
            @endforelse
        </table>
    @endempty --}}

    {{-- <div class="container">
        <form method="post" action="{{ route('properties.result_by_area')}}" class="pt-5">
            @csrf
            <button type="submit" class="btn btn-primary" style="width: 100%">Search</button>
        </form>
        <br>

    </div>


    <table class="table">
        <thead>
        <tr>

            <th scope="col">Type</th>
            <th scope="col">Address</th>
            <th scope="col">City</th>
            <th scope="col">Area</th>
            <th scope="col">Price per Month</th>
            <th scope="col">Num Of Rooms</th>
            <th scope="col">Num Of Bathrooms</th>
            <th scope="col">Num Of kitchens</th>
            <th scope="col">Num Of Floors</th>
            <th scope="col">Floor</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($properties as $properity)
            <tr>
                <td>{{ $properity->type->name }}</td>
                <td>{{ $properity->address }}</td>
                <td>{{ $properity->city->name }}</td>
                <td>{{ $properity->area }}</td>
                <td>{{ $properity->price_per_month }}</td>
                <td>{{ $properity->num_of_rooms }}</td>
                <td>{{ $properity->num_of_bathrooms }}</td>
                <td>{{ $properity->num_of_kitchen }}</td>
                <td>{{ $properity->num_of_floors }}</td>
                <td>{{ $properity->floors }}</td>
            </tr>

            @endforeach
        </tbody>
    </table> --}}
@endsection


