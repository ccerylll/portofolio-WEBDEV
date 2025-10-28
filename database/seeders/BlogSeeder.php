<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [
            [
                'title' => 'Getting Started with Laravel Development',
                'author' => 'John Anderson',
                'content' => "Laravel has become one of the most popular PHP frameworks for web development. Its elegant syntax and powerful features make it an excellent choice for building modern web applications. In this post, we'll explore the fundamentals of Laravel and why it's loved by developers worldwide.\n\nThe framework provides a robust set of tools and an application architecture that empowers developers to create full-featured web applications. From routing to authentication, Laravel handles the heavy lifting so you can focus on building your application's unique features.\n\nWhether you're building a simple blog or a complex enterprise application, Laravel's ecosystem has you covered with packages, tools, and a supportive community ready to help you succeed.",
                'published_at' => now()->subMonths(6),
            ],
            [
                'title' => 'Understanding Modern Web Design Principles',
                'author' => 'Sarah Mitchell',
                'content' => "Web design has evolved dramatically over the past decade. Today's websites need to be more than just visually appealing—they must be accessible, responsive, and user-friendly across all devices. Modern design principles emphasize clean layouts, intuitive navigation, and engaging user experiences.\n\nColor theory, typography, and white space play crucial roles in creating effective designs. The right combination of these elements can guide users through your content, highlight important information, and create an emotional connection with your audience.\n\nAs technology continues to advance, staying updated with design trends and best practices is essential for creating websites that not only look great but also perform well and meet user expectations.",
                'published_at' => now()->subMonths(5),
            ],
            [
                'title' => 'The Power of Responsive Web Development',
                'author' => 'Michael Chen',
                'content' => "In today's mobile-first world, responsive web development isn't just a nice-to-have feature—it's absolutely essential. With users accessing websites from smartphones, tablets, laptops, and desktops, your site needs to look great and function perfectly on every screen size.\n\nResponsive design uses flexible grids, flexible images, and CSS media queries to create layouts that adapt seamlessly to different viewport sizes. This approach ensures that users have a consistent and optimal experience regardless of how they access your website.\n\nBy embracing responsive development techniques, you're not only improving user experience but also boosting your SEO performance, as search engines favor mobile-friendly websites in their rankings.",
                'published_at' => now()->subMonths(4),
            ],
            [
                'title' => 'JavaScript Frameworks: Choosing the Right Tool',
                'author' => 'Emily Rodriguez',
                'content' => "The JavaScript ecosystem offers a wealth of frameworks and libraries, each with its own strengths and ideal use cases. React, Vue, and Angular are among the most popular choices, but selecting the right one for your project requires careful consideration.\n\nReact's component-based architecture and virtual DOM make it excellent for building dynamic user interfaces. Vue offers a gentle learning curve and great documentation, making it perfect for developers of all skill levels. Angular provides a complete solution with built-in tools for large-scale applications.\n\nUltimately, the best framework is the one that aligns with your project requirements, team expertise, and long-term maintenance goals. Take time to evaluate each option before making your decision.",
                'published_at' => now()->subMonths(3),
            ],
            [
                'title' => 'Building Secure Web Applications',
                'author' => 'David Thompson',
                'content' => "Security should be a top priority in every web development project. With cyber threats becoming increasingly sophisticated, developers must implement robust security measures to protect user data and maintain trust.\n\nCommon vulnerabilities like SQL injection, cross-site scripting (XSS), and cross-site request forgery (CSRF) can be prevented through proper input validation, output encoding, and security headers. Always use HTTPS, implement strong authentication mechanisms, and keep your dependencies updated.\n\nRegular security audits, code reviews, and staying informed about the latest security best practices are essential habits for any developer serious about creating safe and reliable web applications.",
                'published_at' => now()->subMonths(2),
            ],
            [
                'title' => 'The Future of Web Development',
                'author' => 'Jessica Parker',
                'content' => "Web development continues to evolve at a rapid pace, with new technologies and methodologies emerging regularly. Progressive Web Apps (PWAs), serverless architecture, and AI-powered tools are reshaping how we build and deploy web applications.\n\nThe rise of headless CMS platforms and JAMstack architecture is giving developers more flexibility in choosing their tech stack while improving site performance and security. WebAssembly is opening doors to running high-performance applications directly in the browser.\n\nAs we look ahead, the focus on performance, accessibility, and user experience will only intensify. Developers who stay curious, continue learning, and adapt to new technologies will be well-positioned to thrive in this exciting and dynamic field.",
                'published_at' => now()->subMonth(),
            ],
        ];

        foreach ($blogs as $blog) {
            Blog::create($blog);
        }
    }
}
