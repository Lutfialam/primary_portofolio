@extends('layouts.dashboard_layouts.index')
@section('main__content')

<div class="row">
    <div class="col">
        <div class="card mt-3">
            <!-- Card header -->
            <div class="card-header border-0">
                <h3 class="mb-0">Light table</h3>
            </div>
            
            <div class="container">

                <form action="{{ route('experience.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title" class="form-control-label">Title</label>
                        <input placeholder="title" class="form-control" type="text" name="title" id="title">
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-control-label">Description</label>
                        <input placeholder="description" class="form-control" type="text" name="description" id="description">
                    </div>
                    <div class="form-group">
                        <label for="place" class="form-control-label">place</label>
                        <input placeholder="place" class="form-control" type="text" name="place" id="place">
                    </div>
                    <div class="form-group">
                        <label for="year" class="form-control-label">Year</label>
                        <input placeholder="year" class="form-control" type="text" name="year" id="year">
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
                
            </div>
        </div>
    </div>
</div>

@endsection