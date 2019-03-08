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
                        <th scope="col">Redirect URL</th>
                        <th scope="col">Enabled</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($modules as $module)
                        <tr>
                            <td>{{ $module->Name }}</td>
                            <td>{{ $module->ModuleType }}</td>
                            <td>{{ $module->RedirectURL }}</td>
                            <td>{{ $module->IsEnabled }}</td>
                            <td class="d-flex justify-content-center">
                                <button class="btn btn-link">Edit</button>
                                <form method="POST" action="{{ route('modules.destroy', $module->getKey()) }}">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-link">Disable</button>
                                </form>
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
