<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Myhealth</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth">
                    <div class="card col-lg-6 mx-auto">
                        <div class="card-body px-5 py-5">
                            <img src="../../attribute/myhealth.png" alt="" style="height: 6rem;">
                            <h3 class="card-title text-left mb-3">Register</h3>
                            <form action="/registeruser" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control p_input" name="name" placeholder="Nama Lengkap Sesuai KTP">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control p_input" name="email" placeholder="masukkan Email">
                                        </div>
                                        <div class="form-group">
                                            <label>Create Password</label>
                                            <input type="password" class="form-control p_input" name="password"  placeholder="masukkan Password">
                                        </div>
                                    </div>
                                    
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>NIK</label>
                                            <input type="text" class="form-control p_input" name="NIK" placeholder="NIK sesuai KTP">
                                        </div>
                                        <div class="form-group">
                                            <label>No Telpon</label>
                                            <input type="text" class="form-control p_input" name="no_telpon" placeholder="format : 08*******">
                                        </div>
                                        
                                        {{-- <div class="form-group">
                                            <input type="hiddem" name="user_id" value="{{Auth::user()->id}}">
                                        </div> --}}

                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block enter-btn ">Register</button>
                                </div>
                                <p class="sign-up text-center">Already have an Account?<a href="/login">sign up</a></p>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>
