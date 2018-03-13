@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Forum Threads</div>

                <div class="card-body">
                    <form action="/threads" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="channel_id">Choose a Channel:</label>
                            <select name="channel_id" id="channel_id" class="form-control">
                                <option value="">Choose one...</option>
                                @foreach ($channels as $channel)
                                    <option value="{{ $channel->id }}" {{ old('channel_id') == $channel->id ? 'selected' : '' }} required>{{ $channel->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" id="title" name="title" class="form-control" required value="{{ old('title') }}">
                        </div>
                        <div class="form-group">
                            <label for="body">Body:</label>
                            <textarea id="body" name="body" required class="form-control">{{ old('body') }}</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-default">Post</button>
                        </div>
                    </form>
                    @if (count($errors))
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection