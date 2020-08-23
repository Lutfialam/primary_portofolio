@extends('layouts.dashboard_layouts.index')
@section('main__content')

<div class="row">
    <div class="col">
        <div class="card mt-3">
            <!-- Card header -->
            <div class="card-header border-0">
                <h3 class="mb-0">Edit data</h3>
            </div>
            
            <div class="container">
                @foreach ($data as $item)
                <form action="{{ route('project.update', $item->id) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="name" class="form-control-label">Name</label>
                        <input placeholder="name" class="form-control" value=" {{ $item->name }} " type="text" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-control-label">Description</label>
                        <input placeholder="description" class="form-control" value=" {{ $item->description }} " type="text" name="description" id="description">
                    </div>
                    <div class="form-group">
                        <label for="image" class="form-control-label">image</label>
                        <input placeholder="image" class="form-control" value=" {{ $item->image }} " type="text" name="image" id="image">
                    </div>
                    <div class="form-group">
                        <label for="github_link" class="form-control-label">github_link</label>
                        <input placeholder="github_link" class="form-control" value=" {{ $item->github_link }} " type="text" name="github_link" id="github_link">
                    </div>
                    <div class="form-group">
                        <label for="built_at" class="form-control-label">built_at</label>
                        <input placeholder="built_at" class="form-control" value=" {{ $item->built_at }} " type="text" name="built_at" id="built_at">
                    </div>
                    <div class="form-group">
                        <label for="tech" class="form-control-label">tech</label>
                        <input placeholder="tech" class="form-control" value=" {{ $item->tech }} " type="text" name="tech" id="tech">
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
                @endforeach
            </div>
                
        </div>
    </div>
</div>

@endsection