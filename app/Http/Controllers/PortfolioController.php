<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\PortfolioFact;
use App\Models\PortfolioSkill;
use App\Models\YoutubeContent;
use App\Models\PortfolioContact;
use App\Models\PortfolioGallery;
use App\Models\PortfolioService;
use App\Models\PortfolioExperience;
use App\Models\PortfolioTestimonial;
use App\Models\PortfolioGalleryGroup;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = [];

        $portfolio['services'] = PortfolioService::cacheData();
        $portfolio['skills'] = PortfolioSkill::cacheData();
        $portfolio['experiences'] = PortfolioExperience::cacheData();
        $portfolio['testimonials'] = PortfolioTestimonial::cacheData();
        $portfolio['facts'] = PortfolioFact::cacheData();
        $portfolio['posts'] = Post::cacheData();
        $portfolio['galleryGroup'] = PortfolioGalleryGroup::cacheData();
        $portfolio['youtubeContents'] = YoutubeContent::cacheData();

        return view('welcome', \compact('portfolio'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog(Post $post)
    {

        return view('blog', \compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contactStore(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|max:255',
            'message' => 'required'
        ]);
        PortfolioContact::create($request->all());

        return response(['message' => 'Successfully Send Your Message.'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PortfolioTestimonial  $portfolioTestimonial
     * @return \Illuminate\Http\Response
     */
    public function show(PortfolioTestimonial $portfolioTestimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PortfolioTestimonial  $portfolioTestimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(PortfolioTestimonial $portfolioTestimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PortfolioTestimonial  $portfolioTestimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PortfolioTestimonial $portfolioTestimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PortfolioTestimonial  $portfolioTestimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(PortfolioTestimonial $portfolioTestimonial)
    {
        //
    }
}
