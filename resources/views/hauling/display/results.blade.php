@extends('layouts.b4')
@section('content')
<br>
<div class="container">
    <div class="card">
        <div class="card-header">
            Your Query
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>Route</th>
                    <td>{{ $pickup }} >> {{ $destination }}</td>
                </tr>
                <tr>
                    <th>Warps</th>
                    <td>{{ $jumps }}</td>
                </tr>
                <tr>
                    <th>Volume</th>
                    <td>{{ $size }}</td>
                </tr>
                <tr>
                    <th>Collateral</th>
                    <td>{{ $collateral }} ISK</td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="container">
    <div class="card">
        <div class="card-header">
            Your Quote
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>Service Type</th>
                    <td>Highsec</td>
                </tr>
                <tr>
                    <th>Issue To</th>
                    <td>United Hauling</td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>{{ $price }}</td>
                </tr>
                <tr>
                    <th>Container Policy</th>
                    <td>Containers allowed.</td>
                </tr>
                <tr>
                    <th>Expiration</th>
                    <td>{{ $time }}</td>
                </tr>
                <tr>
                    <th>Days To Complete</th>
                    <td>{{ $duration }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection