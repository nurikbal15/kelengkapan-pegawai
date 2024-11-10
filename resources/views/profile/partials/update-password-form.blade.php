<div class="container-fluid">
    <h2 class="h4 mb-4 text-gray-800">{{ __('Update Password') }}</h2>
    <p class="mb-4 text-gray-600">{{ __('Ensure your account is using a long, random password to stay secure.') }}</p>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="post" action="{{ route('password.update') }}" class="user">
                @csrf
                @method('put')

                <!-- Current Password -->
                <div class="form-group">
                    <label for="update_password_current_password" class="text-gray-900">{{ __('Current Password') }}</label>
                    <input id="update_password_current_password" type="password" name="current_password" class="form-control form-control-user mt-2" autocomplete="current-password">
                    @error('current_password')
                        <small class="text-danger mt-1">{{ $message }}</small>
                    @enderror
                </div>

                <!-- New Password -->
                <div class="form-group">
                    <label for="update_password_password" class="text-gray-900">{{ __('New Password') }}</label>
                    <input id="update_password_password" type="password" name="password" class="form-control form-control-user mt-2" autocomplete="new-password">
                    @error('password')
                        <small class="text-danger mt-1">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                    <label for="update_password_password_confirmation" class="text-gray-900">{{ __('Confirm Password') }}</label>
                    <input id="update_password_password_confirmation" type="password" name="password_confirmation" class="form-control form-control-user mt-2" autocomplete="new-password">
                    @error('password_confirmation')
                        <small class="text-danger mt-1">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Save Button -->
                <div class="d-flex justify-content-end mt-4">
                    <button type="submit" class="btn btn-primary btn-user">{{ __('Save') }}</button>
                </div>

                <!-- Success Message -->
                @if (session('status') === 'password-updated')
                    <p class="text-success mt-3" x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">
                        {{ __('Password updated successfully.') }}
                    </p>
                @endif
            </form>
        </div>
    </div>
</div>
