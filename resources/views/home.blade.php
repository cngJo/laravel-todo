@extends("layouts.app")

@section("content")
    <div class="row">
        <div class="col-12">
            <h1>Laravel-Todo-Application</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="/create" method="post">
                @csrf
                <div class="row">
                    <div class="col-10">
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" placeholder="Task title...">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <input type="submit" class="form-control btn btn-primary" name="submit" value="Submit">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <ul class="list-group">
                @if(isset($tasks))
                    @foreach($tasks as $task)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $task->title }}
                            <form action="/delete/{{ $task->id }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
@endsection
