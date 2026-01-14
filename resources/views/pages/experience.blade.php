@extends('layouts.app')

@section('title', 'Experience - Portfolio')

@section('content')
<section class="experience-section">
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
@endsection