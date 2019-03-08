@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-sm-12 d-flex justify-content-end">
            <a href="{{ route('modules.create') }}" class="btn btn-primary">Add Module</a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">DESCRIPTION</th>
                        <th scope="col">TYPE</th>
                        <th scope="col">URL</th>
                        <th scope="col">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($modules as $module)
                        <tr>
                            <td>{{ $module->Name }}</td>
                            <td>{{ $module->ModuleType }}</td>
                            <td>{{ $module->RedirectURL }}</td>
                            <td>
                                <button class="btn btn-link">Edit</button> |
                                <button class="btn btn-link">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $modules->links() }}
        </div>
    </div>
</div>
@endsection
