<?php include 'inc/header.php' ?>
<!-- section-breadcrumbs -->
<section class="breadcrumbs d-flex justify-content-center align-items-center text-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1>Apply Now</h1>
            </div>
        </div>
    </div>
</section>

<!-- navs-area -->
<section class="navs-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading w-50">
                    <h2>I am making this application as:</h2>
                    <span><img src="images/icon/cap.png" alt=""></span>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="navs-wrapp">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">A student on my own</button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                aria-selected="false">An agent on behalf of the student</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="apply-form-area">
                                <h4>Student Information</h4>
                                <form class="row g-3">
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Student Name</label>
                                        <input type="text" class="form-control" id="" placeholder='Enter your name'>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label">E-mail</label>
                                        <input type="email" class="form-control" id="" placeholder='Enter your E-mail'>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="" class="form-label">telephone</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter your number">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="" class="form-label">Nationality</label>
                                        <select name="" id="" class='form-control'>
                                            <option value="">Bangladesh</option>
                                            <option value="">India</option>
                                            <option value="">Srilanka</option>
                                            <option value="">Pakistan</option>
                                            <option value="">Australia</option>
                                            <option value="">London</option>
                                            <option value="">Canada</option>
                                            <option value="">Sweden</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="" class="form-label">Which country or region are you in now?</label>
                                        <select name="" id="" class='form-control'>
                                            <option value="">Bangladesh</option>
                                            <option value="">India</option>
                                            <option value="">Srilanka</option>
                                            <option value="">Pakistan</option>
                                            <option value="">Australia</option>
                                            <option value="">London</option>
                                            <option value="">Canada</option>
                                            <option value="">Sweden</option>
                                        </select>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <label for="" class="form-label">Preferred university</label>
                                        <select name="" id="" class='form-control'>
                                            <option value="">BPP University</option>
                                            <option value="">BPP University</option>
                                            <option value="">BPP University</option>
                                            <option value="">BPP University</option>
                                            <option value="">BPP University</option>
                                            <option value="">BPP University</option>
                                            <option value="">BPP University</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="" class="form-label">Subject of interest</label>
                                        <select name="" id="" class='form-control'>
                                            <option value="">Arts & Design</option>
                                            <option value="">Arts & Design</option>
                                            <option value="">Arts & Design</option>
                                            <option value="">Arts & Design</option>
                                            <option value="">Arts & Design</option>
                                            <option value="">Arts & Design</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 check-field">
                                        <label for="">Intake</label>
                                        <div class="">
                                            <input type="checkbox" name=''> <span>January</span>
                                            <input type="checkbox" name=''> <span>March</span>
                                            <input type="checkbox" name=''> <span>September</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 check-field">
                                        <label for="">Level of study</label>
                                        <div class="">
                                            <input type="radio" name='gender'> <span>Undergraduate</span>
                                            <input type="radio" name='gender'> <span>Postgraduate</span>
                                            <input type="radio" name='gender'> <span>Masters</span>
                                            <input type="radio" name='gender'> <span>PhD</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 check-field">
                                        <label for="">Do you have currently have a university level
                                            qualification?</label>
                                        <div class="">
                                            <input type="radio" name='gender'> <span>Yes</span>
                                            <input type="radio" name='gender'> <span>No</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 check-field">
                                        <label for="">Do you have proof of English language proficiency?</label>
                                        <div class="">
                                            <input type="radio" name='gender'> <span>Yes</span>
                                            <input type="radio" name='gender'> <span>No</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <button type="submit" class="btn btn-danger custom-btn">Send
                                            Application</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="apply-form-area">
                                <h4>Agent Information</h4>
                                <form class="row g-3">
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Agent's name</label>
                                        <input type="text" class="form-control" id="" placeholder='Agent name'>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Agency organisation name</label>
                                        <input type="text" class="form-control" id="" placeholder='Agency organisation name'>
                                    </div>
                                    <div class="col-12">
                                        <label for="" class="form-label">Agency address</label>
                                        <textarea name="" id="" class='form-control w-100' placeholder='Agency address'></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Agent's email</label>
                                        <input type="email" class="form-control" id="" placeholder='Agent Email'>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Agent's telephone</label>
                                        <input type="phone" class="form-control" id="" placeholder='Agent phone'>
                                    </div>
                                    <div class="col-lg-12 text-center mt-4">
                                        <h4>Student Information</h4>
                                    </div>
                                    <div class="col-md-6">
                                        
                                        <label for="" class="form-label">Student Name</label>
                                        <input type="text" class="form-control" id="" placeholder='Enter your name'>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label">E-mail</label>
                                        <input type="email" class="form-control" id="" placeholder='Enter your E-mail'>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="" class="form-label">telephone</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter your number">
                                    </div>
                                    
                                    <div class="col-12 col-md-6">
                                        <label for="" class="form-label">Student Nationality</label>
                                        <select name="" id="" class='form-control'>
                                            <option value="">Bangladesh</option>
                                            <option value="">India</option>
                                            <option value="">Srilanka</option>
                                            <option value="">Pakistan</option>
                                            <option value="">Australia</option>
                                            <option value="">London</option>
                                            <option value="">Canada</option>
                                            <option value="">Sweden</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="" class="form-label">Student currently living in</label>
                                        <select name="" id="" class='form-control'>
                                            <option value="">Bangladesh</option>
                                            <option value="">India</option>
                                            <option value="">Srilanka</option>
                                            <option value="">Pakistan</option>
                                            <option value="">Australia</option>
                                            <option value="">London</option>
                                            <option value="">Canada</option>
                                            <option value="">Sweden</option>
                                        </select>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <label for="" class="form-label">Preferred university</label>
                                        <select name="" id="" class='form-control'>
                                            <option value="">BPP University</option>
                                            <option value="">BPP University</option>
                                            <option value="">BPP University</option>
                                            <option value="">BPP University</option>
                                            <option value="">BPP University</option>
                                            <option value="">BPP University</option>
                                            <option value="">BPP University</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="" class="form-label">Subject of interest</label>
                                        <select name="" id="" class='form-control'>
                                            <option value="">Arts & Design</option>
                                            <option value="">Arts & Design</option>
                                            <option value="">Arts & Design</option>
                                            <option value="">Arts & Design</option>
                                            <option value="">Arts & Design</option>
                                            <option value="">Arts & Design</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" name='' class='form-control' placeholder='Enter program name if you known'>
                                    </div>
                                    <div class="col-lg-6 check-field">
                                        <label for="">Intake</label>
                                        <div class="">
                                            <input type="checkbox" name=''> <span>January</span>
                                            <input type="checkbox" name=''> <span>March</span>
                                            <input type="checkbox" name=''> <span>September</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 check-field">
                                        <label for="">Level of study</label>
                                        <div class="">
                                            <input type="radio" name='gender'> <span>Undergraduate</span>
                                            <input type="radio" name='gender'> <span>Postgraduate</span>
                                            <input type="radio" name='gender'> <span>Masters</span>
                                            <input type="radio" name='gender'> <span>PhD</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 check-field">
                                        <label for="">Does the student currently have a university level qualification?</label>
                                        <div class="">
                                            <input type="radio" name='gender'> <span>Yes</span>
                                            <input type="radio" name='gender'> <span>No</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 check-field">
                                        <label for="">Does the student have proof of English language proficiency?</label>
                                        <div class="">
                                            <input type="radio" name='gender'> <span>Yes</span>
                                            <input type="radio" name='gender'> <span>No</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <button type="submit" class="btn btn-danger custom-btn">Send
                                            Application</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'inc/footer.php' ?>