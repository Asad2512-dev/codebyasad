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

<section class="section-work">
    <div class="row">
        <div class="card-scroll mt-8">
            <div class="cards">
                @foreach($projects as $project)
                    <div class="card-custom" data-index="0">
                        <div class="card__inner bg-6 p-lg-6 p-md-4 p-3">
                            <div class="card__image-container zoom-img position-relative">
                                @if ($project->image)
                                    {{ RvMedia::image($project->image, $project->name, attributes: ['class' => 'card__image card_image_square']) }}
                                    <a href="{{ $project->url }}" class="card-image-overlay position-absolute start-0 end-0 w-100 h-100"></a>
                                @endif
                            </div>
                            <div class="card__content px-md-4 px-3">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <span class="badge text-dark text-uppercase fw-bold px-2 py-1" style="font-size: 0.65rem; letter-spacing: 0.05em; border-radius: 4px; background: var(--primary-color, #00cf8a) !important; color: #121212 !important;">{{ __('Case Study') }}</span>
                                </div>
                                <div class="card__title d-md-flex align-items-center mb-0 mb-lg-2">
                                    <a href="{{ $project->url }}" class="card_title_link">
                                        @if($project->categories->isNotEmpty())
                                            <p class="text-primary mb-0 mb-md-2">{{ $project->categories->map(fn ($item) => $item->name)->join(', ') }}</p>
                                        @endif
                                        <h3 class="fw-semibold">{{ $project->name }}</h3>
                                    </a>
                                    <a href="{{ $project->url }}" class="card-icon d-none d-md-inline-flex border text-dark border-dark icon-shape ms-auto icon-md rounded-circle">
                                        <i class="ri-arrow-right-up-line"></i>
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
                                    <div class="mb-3">
                                        @foreach($projectTech as $tech)
                                            <span class="badge text-light me-1 mb-1 px-2 py-1" style="font-size: 0.75rem; font-weight: normal; background: rgba(255,255,255,0.06) !important; border: 1px solid rgba(255,255,255,0.1);">{{ $tech }}</span>
                                        @endforeach
                                    </div>
                                @endif
                                @if($project->client)
                                    <div class="d-md-flex content">
                                        <p class="mb-0 fs-7 text-dark text-uppercase w-40">{{ __('Client') }}</p>
                                        <p class="mb-0 card__description text-300 fs-6 mb-0">{{ $project->client }}</p>
                                    </div>
                                @endif
                                @if($project->start_date)
                                    <div class="d-md-flex content">
                                        <p class="mb-0 fs-7 text-dark text-uppercase w-40">{{ __('Start Date') }}</p>
                                        <p class="mb-0 card__description text-300 fs-6 mb-0">{{ Theme::formatDate($project->start_date)  }}</p>
                                    </div>
                                @endif
                                @if($link = $project->getMetaData('link', true))
                                    <div class="d-md-flex content">
                                        <p class="mb-0 fs-7 text-dark text-uppercase w-40">{{ __('Preview') }}</p>
                                        <a href="{{ $link }}" class="mb-0 card__description text-primary fs-6 mb-0">{{ $link }}</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
