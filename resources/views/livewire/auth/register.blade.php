<div class="auth-box-right">
    <div class="card">
        <div class="card-body">
            <form wire:submit="register">
                <h4 class="text-primary mb-4">Sign Up !</h4>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" placeholder="Enter Full name here" wire:model="name">
                    @error('name')
                    <span class="text-sm text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" placeholder="Enter Email here" wire:model="email">
                    @error('email')
                    <span class="text-sm text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" placeholder="Enter Password here" wire:model="password">
                    @error('password')
                    <span class="text-sm text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="re-password" placeholder="Re-Type Password" wire:model="password_confirmation">
                </div>
                <div class="form-group">
                    <select class="form-control" wire:model="role">
                        <option value="">Are you a staff or student?</option>
                        <option value="staffs">Staff</option>
                        <option value="students">Student</option>
                    </select>
                    @error('audience')
                    <span class="text-sm text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <select class="form-control text-capitalize" wire:model.live="faculty_id">
                        <option value="">Select Your Faculty</option>
                        @foreach($faculties as $faculty)
                        <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                        @endforeach
                    </select>
                    @error('faculty')
                    <span class="text-sm text-danger">{{ $message }}</span>
                    @enderror
                </div>
                @if($departments)
                <div class="form-group">
                    <select class="form-control" wire:model="department_id">
                        <option value="">Select Your Department</option>
                        @foreach($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                        @endforeach
                    </select>
                    @error('department')
                    <span class="text-sm text-danger">{{ $message }}</span>
                    @enderror
                </div>
                @endif
                <div class="form-row mb-3">
                    <div class="col-sm-12">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="terms">
                            <label class="custom-control-label font-14" for="terms">I Agree to Terms & Conditions of Theta</label>
                        </div>
                    </div>
                </div>
                <div wire:loading wire:loading.class="d-block">
                    <div class="d-flex align-items-center">
                        <strong>Loading...</strong>
                        <div class="spinner-border ml-auto" role="status" aria-hidden="true"></div>
                    </div>
                </div>
              <button wire:loading.attr="disabled" type="submit" class="btn btn-success btn-lg btn-block font-18">Sign up Now</button>
            </form>
            <p class="mb-0 mt-3">Already have an account? <a href="{{ route('login') }}">Log in</a></p>
        </div>
    </div>
</div>
