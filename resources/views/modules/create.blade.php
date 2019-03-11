@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Add Module</h1>
        </div>
        <div class="col-sm-6">
            <form method="POST" action="{{ route('modules.store') }}">
                @csrf
                <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" name="Name" aria-describedby="Name">
                    <small id="Name" class="form-text text-muted">Must be unique</small>
                </div>
                <div class="form-group">
                    <label for="ModuleType">Type</label>
                    <input type="text" class="form-control" name="ModuleType">
                </div>
                <div class="form-group">
                    <label for="RedirectURL">Redirect URL</label>
                    <input type="text" class="form-control" name="RedirectURL">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" name="IsEnabled">
                    <label class="form-check-label" for="IsEnabled">Enable</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
        <div class="col-sm-5 offset-sm-1">
            <module-tree></module-tree>
        </div>
    </div>
</div>
@endsection
