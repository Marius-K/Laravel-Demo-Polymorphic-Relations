@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.comment.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.comments.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="body">{{ trans('cruds.comment.fields.body') }}</label>
                <textarea class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" name="body" id="body" required>{{ old('body') }}</textarea>
                @if($errors->has('body'))
                    <div class="invalid-feedback">
                        {{ $errors->first('body') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.comment.fields.body_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="post_id">{{ trans('cruds.comment.fields.post') }}</label>
                <select class="form-control select2 {{ $errors->has('post') ? 'is-invalid' : '' }}" name="post_id" id="post_id">
                    @foreach($posts as $id => $post)
                        <option value="{{ $id }}" {{ old('post_id') == $id ? 'selected' : '' }}>{{ $post }}</option>
                    @endforeach
                </select>
                @if($errors->has('post'))
                    <div class="invalid-feedback">
                        {{ $errors->first('post') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.comment.fields.post_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="video_id">{{ trans('cruds.comment.fields.video') }}</label>
                <select class="form-control select2 {{ $errors->has('video') ? 'is-invalid' : '' }}" name="video_id" id="video_id">
                    @foreach($videos as $id => $video)
                        <option value="{{ $id }}" {{ old('video_id') == $id ? 'selected' : '' }}>{{ $video }}</option>
                    @endforeach
                </select>
                @if($errors->has('video'))
                    <div class="invalid-feedback">
                        {{ $errors->first('video') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.comment.fields.video_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection