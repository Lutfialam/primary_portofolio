@extends('layouts.dashboard_layouts.index')
@section('main__content')

<div class="row">
    <div class="col">
        @if(Session::has('success'))
            <div class="alert alert-default alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                <span class="alert-text"><strong>Success!</strong> {{ Session('success') }} </span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        
        <div class="card mt-3">
            <!-- Card header -->
            <div class="card-header border-0">
                <h3 class="mb-0">project</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
                <table class="table align-items-center table-flush table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort">No</th>
                            <th scope="col" class="sort">name</th>
                            <th scope="col" class="sort">Description</th>
                            <th scope="col" class="sort">image</th>
                            <th scope="col" class="sort">github_link</th>
                            <th scope="col" class="sort">built_at</th>
                            <th scope="col" class="sort">tech</th>
                            <th scope="col" class="sort">Action</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        @foreach($data as $results => $result)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td> {{ $result->name }} </td>
                            <td> {{ $result->description }} </td>
                            <td> <img src=" {{ $result->image }} " class="img-thumbnail" width="100"> </td>
                            <td> {{ $result->github_link }} </td>
                            <td> {{ $result->built_at }} </td>
                            <td> {{ $result->tech }} </td>
                            <td> 
                                <form action=" {{ route('project.destroy', $result->id) }} " method="post">
                                    @csrf
                                    @method('delete')
                                    <a href=" {{ route('project.edit', $result->id) }} " class="btn btn-warning">Edit</a>
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
                        <a href=" {{ route('project.create') }} " class="btn btn-primary">Add Data</a>
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