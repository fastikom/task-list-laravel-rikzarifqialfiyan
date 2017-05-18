@extends('layout')
@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="well">
                <div class="page-header">
                    <h3>Create new task.</h3>
                </div>
                <form action="{{ route('tasks.create') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" name="title" class="form-control form-roll" placeholder="Judul . . ." />
                    </div>
                    <div class="form-group">
                        <textarea name="body" cols="30" rows="10" class="form-control" placeholder="Keterangan . . ."></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Simpan" class="btn btn-default">
                    </div>
                </form>
            </div> <!-- Well -->
            @foreach ($jobs as $job)
    <div class="panel panel-default">
        <div class="panel-heading">{{ $job->title }}</div>
        <div class="panel-body">
            {{ $job->body }}
            <p>
    <a href="{{ route('tasks.edit', $job->id) }}" class="btn btn-success btn-success">Edit</a>
</p>
        </div>
    </div>
@endforeach
        </div>
    </div>

@endsection