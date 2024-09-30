<div class="auth-box-right">
    <div class="card">
        <div class="card-body">
            <form action="#">
                <h4 class="text-primary mb-4">Sign Up !</h4>
                <div class="form-group">
                    <input type="text" class="form-control" id="username" placeholder="Enter Full name here" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" placeholder="Enter Email here" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" placeholder="Enter Password here" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="re-password" placeholder="Re-Type Password" required>
                </div>
                <div class="form-group">
                    <select class="form-control" wire:model="audience">
                        <option value="">Are you a staff or student?</option>
                        <option value="staffs">Staff</option>
                        <option value="students">Student</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control" wire:model="faculty">
                        <option value="">Select Your Faculty</option>
                        <option value="all faculty">All Faculty</option>
                        <option value="school of pure and applied science">School of Pure and Applied Science</option>
                        <option value="school of agric">School of Agric</option>
                        <option value="school of engineering">School of Engineering</option>
                        <option value="school of environmental studies">School of Environmental Studies</option>
                        <option value="school of management studies">School of Management Studies</option>
                        <option value="school of communication and information">School of Communication and Information</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control" wire:model="faculty">
                        <option value="">Select Your Department</option>
                        <option value="all department">All Department under this faculty</option>
                        <option value="computer science">Computer Science</option>
                        <option value="food technology">Food Technology</option>
                        <option value="nutrition and diatetics">Nutrition and Diatetics</option>
                        <option value="mathematics and statistic">Mathematics and Statistic</option>
                        <option value="hospitality management">Hospitality Management</option>
                    </select>
                </div>
                <div class="form-row mb-3">
                    <div class="col-sm-12">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="terms">
                            <label class="custom-control-label font-14" for="terms">I Agree to Terms & Conditions of Theta</label>
                        </div>
                    </div>
                </div>
              <button type="submit" class="btn btn-success btn-lg btn-block font-18">Sign up Now</button>
            </form>
            <p class="mb-0 mt-3">Already have an account? <a href="{{ route('login') }}">Log in</a></p>
        </div>
    </div>
</div>
