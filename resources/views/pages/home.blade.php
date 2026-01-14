@extends('layouts.app')

@section('title', 'Home - Portfolio')

@section('content')

<!-- HOME SECTION -->
<section id="home" class="hero">
    <div class="container">
        <div class="hero-content">
            <img src="{{ asset('images/profile.jpg') }}" alt="Profile Photo" class="profile-photo">
            <h1>Welcome to My Portfolio</h1>
            <h2>Sroem Meng</h2>
            <p>Information Technology Student | Web Developer | Technology Enthusiast</p>
            <a href="#contact" class="btn">Get In Touch</a>
        </div>
    </div>
</section>

<!-- ABOUT SECTION -->
<section id="about" class="about-section">
    <div class="container">
        <h1>About Me</h1>
        
        <div class="about-content">
            <div class="about-item">
                <h2>Personal Background</h2>
                <p>
                    I am a passionate information technology student with a strong interest in web development 
                    and software engineering. I love creating innovative solutions and learning new technologies 
                    that can make a positive impact in people's lives.
                </p>
            </div>

            <div class="about-item">
                <h2>Career Objective</h2>
                <p>
                    To become a skilled full-stack developer and contribute to innovative technology solutions 
                    that solve real-world problems. I aim to work in a dynamic environment where I can 
                    continuously learn, grow, and make meaningful contributions to cutting-edge projects.
                </p>
            </div>

            <div class="about-item">
                <h2>Interests & Hobbies</h2>
                <ul>
                    <li>Coding and learning new programming languages</li>
                    <li>Reading tech blogs and staying updated with industry trends</li>
                    <li>Playing video games and exploring game development</li>
                    <li>Photography and digital design</li>
                    <li>Play musical instrument</li>
                </ul>
            </div>

            <div class="about-item">
                <h2>Short Biography</h2>
                <p>
                    I started my journey in IT with a curiosity about how websites and applications 
                    work. Over the years, I've developed strong skills in web development, working with various 
                    technologies including HTML, CSS, JavaScript, and PHP frameworks like Laravel. 
                    I'm always excited to take on new challenges and collaborate with others to build 
                    amazing digital experiences.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- EDUCATION SECTION -->
