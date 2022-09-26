<?php include 'inc/header.php' ?>
<!-- section-breadcrumbs -->
<section class="breadcrumbs d-flex justify-content-center align-items-center text-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1>Book An Appointment</h1>
            </div>
        </div>
    </div>
</section>

<section class="appointment-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="appointment-form">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="" class="form-label">Full Name*</label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Phone Number*</label>
                            <input type="number" class="form-control" id="">
                        </div>
                        <div class="col-12">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control" id="" placeholder="">
                        </div>

                        <div class="col-md-6">
                            <label for="" class="form-label">Select Your Time*</label>
                            <select name="time">
                                <option value="00:00">12.00 AM</option>
                                <option value="00:30">12.30 AM</option>
                                <option value="01:00">01.00 AM</option>
                                <option value="01:30">01.30 AM</option>
                                <option value="02:00">02.00 AM</option>
                                <option value="02:30">02.30 AM</option>
                                <option value="03:00">03.00 AM</option>
                                <option value="03:30">03.30 AM</option>
                                <option value="04:00">04.00 AM</option>
                                <option value="04:30">04.30 AM</option>
                                <option value="05:00">05.00 AM</option>
                                <option value="05:30">05.30 AM</option>
                                <option value="06:00">06.00 AM</option>
                                <option value="06:30">06.30 AM</option>
                                <option value="07:00">07.00 AM</option>
                                <option value="07:30">07.30 AM</option>
                                <option value="08:00">08.00 AM</option>
                                <option value="08:30">08.30 AM</option>
                                <option value="09:00">09.00 AM</option>
                                <option value="09:30">09.30 AM</option>
                                <option value="10:00">10.00 AM</option>
                                <option value="10:30">10.30 AM</option>
                                <option value="11:00">11.00 AM</option>
                                <option value="11:30">11.30 AM</option>
                                <option value="12:00">12.00 PM</option>
                                <option value="12:30">12.30 PM</option>
                                <option value="13:00">01.00 PM</option>
                                <option value="13:30">01.30 PM</option>
                                <option value="14:00">02.00 PM</option>
                                <option value="14:30">02.30 PM</option>
                                <option value="15:00">03.00 PM</option>
                                <option value="15:30">03.30 PM</option>
                                <option value="16:00">04.00 PM</option>
                                <option value="16:30">04.30 PM</option>
                                <option value="17:00">05.00 PM</option>
                                <option value="17:30">05.30 PM</option>
                                <option value="18:00">06.00 PM</option>
                                <option value="18:30">06.30 PM</option>
                                <option value="19:00" selected="">07.00 PM</option>
                                <option value="19:30">07.30 PM</option>
                                <option value="20:00">08.00 PM</option>
                                <option value="20:30">08.30 PM</option>
                                <option value="21:00">09.00 PM</option>
                                <option value="21:30">09.30 PM</option>
                                <option value="22:00">10.00 PM</option>
                                <option value="22:30">10.30 PM</option>
                                <option value="23:00">11.00 PM</option>
                                <option value="23:30">11.30 PM</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="" class="form-label">Your preferred study destination*</label>
                            <select id="">
                                <option selected>Choose...</option>
                                <option>Study In Japan</option>
                                <option>Study In Japan</option>
                                <option>Study In Japan</option>
                                <option>Study In Japan</option>
                                <option>Study In Japan</option>
                                <option>Study In Japan</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Message*</label>
                            <textarea name="" class="form-control"></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-danger">Submit Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'inc/footer.php' ?>