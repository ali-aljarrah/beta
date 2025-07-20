@include('include.head')
 <title>Beta Logistics FZE - Careers</title>

 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/css/intlTelInput.css">
 <link href="{{asset('css/select2.min.css')}}" rel="stylesheet" />
 <link href="{{asset('css/toastr.min.css')}}" rel="stylesheet" />
</head>

<body>
  @include('include.loader')
  @include('include.menu')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Careers</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <section class="py-5">
        <div class="container contact-page">
            <div class="row g-5 mx-lg-0">
                <div class="col-md-10 mx-auto contact-form wow fadeIn" data-wow-delay="0.1s">
                    <div class="text-center">
                        <h6 class="text-dark text-uppercase">Get In Touch</h6>
                        <h2 class="mb-4 h1">BRIGHTEN YOUR FUTURE WITH US</h2>
                    </div>
                    <div class="bg-light rounded-1 p-lg-5 p-3">
                        <form id="careersForm" novalidate>
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input required type="text" class="form-control rounded-1" id="name" name="name" placeholder="Your Name" style="height: 55px;">
                                        <label for="name">Your Name <span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input required type="email" class="form-control rounded-1" id="email" name="email" placeholder="Your Email" style="height: 55px;">
                                        <label for="email">Your Email <span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="tel" id="phone" name="phone" class="form-control w-100 rounded-1" placeholder="Your Mobile" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <select id="ReferenceNo" name="ReferenceNo" required class="form-select rounded-1" style="height: 55px;">
                                        <option value="Other Opportunities">Other Opportunities</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Upload CV</label>
                                        <input class="form-control" type="file" id="formFile" name="cv">
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
                                </div>
                                <div class="col-12">
                                    <button id="submitBtn" class="btn btn-primary w-100 py-3 rounded-1" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Contact End -->



    <section class="py-5">
        <div class="container">
            <div class="text-center wow slideInUp">
                <p class="h1 fw-bold mb-5">
                    Get a Quote Now!
                </p>
                <a class="btn btn-primary py-md-3 px-md-5 rounded-3 d-block w-fit mx-auto" href="/quote">Free Quote</a>
            </div>
        </div>
    </section>

      @include('include.footer')

      <script src="{{asset('js/toastr.min.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
      <script src="{{asset('js/intlTelInput.min.js')}}"></script>

      <script src="https://www.google.com/recaptcha/api.js" async defer></script>

      <script>
        $('#ReferenceNo').select2({
            placeholder: "Reference No",
            allowClear: true
        });
        const input = document.querySelector("#phone");

        window.intlTelInput(input, {
            loadUtils: () => import("https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/js/utils.js"),
        });
        (function () {
            'use strict';

            const form = document.getElementById('careersForm');

            form.addEventListener('submit', function (event) {
                event.preventDefault();
                event.stopPropagation();

                $('#submitBtn').prop("disabled", true);

                if (!form.checkValidity()) {
                    toastr.error("Please fill up the required fields!");
                    form.classList.add('was-validated');
                    $('#submitBtn').prop("disabled", false);
                    return;
                }

                const formData = new FormData(form);

                // Add reCAPTCHA
                const recaptcha = grecaptcha.getResponse();
                if (!recaptcha) {
                    toastr.error("Please verify reCAPTCHA.");
                    $('#submitBtn').prop("disabled", false);
                    return;
                }
                formData.append('g-recaptcha-response', recaptcha);

                $.ajax({
                    url: '{{ route("careers.submit") }}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        toastr.success("Message sent successfully!");
                        form.reset();
                        form.classList.remove('was-validated');
                        grecaptcha.reset();
                        $('#submitBtn').prop("disabled", false);
                    },
                    error: function (xhr) {
                        $('#submitBtn').prop("disabled", false);
                        if (xhr.status === 422 && xhr.responseJSON?.errors) {
                            Object.values(xhr.responseJSON.errors).forEach(msgs => {
                                toastr.error(msgs[0]);
                            });
                        } else {
                            toastr.error("Something went wrong. Please try again.");
                        }
                    }
                });
            }, false);
        })();
      </script>
</body>

</html>
