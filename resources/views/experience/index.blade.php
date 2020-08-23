@extends('layouts.dashboard_layouts.index')
@section('main__content')

<div class="row">
    <div class="col">
        @if(Session::has('success'))
            <div class="success"></div>
        @endif
        
        <div class="card mt-3">
            <!-- Card header -->
            <div class="card-header border-0">
                <h3 class="mb-0">Experience</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
                <table class="table align-items-center table-flush table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort">No</th>
                            <th scope="col" class="sort">Title</th>
                            <th scope="col" class="sort">Description</th>
                            <th scope="col" class="sort">Place</th>
                            <th scope="col" class="sort">Year</th>
                            <th scope="col" class="sort">Action</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        @foreach($data as $results => $result)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td> {{ $result->title }} </td>
                            <td> {{ $result->description }} </td>
                            <td> {{ $result->place }} </td>
                            <td> {{ $result->year }} </td>
                            <td> 
                                <form action=" {{ route('experience.destroy', $result->id) }} " method="post">
                                    @csrf
                                    @method('delete')
                                    <a href=" {{ route('experience.edit', $result->id) }} " class="btn btn-warning">Edit</a>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
                <div class="row">
                    <div class="col-md-9">
                        <a href=" {{ route('experience.create') }} " class="btn btn-primary">Add Data</a>
                    </div>
                    <div class="col-md-3">
                        {{ $data->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection