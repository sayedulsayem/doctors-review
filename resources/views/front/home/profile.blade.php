@extends('front.master')

@section('title')
    profile
@endsection

@section('body')
    <table style="width:100%">
        <tr>
            <th>NID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <tr>
            <th> {{ $userInfo->nid }} </th>
            <th> {{ $userInfo->name }} </th>
            <th> {{ $userInfo->email }} </th>
        </tr>
    </table>
@endsection
