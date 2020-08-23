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

                <form action="{{ route('project.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="form-control-label">Name</label>
                        <input placeholder="name" class="form-control" type="text" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-control-label">Description</label>
                        <input placeholder="description" class="form-control" type="text" name="description" id="description">
                    </div>
                    <div class="form-group">
                        <label for="github_link" class="form-control-label">github_link</label>
                        <input placeholder="github_link" class="form-control" type="text" name="github_link" id="github_link">
                    </div>
                    <div class="form-group">
                        <label for="built_at" class="form-control-label">built_at</label>
                        <input placeholder="built_at" class="form-control" type="text" name="built_at" id="built_at">
                    </div>
                    <div class="form-group">
                        <label for="tech" class="form-control-label">tech</label>
                        <input placeholder="tech" class="form-control" type="text" name="tech" id="tech">
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="image">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                      </div>
                    <button type="submit" class="btn btn-primary mt-3">Add</button>
                </form>
                
            </div>
        </div>
    </div>
</div>

@endsection