@extends('layout.default')
@section('body')
<h1>Hello world</h1>
<label class="switch">
    <input type="checkbox" id="theme-toggle">
    <span>Enable live reload</span>
</label>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Index</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($table as $row)
        <tr>
            <td>{{ $row['name']}}</td>
            <td>{{ $row['planet'] }}</td>
            <td>{{ $row['date'] }}</td>
            <td>{{ $row['index'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection