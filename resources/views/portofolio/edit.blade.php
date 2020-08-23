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
                <form action="{{ route('portofolio.update', $item->id) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="name" class="form-control-label">Name</label>
                        <input placeholder="name" class="form-control" value=" {{ $item->name }} " type="text" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="age" class="form-control-label">age</label>
                        <input placeholder="age" class="form-control" value=" {{ $item->age }} " type="text" name="age" id="age">
                    </div>
                    <div class="form-group">
                        <label for="phonsel_number" class="form-control-label">phonsel_number</label>
                        <input placeholder="phonsel_number" class="form-control" value=" {{ $item->phonsel_number }} " type="text" name="phonsel_number" id="phonsel_number">
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-control-label">email</label>
                        <input placeholder="email" class="form-control" value=" {{ $item->email }} " type="text" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-control-label">title</label>
                        <input placeholder="title" class="form-control" value=" {{ $item->title }} " type="text" name="title" id="title">
                    </div>
                    <div class="form-group">
                        <label for="job_desk" class="form-control-label">job_desk</label>
                        <input placeholder="job_desk" class="form-control" value=" {{ $item->job_desk }} " type="text" name="job_desk" id="job_desk">
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
                @endforeach
            </div>
                
        </div>
    </div>
</div>

@endsection