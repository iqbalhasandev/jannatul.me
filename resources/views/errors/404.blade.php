<x-app-layout>
    <section class="shadow-blue white-bg padding">
        <!-- end row -->
        <div class="row pt-4 align-items-center justify-content-center">
            <div class="col-sm-5">
                <div class="">
                    <img src="{{ front_asset('images/errors/404.png') }}" alt="" class="img-fluid mx-auto d-block"
                        style="max-height: 400px">
                </div>

                <div class="text-center mb-5">
                    <h1 class="font-large-2 my-1">
                        404 Not Found.
                    </h1>
                    <p class="px-2">
                        {{ $exception->getMessage() ?: 'Sorry, I looked everywhere, and still came up empty handed.'}}

                        <em>
                            <strong>
                                If you have any emergency, you can mail us <a
                                    href="mailto:{{ setting('portfolio.email') }}">
                                    {{setting('portfolio.email')}}
                                </a>
                            </strong>
                        </em>

                    </p>
                    <a class="btn btn-info mt-3" href="{{ back_url() }}">
                        <i class="mdi mdi-reply mr-1"></i>
                        Back
                    </a>
                </div>
            </div>

        </div>
    </section>

</x-app-layout>