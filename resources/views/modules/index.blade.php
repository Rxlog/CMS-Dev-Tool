@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Modules</h1>

            @foreach ($modules as $module)
                <div class="card" style="margin-bottom: 1rem;">
                    <div class="card-header">{{ $module->Name }}</div>

                    <div class="card-body">
                        <h5><strong>Submodule actions: </strong></h5>

                        @foreach ($module->moduleActions as $action)
                            <p>{{ $action->ActionName }}</p>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
