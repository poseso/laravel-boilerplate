<?php

namespace App\Http\Requests\Backend\Auth\User;

use Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ManageUserRequest.
 */
class ManageUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        switch (Route::currentRouteName()) {
            case 'admin.auth.user.index':
            case 'admin.auth.user.show': {
                return Auth::user()->can('view users');
            }
            case 'admin.auth.user.create':
            case 'admin.auth.user.login-as':
            case 'admin.auth.user.account.confirm.resend':
            case 'admin.auth.user.confirm':
            case 'admin.auth.user.unconfirm':
            case 'admin.auth.user.store': {
                return Auth::user()->can('create users');
            }
            case 'admin.auth.user.edit':
            case 'admin.auth.user.update':
            case 'admin.auth.user.clear-session':
            case 'admin.auth.user.social.unlink':
            case 'admin.auth.user.mark':
            case 'admin.auth.user.change-password.post':
            case 'admin.auth.user.change-password':{
                return Auth::user()->can('edit users');
            }
            case 'admin.auth.user.deactivated':
            case 'admin.auth.user.destroy':
            case 'admin.auth.user.deleted':
            case 'admin.auth.user.restore':
            case 'admin.auth.user.delete-permanently':{
                return Auth::user()->can('delete users');
            }

            default:return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
