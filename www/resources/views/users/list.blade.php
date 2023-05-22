@extends('layouts.page')

@section('content')
    <x-index-table>
        <x-slot name="title">
            Users
        </x-slot>
        <x-slot name="description">
            A list of all the users in your account including their name, title, email and role.
        </x-slot>
        <x-slot name="actions">
            <a class="button-primary" href="#">
                Add user
            </a>
        </x-slot>
        <x-slot name="thead">
            <tr>
                <th>Name</th>
                <th>Tenants</th>
                <th>Status</th>
                <th>Role</th>
                <th></th>
            </tr>
        </x-slot>
        <x-slot name="tbody">
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>
                        @foreach ($user->tenants as $tenant)
                            <div>
                                {{ $tenant->tenant_hash }}
                            </div>
                        @endforeach
                    </td>
                    <td>
                        <div class="user-status-badge user-status-badge-active">
                            Active
                        </div>
                    </td>
                    <td>
                        User
                    </td>
                    <td>
                        <a class="button-link" href="#">
                            Edit
                        </a>
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-index-table>
@endsection
