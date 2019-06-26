@extends('layouts.app')

@section('content')

        <table>
            <tr>
                <td>Car ID </td>
                <td>Make </td>
                <td>Model </td>
            </tr>
    @foreach ($cars as car)
    <tr>
        <ul>
            <td> {{$car->id}}</td>
            <td> {{$car->make}}<td>
            <td> {{$car->model}}</td>
        </ul>
    </tr>  
    @endforeach
    </table>  
    
@endsection