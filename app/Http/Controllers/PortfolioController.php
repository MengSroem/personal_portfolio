<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home()
    {
        // Prepare all data for single-page view
        $education = [
            [
                'institution' => 'The University of Cambodia',
                'degree' => 'Bachelor of Information Technology',
                'year' => '2023 - 2027',
                'achievements' => [
                    'Dean\'s List - Term III 2023',
                    'GPA: 3.67/4.0',
                    'Best Project Award - Web Development Course'
                ]
            ],
        ];

        $technicalSkills = [
            ['name' => 'HTML/CSS', 'level' => 'advanced'],
            ['name' => 'JavaScript', 'level' => 'intermediate'],
            ['name' => 'PHP', 'level' => 'intermediate'],
            ['name' => 'Laravel', 'level' => 'intermediate'],
            ['name' => 'MySQL', 'level' => 'intermediate'],
            ['name' => 'Git & GitHub', 'level' => 'intermediate'],
            ['name' => 'Bootstrap/Tailwind', 'level' => 'advanced'],
            ['name' => 'React (Basic)', 'level' => 'basic'],
        ];

        $softSkills = [
            ['name' => 'Communication', 'level' => 'advanced'],
            ['name' => 'Teamwork', 'level' => 'advanced'],
            ['name' => 'Problem Solving', 'level' => 'advanced'],
            ['name' => 'Time Management', 'level' => 'intermediate'],
            ['name' => 'Critical Thinking', 'level' => 'intermediate'],
        ];

        $projects = [
            [
                'title' => 'E-commerce Website',
                'description' => 'A full-stack online shopping platform with user authentication, product management, shopping cart, and payment integration.',
                'technologies' => ['Laravel', 'MySQL', 'Bootstrap', 'JavaScript'],
                'github' => 'https://github.com/MengSroem',
                'demo' => null
            ],
            [
                'title' => 'Personal Portfolio Website',
                'description' => 'A responsive portfolio website showcasing my skills, projects, and contact information built with Laravel.',
                'technologies' => ['Laravel', 'PHP', 'CSS3', 'MySQL'],
                'github' => 'https://github.com/MengSroem',
                'demo' => null
            ],
            [
                'title' => 'Student Management Webapp',
                'description' => 'A web application for managing daily tasks with features like categories, priorities, and deadlines.',
                'technologies' => ['HTML', 'CSS', 'JavaScript', 'PHP'],
                'github' => 'https://github.com/MengSroem',
                'demo' => null
            ],
        ];

        $experiences = [
            [
                'title' => 'Web Development Intern',
                'company' => 'Tech Company XYZ',
                'period' => 'June 2024 - August 2024',
                'description' => 'Developed responsive websites using Laravel framework and collaborated with senior developers on various projects.',
                'responsibilities' => [
                    'Built responsive web pages using HTML, CSS, and JavaScript',
                    'Assisted in developing Laravel-based web applications',
                    'Participated in code reviews and team meetings',
                    'Fixed bugs and implemented new features'
                ]
            ],
            [
                'title' => 'Freelance Web Developer',
                'company' => 'Self-Employed',
                'period' => 'January 2024 - Present',
                'description' => 'Creating custom websites for small businesses and individuals.',
                'responsibilities' => [
                    'Consulted with clients to understand their requirements',
                    'Designed and developed custom websites',
                    'Provided ongoing maintenance and support'
                ]
            ],
        ];

        return view('pages.home', compact('education', 'technicalSkills', 'softSkills', 'projects', 'experiences'));
    }
}