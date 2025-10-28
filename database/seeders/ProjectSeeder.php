<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'E-Commerce Platform',
                'description' => 'A full-featured e-commerce platform built with Laravel and Vue.js. Features include product management, shopping cart, payment integration, order tracking, and admin dashboard. Implemented responsive design for seamless mobile shopping experience.',
                'category' => 'web',
                'image' => '/image/project1.jpg',
                'tech_stack' => 'Laravel, Vue.js, Tailwind CSS, MySQL, Stripe',
                'project_url' => 'https://example.com',
                'github_url' => 'https://github.com/username/ecommerce',
                'completed_at' => now()->subMonths(2),
            ],
            [
                'title' => 'Task Management App',
                'description' => 'A collaborative task management application with real-time updates. Users can create projects, assign tasks, set deadlines, and track progress. Includes team collaboration features, file attachments, and notification system.',
                'category' => 'web',
                'image' => '/image/project2.jpg',
                'tech_stack' => 'React, Node.js, Express, MongoDB, Socket.io',
                'project_url' => 'https://example.com',
                'github_url' => 'https://github.com/username/taskapp',
                'completed_at' => now()->subMonths(4),
            ],
            [
                'title' => 'Portfolio Website Design',
                'description' => 'Modern and minimalist portfolio website design created in Figma. Features dark theme with smooth animations, intuitive navigation, and mobile-first approach. Includes complete design system with typography, color palette, and component library.',
                'category' => 'design',
                'image' => '/image/project3.jpg',
                'tech_stack' => 'Figma, Adobe Photoshop, Illustrator',
                'project_url' => 'https://figma.com/file/example',
                'github_url' => null,
                'completed_at' => now()->subMonths(3),
            ],
            [
                'title' => 'Social Media Dashboard',
                'description' => 'Comprehensive social media analytics dashboard that aggregates data from multiple platforms. Displays real-time metrics, engagement statistics, and performance insights. Built with interactive charts and customizable widgets.',
                'category' => 'web',
                'image' => '/image/project4.jpg',
                'tech_stack' => 'Laravel, Chart.js, Bootstrap, PostgreSQL',
                'project_url' => 'https://example.com',
                'github_url' => 'https://github.com/username/dashboard',
                'completed_at' => now()->subMonths(5),
            ],
            [
                'title' => 'Food Delivery Mobile App',
                'description' => 'Cross-platform mobile application for food delivery service. Features restaurant browsing, menu selection, real-time order tracking, payment processing, and driver assignment. Includes both customer and restaurant owner interfaces.',
                'category' => 'mobile',
                'image' => '/image/project5.jpg',
                'tech_stack' => 'React Native, Firebase, Google Maps API',
                'project_url' => null,
                'github_url' => 'https://github.com/username/foodapp',
                'completed_at' => now()->subMonths(6),
            ],
            [
                'title' => 'Blog CMS System',
                'description' => 'Content Management System designed specifically for bloggers and content creators. Features rich text editor, media library, SEO optimization tools, comment moderation, and multi-author support. Built with performance and scalability in mind.',
                'category' => 'web',
                'image' => '/image/project6.jpg',
                'tech_stack' => 'Laravel, Livewire, Alpine.js, MySQL',
                'project_url' => 'https://example.com',
                'github_url' => 'https://github.com/username/blogcms',
                'completed_at' => now()->subMonth(),
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
