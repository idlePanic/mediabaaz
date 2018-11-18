@extends('layouts.first_app_page')

@section('content')
    <div class="container contact-form my-card">
        <div class="contact-image">
            <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
        </div>
        <form method="post">
            <h3>Drop Us a Message</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="txtTitle" class="form-control" placeholder="Your Title *" value="" />
                    </div>
                    <div class="form-group">
                        <select class="form-group form-control btn my-btn2" name="who">
                            <option>Manager</option>
                            <option>Author</option>
                            <option>Admin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number " value="" />
                    </div>
                    <div class="form-group">
                        <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                    </div>
                </div>
            </div>
        </form>
        <hr style="background-color: #f39c12">
        <h2 class="my-text text-center">My Location</h2>
        <div class="iframeDiv">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25907.83412211188!2d51.36573849204886!3d35.7390232605788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e0710d5918403%3A0x74f5290b67841378!2sMilad+Tower!5e0!3m2!1sen!2s!4v1542125767888" frameborder="0" class="iframeStyle" allowfullscreen></iframe>
        </div>
        <p class="text-white mt-5"><i class="fa fa-map-marker mr-3 my-text"></i>Iran, Tehran, Milad Tower</p>
        <p class="text-white mt-2"><i class="fa fa-phone mr-3 my-text"></i>+98 922 702 68 71</p>
        <hr>

    </div>
@endsection
<style>


</style>