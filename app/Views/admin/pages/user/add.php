
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
                    <div class="col-xl-6" style="width: 100%">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Validation type</h4>
                                <p class="card-title-desc">Parsley is a javascript form validation
                                    library. It helps you provide your users with feedback on their form
                                    submission before sending it to your server.</p>

                                <form class="custom-validation" action="admin/user/create" method="post">
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control" required placeholder="Type something"/>
                                    </div>

                                        <div class="mb-3">
                                        <label>Name</label>
                                        <div>
                                            <input type="name" name="name" class="form-control" required
                                                    parsley-type="email" placeholder="Enter a valid e-mail"/>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label>Password</label>
                                        <div>
                                            <input type="password" name="password" id="pass2" class="form-control" required
                                                    placeholder="Password"/>
                                        </div>
                                        <div class="mt-2">
                                            <input type="password" name="passwordConfirm" class="form-control" required
                                                    data-parsley-equalto="#pass2"
                                                    placeholder="Re-Type Password"/>
                                        </div>
                                    </div>

                                    <div class="mb-0">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-secondary waves-effect">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div> <!-- end col -->

                </div> <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
    </div>
</div>
