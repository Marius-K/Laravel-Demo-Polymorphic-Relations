<?php

namespace App\Http\Requests;

use App\Rules\PostOrVideoRule;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreCommentRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('comment_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'body' => [
                'required'
            ],
            'post_id' => [
                'required_without:video_id', new PostOrVideoRule()
            ],
        ];
    }
}
