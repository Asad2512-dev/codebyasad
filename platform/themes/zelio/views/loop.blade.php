@php
    Theme::layout('has-heading');
@endphp

<section class="section-blog-list pb-100 pt-80">
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="sidebar position-sticky top-0">
                    
                    <!-- Search Widget -->
                    <div class="widget widget-search mb-5 border-linear-3 rounded-4 p-4 hover-up transition-all">
                        <h5 class="widget-title mb-4 text-primary">{{ __('Search') }}</h5>
                        <form action="{{ route('public.search') }}" method="GET" class="position-relative">
                            <input type="text" name="q" class="form-control bg-transparent border-color-2 rounded-3 text-white py-3 px-4" placeholder="{{ __('Search articles...') }}" value="{{ request()->query('q') }}">
                            <button type="submit" class="btn position-absolute top-50 end-0 translate-middle-y text-primary icon-md">
                                <i class="ri-search-line fs-5"></i>
                            </button>
                        </form>
                    </div>

                    <!-- Categories Widget -->
                    @php $categories = get_all_categories(); @endphp
                    @if($categories->isNotEmpty())
                        <div class="widget widget-categories mb-5 border-linear-3 rounded-4 p-4 hover-up transition-all">
                            <h5 class="widget-title mb-4 text-primary">{{ __('Categories') }}</h5>
                            <ul class="list-unstyled mb-0">
                                @foreach($categories as $category)
                                    <li class="mb-3">
                                        <a href="{{ $category->url }}" class="text-300 hover-text-primary transition-all d-flex justify-content-between align-items-center">
                                            <span class="fs-6">{{ $category->name }}</span>
                                            <span class="badge bg-linear-1 text-dark rounded-pill">{{ $category->posts_count }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Tags Widget -->
                    @php $tags = get_popular_tags(10); @endphp
                    @if($tags->isNotEmpty())
                        <div class="widget widget-tags border-linear-3 rounded-4 p-4 hover-up transition-all">
                            <h5 class="widget-title mb-4 text-primary">{{ __('Popular Tags') }}</h5>
                            <div class="d-flex flex-wrap gap-2 pt-2">
                                @foreach($tags as $tag)
                                    <a href="{{ $tag->url }}" class="btn btn-sm btn-outline-secondary rounded-pill hover-up transition-all border-color-2">
                                        #{{ $tag->name }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif

                </div>
            </div>

            <!-- Posts List -->
            <div class="col-lg-8">
                @php
                    $style = theme_option('post_item_style', 1);
                    $itemsPerRow = theme_option('post_item_per_row', 2);
                @endphp

                <div @class(['row', "row-cols-1 row-cols-md-{$itemsPerRow}"])>
                    @forelse($posts as $post)
                        @include(Theme::getThemeNamespace('views.templates.post-item.index'))
                    @empty
                        <div class="col-lg-12 py-5">
                            <div class="alert alert-warning text-center rounded-3">
                                {{ __('No posts found matching your criteria.') }}
                            </div>
                        </div>
                    @endforelse
                </div>

                @if($posts->hasPages())
                    <div class="row pt-5">
                        <div class="col-12">
                            {{ $posts->links(Theme::getThemeNamespace('partials.pagination')) }}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