<section id="education" class="education-section">
    <div class="container">
        <h1>Education</h1>
        
        <div class="education-list">
            @foreach($education as $edu)
            <div class="education-card">
                <div class="education-header">
                    <h2>{{ $edu['institution'] }}</h2>
                    <span class="year">{{ $edu['year'] }}</span>
                </div>
                
                <h3>{{ $edu['degree'] }}</h3>
                
                @if(isset($edu['achievements']) && count($edu['achievements']) > 0)
                <div class="achievements">
                    <h4>Academic Achievements:</h4>
                    <ul>
                        @foreach($edu['achievements'] as $achievement)
                        <li>{{ $achievement }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- SKILLS SECTION -->
<section id="skills" class="skills-section">
    <div class="container">
        <h1>My Skills</h1>
        
        <div class="skills-category">
            <h2>Technical Skills</h2>
            <div class="skills-list">
                @foreach($technicalSkills as $skill)
                <div class="skill-item">
                    <div class="skill-info">
                        <span class="skill-name">{{ $skill['name'] }}</span>
                        <span class="skill-label">{{ ucfirst($skill['level']) }}</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-level skill-{{ $skill['level'] }}"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="skills-category">
            <h2>Soft Skills</h2>
            <div class="skills-list">
                @foreach($softSkills as $skill)
                <div class="skill-item">
                    <div class="skill-info">
                        <span class="skill-name">{{ $skill['name'] }}</span>
                        <span class="skill-label">{{ ucfirst($skill['level']) }}</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-level skill-{{ $skill['level'] }}"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- PROJECTS SECTION -->
<section id="projects" class="projects-section">
    <div class="container">
        <h1>My Projects</h1>
        
        <div class="projects-grid">
            @foreach($projects as $project)
            <div class="project-card">
                <h2>{{ $project['title'] }}</h2>
                <p class="project-description">{{ $project['description'] }}</p>
                
                <div class="technologies">
                    <h4>Technologies Used:</h4>
                    <div class="tech-tags">
                        @foreach($project['technologies'] as $tech)
                        <span class="tech-tag">{{ $tech }}</span>
                        @endforeach
                    </div>
                </div>
                
                <div class="project-links">
                    @if(isset($project['github']) && $project['github'])
                    <a href="{{ $project['github'] }}" target="_blank" class="btn-link">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/>
                        </svg>
                        GitHub
                    </a>
                    @endif
                    
                    @if(isset($project['demo']) && $project['demo'])
                    <a href="{{ $project['demo'] }}" target="_blank" class="btn-link">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            <polyline points="15 3 21 3 21 9"></polyline>
                            <line x1="10" y1="14" x2="21" y2="3"></line>
                        </svg>
                        Live Demo
                    </a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- EXPERIENCE SECTION -->
<section id="experience" class="experience-section">
    <div class="container">
        <h1>Experience</h1>
        
        <div class="experience-list">
            @forelse($experiences as $experience)
            <div class="experience-card">
                <div class="experience-header">
                    <div class="experience-title-group">
                        <h2>{{ $experience['title'] }}</h2>
                        <h3>{{ $experience['company'] }}</h3>
                    </div>
                    <span class="experience-period">{{ $experience['period'] }}</span>
                </div>
                
                <p class="experience-description">{{ $experience['description'] }}</p>
                
                @if(isset($experience['responsibilities']) && count($experience['responsibilities']) > 0)
                <div class="responsibilities">
                    <h4>Key Responsibilities:</h4>
                    <ul>
                        @foreach($experience['responsibilities'] as $responsibility)
                        <li>{{ $responsibility }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
            @empty
            <div class="no-experience">
                <p>Currently building my experience portfolio. Check back soon!</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- CONTACT SECTION -->
<section id="contact" class="contact-section">
    <div class="container">
        <h1>Contact Me</h1>
        
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <div class="contact-content">
            <div class="contact-form">
                <h2>Send Me a Message</h2>
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    
                    <div class="form-group">
                        <label for="name">Full Name <span class="required">*</span></label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            value="{{ old('name') }}" 
                            placeholder="Enter your name"
                            required
                        >
                        @error('name')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address <span class="required">*</span></label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="{{ old('email') }}" 
                            placeholder="Enter your email"
                            required
                        >
                        @error('email')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="message">Message <span class="required">*</span></label>
                        <textarea 
                            id="message" 
                            name="message" 
                            rows="6" 
                            placeholder="Enter your message"
                            required
                        >{{ old('message') }}</textarea>
                        @error('message')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-submit">Send Message</button>
                </form>
            </div>

            <div class="contact-info">
                <h2>Contact Information</h2>
                
                <div class="info-item">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                    <div>
                        <strong>Email</strong>
                        <p>sremmeng007@gmail.com</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                    <div>
                        <strong>Phone</strong>
                        <p>+855 88 515 6229</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                        <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                    <div>
                        <strong>Location</strong>
                        <p>Samroang Krom, Khan Porsenchey, Phnom Penh.</p>
                    </div>
                </div>

                <div class="social-media">
                    <h3>Follow Me</h3>
                    <div class="social-links-vertical">
                        <a href="https://linkedin.com/in/meng-sroem" target="_blank">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                            LinkedIn
                        </a>
                        <a href="https://github.com/MengSroem" target="_blank">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/>
                            </svg>
                            GitHub
                        </a>
                       <a href="https://t.me/MengSroem" target="_blank">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M23.498 6.186L20.84 19.04c-.2.91-.73 1.13-1.48.7l-4.09-3.02-1.97 1.9c-.22.22-.4.4-.82.4l.29-4.18 7.62-6.88c.33-.29-.07-.45-.52-.16l-9.42 5.93-4.06-1.27c-.88-.28-.9-.88.18-1.3l15.86-6.11c.74-.27 1.38.18 1.14 1.14z"/>
                            </svg>
                            Telegram
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection