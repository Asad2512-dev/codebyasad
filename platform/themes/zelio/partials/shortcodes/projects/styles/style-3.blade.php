@php
    $techStacks = [
        5 => ['Flutter', 'Dart', 'Firebase', 'GetX'],
        6 => ['Flutter', 'Dart', 'Custom Drawing', 'GetX'],
        7 => ['Flutter', 'Dart', 'Firebase', 'GetX'],
        8 => ['Flutter', 'Dart', 'Firebase', 'GetX'],
        9 => ['Flutter', 'Dart', 'GetX', 'Firebase', 'Node.js'],
        10 => ['Flutter', 'Dart', 'GetX', 'REST APIs'],
        11 => ['Flutter', 'Dart', 'Firebase', 'GetX'],
        12 => ['Flutter', 'Dart', 'Urdu TTS', 'Multi-Window'],
        13 => ['Flutter', 'Dart', 'GetX', 'Node.js', 'MongoDB']
    ];
@endphp

<div class="typical pt-70">
    @if($shortcode->title)
        <h3>{!! BaseHelper::clean($shortcode->title) !!}</h3>
    @endif
    <div class="container px-0 pt-4">
        <div class="row">
            <div class="card-scroll">
                <div class="cards">
                    @foreach($projects as $project)
                        <div class="card-custom pt-0" data-index="{{ $loop->index }}">
                            <div class="card__inner rounded-4 border border-secondary-3 bg-white p-lg-5 p-md-4 p-3">
                                @if ($project->image)
                                    <div class="card__image-container rounded-0 zoom-img position-relative">
                                        {{ RvMedia::image($project->image, $project->name, attributes: ['class' => 'card__image']) }}
                                        <a href="{{ $project->url }}" title="{{ $project->name }}" class="card-image-overlay position-absolute start-0 end-0 w-100 h-100"></a>
                                    </div>
                                @endif
                                <div class="card__content px-md-4 px-3 pt-lg-0 pb-lg-8 pb-5">
                                    <div class="d-flex align-items-center gap-2 mb-2 mt-3">
                                        <span class="badge text-dark text-uppercase fw-bold px-2 py-1" style="font-size: 0.65rem; letter-spacing: 0.05em; border-radius: 4px; background: var(--primary-color, #00cf8a) !important; color: #121212 !important;">{{ __('Case Study') }}</span>
                                    </div>
                                    <div class="card__title mb-0 mb-lg-2">
                                        @if ($project->client)
                                            <p class="text-300 fs-5 mb-0 text-muted">{{ $project->client }}</p>
                                        @endif
                                        <a href="{{ $project->url }}">
                                            <p class="fs-3 text-dark mb-1">{!! BaseHelper::clean($project->name) !!}</p>
                                        </a>
                                    </div>
                                    @if($project->description)
                                        <p class="text-300 mb-2">
                                            {!! BaseHelper::clean($project->description) !!}
                                        </p>
                                    @endif
                                    @php
                                        $projectTechRaw = $project->getMetaData('case_study_tech_stack', true);
                                        if (!empty($projectTechRaw)) {
                                            $projectTech = array_filter(array_map('trim', explode(',', $projectTechRaw)));
                                        } else {
                                            $projectTech = $techStacks[$project->id] ?? [];
                                        }
                                    @endphp
                                    @if(!empty($projectTech))
                                        <div class="mt-2">
                                            @foreach($projectTech as $tech)
                                                <span class="badge me-1 mb-1 px-2 py-1" style="font-size: 0.75rem; font-weight: normal; background: rgba(0,0,0,0.05) !important; border: 1px solid rgba(0,0,0,0.08); color: #555 !important;">{{ $tech }}</span>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
