@include('include.head')
 <title>Beta Logistics FZE - Contact us</title>

 <link href="{{asset('css/toastr.min.css')}}" rel="stylesheet" />
</head>

<body>
  @include('include.loader')
  @include('include.menu')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Contact Us</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5 wow fadeInUp text-center" data-wow-delay="0.2s">
                    <h2 class="text-dark">Get in touch with us!</h2>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp h-100 mx-auto" data-wow-delay="0.2s">
                    <div class="text-center px-3 py-4 shadow-sm border border-1 rounded-1 d-flex flex-column justify-content-center align-items-center h-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#d8b768" class="bi bi-envelope-fill mb-4" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
                        </svg>
                        <p class="h5 mb-2">
                            <span>Email Address</span>
                        </p>
                        <div>
                            <a class="text-dark text-decoration-underline" href="mailto:{{App\Models\CompanyInformation::getInfoValue('email') ?? '#'}}">{{App\Models\CompanyInformation::getInfoValue('email') ?? '#'}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp h-100 mx-auto" data-wow-delay="0.2s">
                    <div class="text-center px-3 py-4 shadow-sm border border-1 rounded-1 d-flex flex-column justify-content-center align-items-center h-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#d8b768" class="bi bi-telephone-fill mb-4" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                        </svg>
                        <p class="h5 mb-2">
                            <span>Phone Number</span>
                        </p>
                        <div>
                            <a class="text-dark text-decoration-underline" href="tel:{{App\Models\CompanyInformation::getInfoValue('phone') ?? '#'}}">{{App\Models\CompanyInformation::getInfoValue('phone') ?? '#'}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp h-100 mx-auto" data-wow-delay="0.2s">
                    <div class="text-center px-3 py-4 shadow-sm border border-1 rounded-1 d-flex flex-column justify-content-center align-items-center h-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#d8b768" class="bi bi-geo-alt-fill mb-4" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                        </svg>
                        <p class="h5 mb-2">
                            <span>Address</span>
                        </p>
                        <div>
                            <p class="text-dark mb-0">
                                {{App\Models\CompanyInformation::getInfoValue('address') ?? '#'}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container contact-page py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-md-6 contact-form wow fadeIn" data-wow-delay="0.1s">
                    <h6 class="text-dark text-uppercase">Get In Touch</h6>
                    <h1 class="mb-4">Contact For Any Query</h1>
                    <div class="bg-light rounded-1 p-lg-5 p-3">
                        <form id="contactForm" novalidate>
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
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control rounded-1" id="subject" name="subject" placeholder="Message Subject" style="height: 55px;">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea required class="form-control rounded-1" placeholder="Leave a message here" id="message" name="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
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
                <div class="col-md-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s">
                    <div class="position-relative h-100">
                        <iframe class="position-absolute w-100 h-100 rounded-1 shadow-sm" style="object-fit: cover;"
                        src="{{App\Models\CompanyInformation::getInfoValue('Company location') ?? '#'}}"
                        frameborder="0" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                    </div>
                </div>
            </div>

        </div>
    </div>
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

      <script src="https://www.google.com/recaptcha/api.js" async defer></script>

      <script>
         (function () {
            'use strict';

            const form = document.getElementById('contactForm');

            form.addEventListener('submit', function (event) {
                event.preventDefault();
                event.stopPropagation();

                $('#submitBtn').prop("disabled", true);


                if (!form.checkValidity())
                {
                    toastr.error("Please fill up the required fields!");
                    form.classList.add('was-validated');
                    $('#submitBtn').prop("disabled", false);
                    return;
                }

                const formData = new FormData(form);

                // Add reCAPTCHA
                const recaptcha = grecaptcha.getResponse();
                formData.append('g-recaptcha-response', recaptcha);


                $.ajax({
                    url: '{{ route('submitContact') }}',
                    type: 'POST',
                    data: formData,
                    processData: false, // prevent jQuery from processing data
                    contentType: false, // prevent jQuery from setting content type
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        toastr.success("Message Sent successfully!");
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
