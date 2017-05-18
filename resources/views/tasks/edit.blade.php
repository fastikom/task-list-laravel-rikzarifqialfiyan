@extends('layout')
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="well">
                <div class="page-header">
                    <h3>Edit job: {{ $job->title }}</h3>
                </div>

                <form action="{{ route('tasks.edit', $job->id) }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" name="title" class="form-control form-roll" value="{{ $job->title }}" />
                    </div>
                    <div class="form-group">
                        <textarea name="body" cols="30" rows="10" class="form-control">{{ $job->body }}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Update" class="btn btn-default">
                    </div>
                </form>
            </div> <!-- Well -->
<form action="{{ route('tasks.delete', $job->id) }}" method="post">
    {{ csrf_field() }}
    <input type="submit" value="Hapus" class="btn btn-danger">

</form>
        </div>
    </div>

@endsection