<?php

namespace App\Modules\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class FrontendController extends Controller
{

    public function HomePage()
    {
        return Inertia::render('Home/Index', [
            'event' => [
                'title' => 'Home Page',
                'meta'  => [
                    'description' => 'test description',
                ]
            ]
        ]);
    }

    // About
    public function AboutUsPage()
    {
        return Inertia::render('AboutUs/Index', [
            'event' => [
                'title' => 'About Us',
            ]
        ]);
    }

    // Portfolio
    public function PortfolioPage()
    {
        return Inertia::render('Portfolio/Index', [
            'event' => [
                'title' => 'Portfolio',
            ]
        ]);
    }

    public function PortfolioPropertyPage()
    {
        return Inertia::render('Portfolio/Property', [
            'event' => [
                'title' => 'Portfolio Property',
            ]
        ]);
    }

    public function ProjectPage()
    {
        return Inertia::render('Project/Index', [
            'event' => [
                'title' => 'Project',
            ]
        ]);
    }

    public function TeamPage()
    {
        return Inertia::render('Team/Index', [
            'event' => [
                'title' => 'Team',
            ]
        ]);
    }


    public function GalleryPage()
    {
        
        return Inertia::render('Gallery/Index', [
            'event' => [
                'title' => 'Gallery ',
            ]
        ]);
    }
    public function GalleryImagesPage()
    {

        return Inertia::render('Gallery/Images', [
            'event' => [
                'title' => 'Gallery Images',
            ]
        ]);
    }
  
    
    public function GalleryVideosPage()
    {

        return Inertia::render('Gallery/Videos', [
            'event' => [
                'title' => 'Gallery Videos',
            ]
        ]);
    }


    public function BlogPage()
    {
        return Inertia::render('Blog/Index', [
            'event' => [
                'title' => 'Blog',
            ]
        ]);
    }

    public function BlogDetailsPage()
    {
        $slug = request()->query('slug');
        if (!$slug) {
            return redirect()->back();
        }
        return Inertia::render('Blog/BlogDetails', [
            'event' => [
                'title' => 'Blog Details',
            ]
        ]);
    }

    public function ContactPage()
    {
        return Inertia::render('Contact/Index', [
            'event' => [
                'title' => 'Contact',
            ]
        ]);
    }


}
