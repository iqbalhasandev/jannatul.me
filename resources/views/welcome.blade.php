<x-app-layout>

    <!-- section hero -->
    <section class="hero background parallax shadow-dark d-flex align-items-center" id="home"
        data-image-src="{{ Voyager::image(setting('portfolio.hero_background_image')) }}"
        style="max-width: 900px;max-height:600px">
        <div class="cta mx-auto mt-2 scrollspy">
            <h1 class="mt-0 mb-4">I’m {{ setting('portfolio.nick_name') }}<span class="dot"></span></h1>
            <p class="mb-4">{{ setting('portfolio.bio') }}</p>
            <a href="#about" class="btn btn-default btn-lg mr-3 scrollspy" data-scroll="#about"><i
                    class="icon-grid"></i>About Me</a>
            <div class="spacer d-md-none d-lg-none d-sm-none" data-height="10"></div>
            <a href="#contact" class="btn btn-border-light btn-lg scrollspy" data-scroll="#contact"><i
                    class="icon-envelope"></i>Contact me</a>
        </div>
        <div class="overlay"></div>
    </section>

    <!-- section about -->
    <section id="about" class="shadow-blue white-bg padding">
        <h3 class="section-title">About Me</h3>
        <div class="spacer" data-height="80"></div>

        <div class="row">
            <div class="col-md-3">
                <img src="{{ Voyager::image(setting('portfolio.about_me_section_image')) }}"
                    style="border-radius:5px;" />
            </div>
            <div class="col-md-9">
                <h2 class="mt-4 mt-md-0 mb-4">Hello,</h2>
                <p class="mb-0">{{ setting('portfolio.about_me') }}</p>
                <div class="row my-4">
                    <div class="col-md-6">
                        <p class="mb-2">Name: <span class="text-dark">{{ setting('portfolio.full_name')
                                }}</span></p>
                        <p class="mb-0">Birthday: <span class="text-dark">{{ setting('portfolio.birthday')
                                }}</span></p>
                    </div>
                    <div class="col-md-6 mt-2 mt-md-0 mt-sm-2">
                        <p class="mb-2">Location: <span class="text-dark">{{ setting('portfolio.address')
                                }}</span></p>
                        <p class="mb-0">Email: <span class="text-dark">{{ setting('portfolio.email') }}</span>
                        </p>
                    </div>
                </div>
                @if (setting('portfolio.cv'))
                <a href="{{ Voyager::image(json_decode(setting('portfolio.cv'))[0]->download_link) }}"
                    class="btn btn-default mr-3">
                    <i class="icon-cloud-download"></i>
                    Download CV
                </a>
                @endif
                <a href="#contact" class="btn btn-alt mt-2 mt-md-0 mt-xs-2" data-scroll="#contact"><i
                        class="icon-envelope"></i>Hire
                    me</a>
            </div>
        </div>
    </section>

    <!-- section skills -->
    <section id="skills" class="shadow-blue white-bg padding">
        <h3 class="section-title">My skills</h3>
        <div class="spacer" data-height="80"></div>

        <p class="mb-0">
            {{ setting('portfolio.skill_section_text') }}
        </p>

        <div class="row mt-5">

            @foreach ($portfolio['skills'] as $skill)
            <div class="col-md-6">
                <!-- skill item -->
                <div class="skill-item">
                    <div class="skill-info clearfix">
                        <h4 class="float-left mb-3 mt-0">{{ $skill->name }}</h4>
                        <span class="float-right">{{ $skill->skill }}%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"
                            aria-valuenow="{{ $skill->skill }}">
                        </div>
                    </div>
                    <div class="spacer" data-height="50"></div>
                </div>
            </div>
            @endforeach

        </div>
    </section>

    <!-- section facts -->
    <section id="facts" class="shadow-dark color-white background parallax padding-50"
        data-image-src="images/background-1.jpg">

        <div class="row relative z-1">

            @foreach ($portfolio['facts'] as $fact)
            <div class="col-md-3 col-sm-6">
                <!-- fact item -->
                <div class="fact-item text-center">
                    <i class="{{ $fact->icon }} icon-circle"></i>
                    <h2 class="count">{{ $fact->count }}</h2>
                    <span>{{ $fact->title }}</span>
                </div>
            </div>
            @endforeach

        </div>

        <div class="overlay"></div>

    </section>

    <!-- section services -->
    <section id="services" class="shadow-blue white-bg padding">
        <h3 class="section-title">Services</h3>
        <div class="spacer" data-height="80"></div>

        <div class="row">

            @foreach ($portfolio['services'] as $service)
            <div class="col-md-4 col-sm-6">
                <!-- service item -->
                <div class="service-item text-center">
                    <i class="{{ $service->icon }}"></i>
                    <h4 class="my-3">{{ $service->title }}</h4>
                    <p class="mb-0">{!! $service->description !!}</p>
                </div>
                <div class="spacer" data-height="20"></div>
            </div>
            @endforeach


        </div>
    </section>

    <!-- section experience -->
    <section id="resume" class="shadow-blue white-bg padding">
        <h3 class="section-title">Experience</h3>
        <div class="spacer" data-height="80"></div>

        <!-- timeline -->
        <div class="timeline">

            @foreach ($portfolio['experiences'] as $experience)
            <div class="entry">
                <div class="title">
                    <span>{{ $experience->session }}</span>
                </div>
                <div class="body">
                    <h4 class="mt-0">{{ $experience->title }}</h4>
                    <p>{!! $experience->description !!}</p>
                </div>
            </div>
            @endforeach

            <span class="timeline-line"></span>
        </div>
    </section>

    <!-- section works -->
    <section id="works" class="shadow-blue white-bg padding">
        <h3 class="section-title">Portfolio</h3>
        <div class="spacer" data-height="80"></div>

        <!-- portfolio filter (desktop) -->
        <ul class="portfolio-filter list-inline">
            <li class="current list-inline-item" data-filter="*">All Projects</li>
            @foreach ($portfolio['galleryGroup'] as $group)
            <li class="list-inline-item" data-filter=".{{ $group->name }}">{{ $group->name }}</li>
            @endforeach
        </ul>

        <!-- portfolio filter (mobile) -->
        <div class="pf-filter-wrapper mb-4">
            <select class="portfolio-filter-mobile">
                <option value="*">Everything</option>
                @foreach ($portfolio['galleryGroup'] as $group)
                <option value=".{{ $group->name }}">{{ $group->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- portolio wrapper -->
        <div class="row portfolio-wrapper">
            @foreach ($portfolio['galleryGroup'] as $group)
            @foreach ($group->gallerys as $gallery)

            <!-- portfolio item -->
            <div class="col-md-4 col-sm-6 grid-item {{ $group->name }}">
                <a href="javascrpt:void();">
                    <div class="portfolio-item">
                        <div class="details">
                            <h4 class="title">{{ $group->name }}</h4>
                        </div>
                        <span class="plus-icon">+</span>
                        <div class="thumb">
                            <img src="{{ Voyager::image($gallery->image) }}" />
                            <div class="mask"></div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            @endforeach
        </div>
    </section>


    <!-- section testimonials -->
    <section id="testimonials" class="shadow-blue white-bg padding">
        <h3 class="section-title">Testimonials</h3>
        <div class="spacer" data-height="97"></div>

        <div class="row testimonials-wrapper">
            @foreach ($portfolio['testimonials'] as $testimonial)
            <div class="col-md-6">
                <!-- testimonial item -->
                <div class="testimonial-item">
                    <span class="symbol"><i class="fas fa-quote-left"></i></span>
                    <p>{!! $testimonial->quote !!}</p>
                    <div class="testimonial-details">
                        <div class="thumb">
                            <img src="{{ Voyager::image($testimonial->image) }}" alt="customer-name" />
                        </div>
                        <div class="info">
                            <h4>{{ $testimonial->name }}</h4>
                            <span>{{ $testimonial->designation }}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach



        </div>
    </section>

    <!-- section clients -->
    <section id="clients" class="shadow-dark background-blue color-white padding-50">

        <h3 class="section-title">Youtube Content</h3>
        <div class="spacer" data-height="80"></div>

        <!-- clients wrapper -->
        <div class="clients-wrapper row">

            @foreach ($portfolio['youtubeContents'] as $youtubeContent)
            <div class="col-md-12">
                <!-- client item -->
                <div class="client-item">
                    <iframe style="
    width: 100%;
    height: 400px;
" src="{{ $youtubeContent->url }}" title="{{ $youtubeContent->title }}" % frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
            @endforeach

        </div>

    </section>

    <!-- section blog -->
    <section id="blog" class="shadow-blue white-bg padding">
        <h3 class="section-title">Recent posts</h3>
        <div class="spacer" data-height="80"></div>

        <div class="row">

            @forelse ($portfolio['posts'] as $post)
            <div class="col-md-4">
                <!-- blog item -->
                <div class="blog-item">
                    <div class="thumb">
                        <a href="">
                            <span class="category">{{ $post->category->name??'' }}</span>
                        </a>
                        <a href="{{ route('portfolio.blog.show',$post->id) }}">
                            <img src="{{ Voyager::image($post->image) }}" style="max-width: 800;max-height:350px" />
                        </a>
                    </div>
                    <h4 class="mt-4 mb-0"><a href="{{ route('portfolio.blog.show',$post->id) }}">{{ $post->title
                            }}</a></h4>
                    <ul class="list-inline meta mb-0 mt-3">
                        <li class="list-inline-item">{{ Carbon::create($post->created_at)->format('Y-m-d')}}
                        </li>
                        <li class="list-inline-item">{{$post->author->name??'' }}</li>
                    </ul>
                </div>
            </div>
            @empty
            <div class="col-md-12 mt-5 text-center text-muted">No Post Found..</div>
            @endforelse

        </div>

    </section>

    <!-- section contact -->
    <section id="contact" class="shadow-blue white-bg padding">
        <h3 class="section-title">Get in touch</h3>
        <div class="spacer" data-height="80"></div>

        <div class="row">

            <div class="col-md-4 mb-4 mb-md-0">
                <!-- contact info -->
                @if (setting('portfolio.phone'))
                <div class="contact-info mb-5">
                    <i class="icon-phone"></i>
                    <div class="details">
                        <h5>Phone</h5>
                        <span><a href="tel:{{ setting('portfolio.phone') }}">{{ setting('portfolio.phone')
                                }}</a></span>
                    </div>
                </div>
                @endif
                @if (setting('portfolio.email'))
                <div class="contact-info mb-5">
                    <i class="icon-envelope"></i>
                    <div class="details">
                        <h5>Email address</h5>
                        <span><a href="mailto:{{ setting('portfolio.email') }}">{{ setting('portfolio.email')
                                }}</a></span>
                    </div>
                </div>
                @endif
                @if (setting('portfolio.address'))

                <div class="contact-info">
                    <i class="icon-location-pin"></i>
                    <div class="details">
                        <h5>Location</h5>
                        <span>{{ setting('portfolio.address') }}</span>
                    </div>
                </div>
                @endif
            </div>

            <div class="col-md-8">
                <!-- Contact Form -->
                <form id="contact-form" class="contact-form" method="POST" action="{{ route('portfolio.contact') }}">
                    @csrf
                    <div class="messages"></div>

                    <div class="row">
                        <div class="column col-md-6">
                            <!-- Name input -->
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="InputName"
                                    placeholder="Your name" required="required" data-error="Name is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="column col-md-6">
                            <!-- Email input -->
                            <div class="form-group">
                                <input type="email" class="form-control" id="InputEmail" name="email"
                                    placeholder="Email address" required="required" data-error="Email is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="column col-md-12">
                            <!-- Email input -->
                            <div class="form-group">
                                <input type="text" class="form-control" id="InputSubject" name="subject"
                                    placeholder="Subject" required="required" data-error="Subject is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="column col-md-12">
                            <!-- Message textarea -->
                            <div class="form-group">
                                <textarea name="message" id="InputMessage" class="form-control" rows="5"
                                    placeholder="Message" required="required"
                                    data-error="Message is required."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default"><i
                            class="icon-paper-plane"></i>Send Message</button><!-- Send Button -->

                </form>
                <!-- Contact Form end -->
            </div>

        </div>

    </section>

</x-app-layout>
