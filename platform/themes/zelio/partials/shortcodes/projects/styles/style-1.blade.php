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

<div id="projects" class="section-projects-1 position-relative pt-120 pb-6 bg-900">
    <div class="container">
        <div class="row align-items-end">
            @if($shortcode->title || $shortcode->subtitle)
                <div class="col-lg-7 me-auto">
                    @if($shortcode->title)
                        <h3 class="ds-3 mt-3 mb-3 text-primary">{!! BaseHelper::clean($shortcode->title) !!}</h3>
                    @endif
                    @if($shortcode->subtitle)
                        <span class="fs-5 fw-medium text-200">
                        {!! BaseHelper::clean(nl2br($shortcode->subtitle)) !!}
                    </span>
                    @endif
                </div>
            @endif
            @if($shortcode->action_text)
                <div class="col-lg-auto">
                    <a href="{{ $shortcode->action_link }}" class="btn btn-gradient mt-lg-0 mt-5 ms-lg-auto d-none d-xl-block">
                        {{ $shortcode->action_text }}
                        <i class="ri-arrow-right-up-line"></i>
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
<div
    class="bg-900 fillter-project"
    @if($shortcode->background_image)
        data-background="{{ RvMedia::getImageUrl($shortcode->background_image) }}"
    @endif
>
    <div class="container">
        <div class="text-start">
            <div class="button-group filter-button-group filter-menu-active">
                <button class="btn btn-md btn-filter mb-2 me-2 text-uppercase active" data-filter="*">{{ __('All Projects') }}</button>
                @foreach($categories as $category)
                    <button class="btn btn-md btn-filter mb-2 me-2 text-uppercase" data-filter=".{{ Str::slug($category->name) }}">{{ $category->name }}</button>
                @endforeach
            </div>
        </div>
        <div class="row masonry-active justify-content-between mt-6">
            <div class="grid-sizer"></div>
            @foreach($projects as $project)
                <div @class(['filter-item col-lg-6 col-12', $project->categories->map(fn ($item) => Str::slug($item->name))->join(' ')])>
                    <div class="project-item rounded-4 overflow-hidden position-relative p-md-4 p-3 bg-white">
                        @if ($project->image)
                            <a href="{{ $project->url }}">
                                {{ RvMedia::image($project->image, $project->name, attributes: ['class' => 'rounded-3 w-100 zoom-img']) }}
                            </a>
                        @endif
                        <div class="d-flex align-items-center mt-4">
                            <a href="{{ $project->url }}" class="project-card-content">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <span class="badge text-dark text-uppercase fw-bold px-2 py-1" style="font-size: 0.65rem; letter-spacing: 0.05em; border-radius: 4px; background: var(--primary-color, #00cf8a) !important; color: #121212 !important;">{{ __('Case Study') }}</span>
                                </div>
                                <h3 class="fw-semibold">
                                    {!! BaseHelper::clean($project->name) !!}
                                </h3>
                                @if($project->client)
                                    <p class="mb-1 text-muted">{{ $project->client }}</p>
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
                            </a>
                            <a href="{{ $project->url }}" title="{{ $project->name }}" class="project-card-icon icon-shape ms-auto icon-md rounded-circle">
                                <i class="ri-arrow-right-up-line"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="contairer overflow-hidden">
    <div class="row justify-content-center position-relative button-project pb-160 bg-900 pt-1">
        @if($shortcode->bottom_action_text)
            <a href="{{ $shortcode->bottom_action_link }}" class="icon_hover position-relative z-1 icon-shape icon_150 border-linear-2 rounded-circle position-relative overflow-hidden bg-white hover-up">
                <span class="icon-shape icon-md bg-linear-2 rounded-circle position-absolute bottom-0 end-0"></span>
                <p class="m-0 fs-7 fw-bold text-capitalize position-absolute top-50 start-50 translate-middle">
                    {{ $shortcode->bottom_action_text }}
                    <i class="ri-arrow-right-up-line fs-7"></i>
                </p>
            </a>
        @endif
        <div class="ellipse position-absolute bottom-0 start-50 translate-middle-x z-0"></div>
    </div>
</div>
