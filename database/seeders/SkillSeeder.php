<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            // Technical Skills
            [
                'name' => 'PHP & Laravel',
                'category' => 'technical',
                'percentage' => 80,
                'icon' => '⚡',
            ],
            [
                'name' => 'JavaScript / TypeScript',
                'category' => 'technical',
                'percentage' => 85,
                'icon' => '💛',
            ],
            [
                'name' => 'HTML & CSS / Tailwind',
                'category' => 'technical',
                'percentage' => 95,
                'icon' => '🎨',
            ],
            [
                'name' => 'MySQL / PostgreSQL',
                'category' => 'technical',
                'percentage' => 80,
                'icon' => '🗄️',
            ],
            [
                'name' => 'Git & Version Control',
                'category' => 'technical',
                'percentage' => 88,
                'icon' => '🔧',
            ],
            [
                'name' => 'RESTful API Development',
                'category' => 'technical',
                'percentage' => 83,
                'icon' => '🔌',
            ],

            // Design Skills
            [
                'name' => 'UI/UX Design',
                'category' => 'design',
                'percentage' => 85,
                'icon' => '✨',
            ],
            [
                'name' => 'Figma / Adobe XD',
                'category' => 'design',
                'percentage' => 90,
                'icon' => '🎯',
            ],
            [
                'name' => 'Responsive Design',
                'category' => 'design',
                'percentage' => 92,
                'icon' => '📱',
            ],
            [
                'name' => 'Graphic Design',
                'category' => 'design',
                'percentage' => 78,
                'icon' => '🖼️',
            ],
            [
                'name' => 'Problem Solving',
                'category' => 'design',
                'percentage' => 95,
                'icon' => '🧩',
            ],

            // Tools
            [
                'name' => 'Laravel',
                'category' => 'tool',
                'percentage' => 90,
                'icon' => '⚡',
            ],
            [
                'name' => 'React',
                'category' => 'tool',
                'percentage' => 82,
                'icon' => '⚛️',
            ],
            [
                'name' => 'Tailwind CSS',
                'category' => 'tool',
                'percentage' => 95,
                'icon' => '🎨',
            ],
            [
                'name' => 'Docker',
                'category' => 'tool',
                'percentage' => 70,
                'icon' => '📦',
            ],
            [
                'name' => 'Git',
                'category' => 'tool',
                'percentage' => 88,
                'icon' => '🔧',
            ],
            [
                'name' => 'VS Code',
                'category' => 'tool',
                'percentage' => 98,
                'icon' => '💻',
            ],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
