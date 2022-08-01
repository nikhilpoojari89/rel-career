<?php $title = "Reliance - Career"; ?>
<?php include 'header.php' ?>

<!--********************** Main Heading Banner Section ***********************-->
<section class="custom-top-padding mb-5">
    <div class="container-fluid custom-container">
        <div class="row justify-content-start">

            <div class="col-12" id="job_app_tab">
                <div class="row custom-nav-tabs-section">

                    <div class="col-12">
                        <div class="row custom-nav-tabs-div">
                            <div class="col-12">

                                <div class="custom-nav-tabs-wrapper">
        
                                    <ul class="nav nav-pills list mb-0 custom-nav-tabs py-2 justify-content-between" id="more_info_tabs" role="tablist">
                                        <li class="nav-item mr-2" role="presentation">
                                            <a class="nav-link active rounded-pill font-serif font-weight-bold" id="pills-branch-details-tab" data-toggle="pill" href="#pills-branch-details" role="tab" aria-controls="pills-branch-details" aria-selected="true">Branch Details</a>
                                        </li>
                                        <li class="nav-item mr-2" role="presentation">
                                            <a class="nav-link rounded-pill font-serif font-weight-bold" id="pills-personal-details-tab" data-toggle="pill" href="#pills-personal-details" role="tab" aria-controls="pills-personal-details" aria-selected="false">Personal Details</a>
                                        </li>
                                        <li class="nav-item mr-2" role="presentation">
                                            <a class="nav-link rounded-pill font-serif font-weight-bold" id="pills-previous-experience-tab" data-toggle="pill" href="#pills-previous-experience" role="tab" aria-controls="pills-previous-experience" aria-selected="false">Previous Experience</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link rounded-pill font-serif font-weight-bold" id="pills-educational-details-tab" data-toggle="pill" href="#pills-educational-details" role="tab" aria-controls="pills-educational-details" aria-selected="false">Educational Details</a>
                                        </li>
                                    </ul>
        
                                </div>
        
                            </div>
                        </div>
                        <div class="tab-content mt-4" id="pills-tabContent">
        
                            <div class="tab-pane fade show active" id="pills-branch-details" role="tabpanel" aria-labelledby="pills-branch-details-tab">
        
                                <div class="row">
                                    <div class="col-12">
        
                                        <!-- Branch Details Tab -->
                                        <div class="bg-white custom-border rounded-lg p-4 mt-2">
        
                                            <h4 class="title-color">Branch Details</h4>

                                            <form>
                                                <div class="form-row mt-4">
                                                    <div class="form-group col-md-4">
                                                        <label for="inputDepartment" class="title-color font-smooth font-16 font-weight-bold letter-spacing-1">Department<span class="text-danger">*</span></label>
                                                        <select id="inputDepartment" class="form-control" required>
                                                            <option selected>Select Department</option>
                                                            <option>Department 1</option>
                                                            <option>Department 2</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputZone" class="title-color font-smooth font-16 font-weight-bold letter-spacing-1">Zone<span class="text-danger">*</span></label>
                                                        <select id="inputZone" class="form-control" required>
                                                            <option selected>Select Zone</option>
                                                            <option>Zone 1</option>
                                                            <option>Zone 2</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputZone" class="title-color font-smooth font-16 font-weight-bold letter-spacing-1">State<span class="text-danger">*</span></label>
                                                        <select id="inputZone" class="form-control" required>
                                                            <option selected>Select State</option>
                                                            <option>State 1</option>
                                                            <option>State 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputHiringBranch" class="title-color font-smooth font-16 font-weight-bold letter-spacing-1">Hiring Branch<span class="text-danger">*</span><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="top" title="Indicates the branch candidates will be hired in."></i></label>
                                                        <select id="inputHiringBranch" class="form-control is-invalid" required>
                                                            <option selected>Select Hiring Branch</option>
                                                            <option>Hiring Branch 1</option>
                                                            <option>Hiring Branch 2</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Please provide your hiring branch.
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputInterviewBranch" class="title-color font-smooth font-16 font-weight-bold letter-spacing-1">Interview Branch<span class="text-danger">*</span><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="top" title="Indicates the branch where the referral will be interviewed."></i></label>
                                                        <select id="inputInterviewBranch" class="form-control is-valid" required>
                                                            <option selected>Select Interview Branch</option>
                                                            <option>Interview Branch 1</option>
                                                            <option>Interview Branch 2</option>
                                                        </select>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mt-4 mb-2 text-right">
                                                    <a href="javascript:void(0);" type="submit" id="step_1" class="btn btn-primary">Next</a>
                                                </div>

                                            </form>
        
                                        </div>
        
                                    </div>
                                </div>
        
                            </div>
        
                            <div class="tab-pane fade" id="pills-personal-details" role="tabpanel" aria-labelledby="pills-personal-details-tab">

                                <div class="row">
                                    <div class="col-12">
        
                                        <!-- Personal Details Tab -->
                                        <div class="bg-white custom-border rounded-lg p-4 mt-2">
        
                                            <h4 class="title-color">Personal Details</h4>

                                            <form>
                                                <div class="form-row mt-4">
                                                    <div class="form-group col-md-4">
                                                        <label for="inputName" class="title-color font-smooth font-16 font-weight-bold letter-spacing-1">Name<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" placeholder="Your Full Name" autocomplete="off" id="inputName" required>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputMobileNo" class="title-color font-smooth font-16 font-weight-bold letter-spacing-1">Mobile No<span class="text-danger">*</span></label>
                                                        <input type="text" maxlength="10" class="form-control" placeholder="Your Mobile No." autocomplete="off" id="inputMobileNo" required>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputAltMobileNo" class="title-color font-smooth font-16 font-weight-bold letter-spacing-1">Alternate Mobile No<span class="text-danger">*</span></label>
                                                        <input type="text" maxlength="10" class="form-control" placeholder="Your Alternate Mobile No." autocomplete="off" id="inputAltMobileNo" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="inputEmail" class="title-color font-smooth font-16 font-weight-bold letter-spacing-1">Email<span class="text-danger">*</span></label>
                                                        <input type="email" class="form-control" placeholder="Your Email ID" autocomplete="off" id="inputEmail" required>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputDOB" class="title-color font-smooth font-16 font-weight-bold letter-spacing-1">DOB<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" placeholder="Your DOB" autocomplete="off" id="inputDOB" required>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputAge" class="title-color font-smooth font-16 font-weight-bold letter-spacing-1">Age<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" placeholder="Your Age" autocomplete="off" id="inputAge" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputAddress" class="title-color font-smooth font-16 font-weight-bold letter-spacing-1">Address<span class="text-danger">*</span></label>
                                                    <textarea type="text" rows="4" class="form-control resize-none" id="inputAddress" placeholder="Your Address"></textarea>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6 col-lg-3">
                                                        <label for="inputGender" class="title-color font-smooth font-16 font-weight-bold letter-spacing-1">Gender<span class="text-danger">*</span></label>
                                                        <select id="inputGender" class="form-control" required>
                                                            <option selected>Select Gender</option>
                                                            <option>Male</option>
                                                            <option>Female</option>
                                                            <option>Others</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6 col-lg-3">
                                                        <label for="inputMaritalStatus" class="title-color font-smooth font-16 font-weight-bold letter-spacing-1">Marital Status<span class="text-danger">*</span></label>
                                                        <select id="inputMaritalStatus" class="form-control" required>
                                                            <option selected>Select Marital Status</option>
                                                            <option>Married</option>
                                                            <option>Unmarried</option>
                                                            <option>Widowed</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6 col-lg-3">
                                                        <label for="inputSmartPhone" class="title-color font-smooth font-16 font-weight-bold letter-spacing-1">Smart Phone<span class="text-danger">*</span></label>
                                                        <select id="inputSmartPhone" class="form-control" required>
                                                            <option selected>Select</option>
                                                            <option>Yes</option>
                                                            <option>No</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6 col-lg-3">
                                                        <label for="inputNative" class="title-color font-smooth font-16 font-weight-bold letter-spacing-1">Native<span class="text-danger">*</span></label>
                                                        <select id="inputNative" class="form-control" required>
                                                            <option selected>Select Native</option>
                                                            <option>0-1 Year</option>
                                                            <option>1-2 Years</option>
                                                            <option>2-3 Years</option>
                                                            <option>3 and Above</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="mt-4 mb-2 text-right">
                                                    <a href="javascript:void(0);" type="submit" id="step_prev_1" class="btn btn-outline-primary">Prev</a>
                                                    <a href="javascript:void(0);" type="submit" id="step_2" class="btn btn-primary ml-2">Next</a>
                                                </div>
                                            </form>
        
                                        </div>
        
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="pills-previous-experience" role="tabpanel" aria-labelledby="pills-previous-experience-tab">

                                <div class="row">
                                    <div class="col-12">
        
                                        <!-- Previous Experience Tab -->
                                        <div class="bg-white custom-border rounded-lg p-4 mt-2">
        
                                            <h4 class="title-color">Previous Experience</h4>

                                            <form>
                                                <div class="form-row mt-4">
                                                    <div class="form-group col-md-4">
                                                        <label for="inputUploadResume" class="title-color font-smooth font-16 font-weight-bold letter-spacing-1">Upload Resume<span class="text-danger">*</span><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="top" title="File size 5 MB and PDF & Word Doc format."></i></label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="inputUploadResume" accept="application/msword, application/pdf" required>
                                                            <label class="custom-file-label font-16" for="inputUploadResume">Choose File...</label>
                                                            <!-- <div class="invalid-feedback">Example invalid custom file feedback</div> -->
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputDomain" class="title-color font-smooth font-16 font-weight-bold letter-spacing-1">Domain<span class="text-danger">*</span></label>
                                                        <select id="inputDomain" class="form-control" required>
                                                            <option selected>Select Domain</option>
                                                            <option>Life Insurance</option>
                                                            <option>Non Life Insurance</option>
                                                            <option>Fresher</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputIndustry" class="title-color font-smooth font-16 font-weight-bold letter-spacing-1">Current Industry<span class="text-danger">*</span><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="top" title="Indicates the industry of the current organization."></i></label>
                                                        <select id="inputIndustry" class="form-control" required>
                                                            <option selected>Select Industry</option>
                                                            <option>Life Insurance</option>
                                                            <option>Non LI GI</option>
                                                            <option>Non LI BFSI</option>
                                                            <option>Sales - Other Industries</option>
                                                            <option>Non-Sales</option>
                                                            <option>Fresher</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6 col-lg-4">
                                                        <label for="inputSalesExperience" class="title-color font-smooth font-16 font-weight-bold letter-spacing-1">Sales Experience<span class="text-danger">*</span></label>
                                                        <select id="inputSalesExperience" class="form-control" required>
                                                            <option selected>Select Sales Experience</option>
                                                            <option>Fresher</option>
                                                            <option>0-1 Year</option>
                                                            <option>1-2 Years</option>
                                                            <option>2-3 Years</option>
                                                            <option>3 and Above</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6 col-lg-4">
                                                        <label for="inputCurrentCTC" class="title-color font-smooth font-16 font-weight-bold letter-spacing-1">Current CTC (per annum)<span class="text-danger">*</span></label>
                                                        <input type="number" class="form-control" placeholder="Your Current CTC" autocomplete="off" id="inputCurrentCTC" required>
                                                    </div>
                                                    <div class="form-group col-lg-4">
                                                        <label for="inputCurrentOrganisation" class="title-color font-smooth font-16 font-weight-bold letter-spacing-1">Current Organisation<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" placeholder="Your Current Organisation" autocomplete="off" id="inputCurrentOrganisation" required>
                                                    </div>
                                                </div>

                                                <div class="mt-4 mb-2 text-right">
                                                    <a href="javascript:void(0);" type="submit" id="step_prev_2" class="btn btn-outline-primary">Prev</a>
                                                    <a href="javascript:void(0);" type="submit" id="step_3" class="btn btn-primary ml-2">Next</a>
                                                </div>
                                            </form>
        
                                        </div>
        
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="pills-educational-details" role="tabpanel" aria-labelledby="pills-educational-details-tab">

                                <div class="row">
                                    <div class="col-12">
        
                                        <!-- Educational Details Tab -->
                                        <div class="bg-white custom-border rounded-lg p-4 mt-2">
        
                                            <h4 class="title-color">Educational Details</h4>

                                            <form>
                                                <div class="form-row mt-4">
                                                    
                                                    <div class="form-group col-md-6">
                                                        <label for="inputEducationalDetails" class="title-color font-smooth font-16 font-weight-bold letter-spacing-1">Educational Details<span class="text-danger">*</span></label>
                                                        <select id="inputEducationalDetails" class="form-control" required>
                                                            <option selected>Select Educational Details</option>
                                                            <option>Graduate</option>
                                                            <option>Undergraduate</option>
                                                            <option>Post Graduate</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-12">
                                                        &nbsp;
                                                    </div>
                                                </div>

                                                <div class="mt-4 mb-2 text-right">
                                                    <a href="javascript:void(0);" type="submit" id="step_prev_3" class="btn btn-outline-primary">Prev</a>
                                                    <a href="javascript:void(0);" type="submit" id="step_4" class="btn btn-primary ml-2">Submit</a>
                                                </div>
                                            </form>
        
                                        </div>
        
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="col-12" id="job_sent_success">
                <div class="form-card bg-white shadow py-5 text-center">
                    <h2 class="text-success font-weight-bold mb-4 letter-spacing-1">SUCCESS !</h2>
                    <!-- <div class="p-5"><img src="./public/images/png/success-icon.png" class="img-fluid" alt="Success Icon" width="200" title="Success Icon" /></div> -->
                    <div><img src="./public/images/png/success-check.gif" class="img-fluid" alt="Success Icon" width="400" title="Success Icon" /></div>
                    <h5 class="title-color font-weight-bold font-smooth letter-spacing-1 mt-4 mb-3">You application has been sent successfully!!!</h5>
                    <div>
                        <a href="javascript:void(0);" id="step_home" class="btn btn-primary">Home</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>


