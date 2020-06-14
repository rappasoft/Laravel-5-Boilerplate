@extends('frontend.layouts.app')

@section('title', __('Your password has expired.'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <x-frontend.card>
                <x-slot name="header">
                    @lang('Your password has expired.')
                </x-slot>

                <x-slot name="body">
                    <x-forms.patch :action="route('frontend.auth.password.expired.update')">
                        <x-forms.group for="current_password" labelClass="col-md-4 col-form-label text-md-right" bodyClass="col-md-6" :label="__('Current Password')">
                            <x-forms.password name="current_password" placeholder="Current Password" required autofocus />
                        </x-forms.group>

                        <x-forms.group for="password" labelClass="col-md-4 col-form-label text-md-right" bodyClass="col-md-6" :label="__('Password')">
                            <x-forms.password id="password" name="password" placeholder="New Password" required autocomplete="password" />
                        </x-forms.group>

                        <x-forms.group for="password_confirmation" labelClass="col-md-4 col-form-label text-md-right" bodyClass="col-md-6" :label="__('Confirm Password')">
                            <x-forms.password id="password_confirmation" name="password_confirmation" placeholder="Confirm New Password" required autocomplete="new-password" />
                        </x-forms.group>

                        <x-forms.group :noLabel="true" groupClass="form-group row mb-0" bodyClass="col-md-6 offset-md-4">
                            <x-forms.submit class="btn btn-primary" :text="__('Update Password')" />
                        </x-forms.group>
                    </x-forms.patch>
                </x-slot>
            </x-frontend.card>
        </div><!--col-md-8-->
    </div><!--row-->
@endsection