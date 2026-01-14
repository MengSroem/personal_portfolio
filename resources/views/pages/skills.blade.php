@extends('layouts.app')

@section('title', 'Skills - Portfolio')

@section('content')
<section class="skills-section">
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
@endsection