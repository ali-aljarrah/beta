@if (!empty($faqs) && count($faqs) > 0)
        <section class="py-5">
            <div class="container wow fadeInUp" data-wow-delay="0.1s">
                <div class="text-center mb-5">
                    <h2>Frequently Asked Questions (FAQ) - BETA FZE Logistics</h2>
                </div>
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="accordion" id="faqsAccordion">
                            @foreach ($faqs as $index => $faq)
                                @if ($index == 0)
                                    <div class="accordion-item border-0">
                                        <div class="accordion-header" id="heading{{$index}}">
                                            <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$index}}" aria-expanded="true" aria-controls="collapse{{$index}}">
                                                {{$faq->question}}
                                            </button>
                                        </div>
                                        <div id="collapse{{$index}}" class="accordion-collapse collapse show" aria-labelledby="heading{{$index}}" data-bs-parent="#faqsAccordion">
                                            <div class="accordion-body">
                                                {{$faq->answer}}
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="accordion-item border-0">
                                        <div class="accordion-header" id="heading{{$index}}">
                                            <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$index}}" aria-expanded="false" aria-controls="collapse{{$index}}">
                                                {{$faq->question}}
                                            </button>
                                        </div>
                                        <div id="collapse{{$index}}" class="accordion-collapse collapse" aria-labelledby="heading{{$index}}" data-bs-parent="#faqsAccordion">
                                            <div class="accordion-body">
                                                {{$faq->answer}}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