<?php include 'footer.php' ?>

<script>

    //Upload Resume File Name JS
    $(document).ready(function () {
        bsCustomFileInput.init()
    });

    //Tooltip Activate JS
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    //Scroll Left/Right on Prev/Next Button Click JS
    function slide(direction){
        var container = document.getElementById('more_info_tabs');
        scrollCompleted = 0;
        var slideVar = setInterval(function(){
            if(direction == 'left'){
                container.scrollLeft -= 18;
            } else {
                container.scrollLeft += 18;
            }
            scrollCompleted += 10;
            if(scrollCompleted >= 100){
                window.clearInterval(slideVar);
            }
        }, 50);
    }
    
    //Next Button Click JS
    //$('#more_info_tabs a[href="#pills-educational-details"]').tab('show'); //On Load Tab Show
    $('#job_sent_success').hide();
    $("#step_1").on("click", function(){
        $('#more_info_tabs a[href="#pills-personal-details"]').tab('show');
        //$('#more_info_tabs li:eq(1) a').tab('show');
    });
    $("#step_2").on("click", function(){
        $('#more_info_tabs a[href="#pills-previous-experience"]').tab('show');
        slide('right');
    });
    $("#step_3").on("click", function(){
        $('#more_info_tabs a[href="#pills-educational-details"]').tab('show');
        slide('right');
    });
    $("#step_4").on("click", function(){
        $('#job_app_tab').hide();
        $('#job_sent_success').show();
    });
    $("#step_home").on("click", function(){
        window.location.reload();
    });

    //Prev Button Click JS
    $("#step_prev_1").on("click", function(){
        $('#more_info_tabs a[href="#pills-branch-details"]').tab('show');
        slide('left');
    });
    $("#step_prev_2").on("click", function(){
        $('#more_info_tabs a[href="#pills-personal-details"]').tab('show');
        slide('left');
    });
    $("#step_prev_3").on("click", function(){
        $('#more_info_tabs a[href="#pills-previous-experience"]').tab('show');
    });
</script>