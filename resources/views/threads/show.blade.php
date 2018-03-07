@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $thread->title }}</div>

                <div class="card-body">
                    <article>
                        <div>{{ $thread->body }}</div>
                    </article>
                </div>
                <div class="card">
                    <div class="card-body">
                         @foreach ($thread->replies as $reply)
                            <div class="panel-body">
                                {{ $reply->body }}
                            </div>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
