<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Skill;
use App\Models\Project;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/skills', function () {
    $technicalSkills = Skill::where('category', 'technical')->get();
    $designSkills = Skill::where('category', 'design')->get();
    $tools = Skill::where('category', 'tool')->get();
    
    return view('skills', compact('technicalSkills', 'designSkills', 'tools'));
});

Route::get('/projects', function () {
    $projects = Project::latest()->get();
    return view('projects', compact('projects'));
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/blog', function () {
    $blogs = Blog::latest()->paginate(6);
    return view('blog', compact('blogs'));
});