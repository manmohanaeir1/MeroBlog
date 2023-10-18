  <!-- contact-area -->
  <section class="homeContact">
    <div class="container">
        <div class="homeContact__wrap">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section__title">
                        <span class="sub-title">07 - Say hello</span>
                        <h2 class="title">Any questions? Feel free <br> to contact</h2>
                    </div>
                    <div class="homeContact__content">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <h2 class="mail"><a href="mailto:Info@webmail.com">Info@webmail.com</a></h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="homeContact__form">
                        <form action="{{route('contact.register')}}" id="myForm" method="POST">
                            @csrf
                            <input type="text" name="name"   placeholder="Enter your name*">
                            <input type="text" name="address" id="address" placeholder="Enter your Address*">

                            <input type="email" name="email" id="email" placeholder="Enter your  email*">
                            <input type="number" name="number" id="number"  placeholder="Enter your number*">
                            <textarea name="message" id="message" placeholder="Enter Massage*"></textarea>
                            <button type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-area-end -->


<script type="text/javascript">

    $(document).ready(function () {

        $('#myForm').validate({
            rules: {
                name:{
                    required:true,
                },
                
            },
            message :{
                name:{
                    required: 'Please  Enter  Blog Category'
                },
            },
            errorElement : 'span',
            errorPlacement : function (error,element){
                error.addClass('invalid-feedback');
                element.closest('.form-group'). append(error);
            },

            highlight : function(element , errorClass , validClass ){
                $(element).addClass('is-invalid');
            },

            unhighlight : function(element , errorClass , validClass ){
                $(element).removeClass('is-invalid');
            },
        
        });
    });

</script>
