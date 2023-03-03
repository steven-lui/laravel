@extends('layouts.master')

@section('title', 'Laravel Reflection')

@section('content')
    <h1 class="text-xl mb-2">Companies</h1>
    <table class="outline table-auto w-full text-center">
        <tr>
            <th>
                Name
            </th>
            <th>
                Email
            </th>
            <th>
                Logo
            </th>
            <th>
                Website
            </th>
            <th>

            </th>
            <th>

            </th>
        </tr>

        @foreach ($companies as $company)
            <tr>
                <td>
                    {{-- TODO: LINK TO COMPANY PAGE --}}
                    {{ $company->name }}
                </td>
                <td>
                    {{ $company->email }}
                </td>
                <td class="flex justify-center">
                    {{-- TODO: HOVER TO EXPAND LOGO --}}
                    <img src="{{ $company->logo }}">
                </td>
                <td>
                    <a href="{{ $company->website }}" target="_blank" rel="noopener noreferrer">
                        <?php
                        echo parse_url($company->website)['host'];
                        ?>
                    </a>
                </td>
                <td>
                    {{-- TODO --}}
                    <a href="" class="text-green-500 hover:bg-green-500 hover:text-white">Edit</a>
                </td>
                <td>
                    {{-- TODO --}}
                    <a href="" class="text-red-500 hover:bg-red-500 hover:text-white">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@stop
