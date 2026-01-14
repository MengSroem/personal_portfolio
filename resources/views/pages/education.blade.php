@extends('layouts.app')

@section('title', 'Education - Portfolio')

@section('content')
<section class="education-section">
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
@endsection