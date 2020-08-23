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
                <form action="{{ route('experience.update', $item->id) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="title" class="form-control-label">Title</label>
                        <input class="form-control" type="text" value=" {{ $item->title }} " name="title" id="title">
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-control-label">Description</label>
                        <input class="form-control" type="text" value=" {{ $item->description }} " name="description" id="description">
                    </div>
                    <div class="form-group">
                        <label for="place" class="form-control-label">place</label>
                        <input class="form-control" type="text" value=" {{ $item->place }} " name="place" id="place">
                    </div>
                    <div class="form-group">
                        <label for="year" class="form-control-label">Year</label>
                        <input class="form-control" type="text" value=" {{ $item->year }} " name="year" id="year">
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
                @endforeach
            </div>
                
        </div>
    </div>
</div>

@endsection