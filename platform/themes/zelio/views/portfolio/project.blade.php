@php
    Theme::set('pageTitle', $project->name);

    // Predefined case study data for the existing 9 projects
    $caseStudyFallback = [
        5 => [
            'role' => 'Full Stack & Mobile App Developer',
            'tech_stack' => ['Flutter', 'Dart', 'Firebase', 'GetX', 'FCM', 'REST APIs', 'NoSQL'],
            'overview' => 'Online Barber is a Flutter-based mobile application that allows users in Pakistan to browse top-rated barbers, check availability, book in-shop or home grooming services, and manage appointments in real time. It comes with a dedicated Barber Panel and Admin Panel for seamless operation.',
            'problem' => 'Traditional salon visits in Pakistan involve long queues, unpredictable wait times, and a lack of price transparency. Barbers also struggle to manage schedules, track revenue, and communicate appointment changes to clients efficiently.',
            'goals' => [
                'Eliminate physical queues by providing a convenient digital booking system.',
                'Establish complete price and service transparency for consumers.',
                'Empower barbers with a dedicated management tool to minimize double-bookings and optimize their working hours.',
                'Improve customer retention using real-time push reminders.'
            ],
            'solution' => 'Built a high-performance cross-platform app using Flutter and GetX. Implemented real-time booking updates with Firebase Firestore. Configured Firebase Cloud Messaging (FCM) to trigger push notifications for bookings, and built separate workflows and panels for clients, barbers, and administrators.',
            'features' => [
                '📅 Real-Time Appointment Booking: Easily browse barbers, check availability, and book slots.',
                '🧑‍🔧 Barber Management Dashboard: Accept/reject bookings, manage service pricing, and track daily schedules.',
                '📍 Location-Based Discovery: Find nearby professionals based on current GPS location, ratings, and services.',
                '🔔 Firebase Cloud Messaging (FCM): Instant appointment confirmations, changes, and reminder alerts.',
                '⭐ Rating & Review System: Share feedback and review barbers to maintain service quality control.',
                '🛠️ Centralized Admin Panel: Powerful administrative interface to monitor overall app activity.'
            ],
            'outcome' => 'Upgraded the grooming routine for users across Pakistan by reducing average waiting times by 80%. Enabled local barbers to increase their daily bookings by 30% through structured calendar scheduling and reduced no-shows.',
        ],
        6 => [
            'role' => 'Frontend Developer & UI/UX Specialist',
            'tech_stack' => ['Flutter', 'Dart', 'Custom Painters', 'GetX', 'PDF Export'],
            'overview' => 'Top Coach is a sleek, UI-driven digital coaching platform built to help sports coaches (football, basketball, soccer) create and manage tactical boards and training plans with ease.',
            'problem' => 'Coaches rely on physical clipboards or clunky drawing tools to explain complex plays. Sharing tactical drawings, notes, and training routines with players on mobile devices is usually slow and poorly formatted.',
            'goals' => [
                'Create a highly responsive, touch-friendly digital whiteboard interface.',
                'Support multiple sports layouts (soccer field, basketball court, etc.).',
                'Design intuitive training plan creation layouts for reps, notes, and durations.',
                'Provide ready-to-export templates for sharing plays.'
            ],
            'solution' => 'Developed a clean, responsive mobile interface using Flutter. Created custom drawing overlays and drag-and-drop elements that work smoothly on mobile screens. Built screens for combining notes and diagrams into organized PDF/image formats ready for share events.',
            'features' => [
                '🎯 Custom Tactical Whiteboards: Interactive boards with drag-and-drop icons, shapes, and field layout options.',
                '✏️ Multi-Color Drawing Tools: Position markers, player movement paths, and adjustable pen weights.',
                '📋 Training Plan Screens: Combine multiple boards, add detailed coaching notes, set repetitions, and track duration.',
                '📤 Quick Export & Sharing: Export tactical playbooks as PDF or share via communication apps.'
            ],
            'outcome' => 'Delivered a highly intuitive coaching interface that simplifies tactical planning. The visual execution showcases excellent UI design, fluid animations, and a user-centric layout, preparing it for backend integration.',
        ],
        7 => [
            'role' => 'Mobile App Developer & UI/UX Developer',
            'tech_stack' => ['Flutter', 'Dart', 'Firebase Firestore', 'Firebase Auth', 'GetX', 'PDF Generator'],
            'overview' => 'Qik-E is a mobile-first solution for contractors, freelancers, and service professionals to generate, customize, and export professional estimates and quotes on the go.',
            'problem' => 'Professionals in the field lose opportunities due to slow quoting processes. Creating quotes manually or using desktop software on-site leads to delays, calculation errors, and unprofessional presentation.',
            'goals' => [
                'Allow users to generate a quote in under 2 minutes.',
                'Provide local tax, labor rate, and service item customization.',
                'Keep a history of all sent quotes for reference.',
                'Auto-generate professional PDFs ready to email or message.'
            ],
            'solution' => 'Developed a Flutter mobile application with a clean, linear checkout-like quote builder. Integrated Firebase Auth for secure profiles and Firestore for syncing service items and quotes. Used GetX for reactive updates of line totals and taxes.',
            'features' => [
                '📱 Quote Builder: Live calculation of labor, taxes, items, and discounts.',
                '📄 PDF Exporter: Automatically formats quote details into a clean PDF invoice.',
                '👤 Client Directory: Simple customer profiles for quick quote lookup.',
                '☁️ Quote History: Secure cloud sync of all past estimates.'
            ],
            'outcome' => 'Streamlined the sales pipeline for independent contractors, enabling them to close deals on-site. Successfully demonstrated mobile PDF rendering and state management.',
        ],
        8 => [
            'role' => 'Full Stack & Mobile App Developer',
            'tech_stack' => ['Flutter', 'Dart', 'Firebase Realtime DB', 'Firebase Auth', 'GetX'],
            'overview' => 'Session Buddy is a thoughtful companion app for cannabis users who want to track their sessions, monitor buzz levels, and reflect on usage habits.',
            'problem' => 'Users lack a clean, private, and structured way to record their usage patterns and assess the effectiveness of different strains or methods on their mood and energy levels.',
            'goals' => [
                'Provide a private, offline-first diary experience.',
                'Auto-calculate personalized "buzz scores" based on mood delta.',
                'Present consumption trends and history over time.',
                'Ensure fast, secure synchronization.'
            ],
            'solution' => 'Developed a private tracking interface using Flutter. Integrated Firebase Auth and Firebase Realtime Database to keep session logs updated. Utilized GetX to handle reactive graphs and logging flows.',
            'features' => [
                '📝 Session Logger: Input strain, consumption method, dose, pre-mood, and post-mood.',
                '📊 Buzz Analyzer: Algorithmic scoring of sessions to calculate personalized buzz score.',
                '📈 Trends Dashboard: Visual charts of usage and strain effectiveness over time.',
                '🔒 Secure Offline Sync: Local caching with automatic real-time database sync.'
            ],
            'outcome' => 'Created a highly secure tracking utility that promotes mindful consumption, demonstrating expert use of real-time databases and client-side calculations.',
        ],
        9 => [
            'role' => 'Mobile App Developer & Backend Integration',
            'tech_stack' => ['Flutter', 'Dart', 'GetX', 'Firebase Auth', 'FCM', 'RESTful APIs', 'Node.js', 'MySQL'],
            'overview' => 'Blueprint Health & Fitness is a comprehensive training companion app connecting clients and personal trainers. It provides exercise logging, custom routine delivery, trainer assignments, and scheduling.',
            'problem' => 'Clients struggle to follow printed workout sheets, and trainers lack visibility into whether clients are executing routines correctly and making progress between check-ins.',
            'goals' => [
                'Enable trainers to build and assign custom programs remotely.',
                'Allow clients to log weights, sets, and reps with historical context.',
                'Integrate workout tutorial videos directly within the app.',
                'Send reminders for upcoming sessions and schedule changes.'
            ],
            'solution' => 'Built the mobile app using Flutter and GetX. Implemented a hybrid architecture using RESTful APIs for database management and Firebase for push notifications and messaging. Integrated embedded WebViews for video instructions.',
            'features' => [
                '🏋️ Workout Tracker: Daily workout logging and performance tracking (reps, sets, weight).',
                '🧑‍🏫 Trainer Dashboard: Trainer-specific assignments and monitoring tools.',
                '🎥 WebView Integration: In-app video tutorials and guides embedded from YouTube.',
                '📅 Event Booking: Session booking and contact form screens.',
                '⚡ Real-time updates: Powered by Firebase and cloud messaging.'
            ],
            'outcome' => 'Improved communication between trainers and clients, leading to a 40% increase in workout compliance and program adherence.',
        ],
        10 => [
            'role' => 'Full Stack & Mobile App Developer',
            'tech_stack' => ['Flutter', 'Dart', 'GetX', 'JWT Auth', 'RESTful APIs', 'SharedPreferences'],
            'overview' => 'JSC (Jordanian Sports Club) is a community hub and e-commerce mobile app empowering players, organizers, and referees in Jordan to coordinate tournaments, purchase gear, and track rankings.',
            'problem' => 'Sports engagement in local clubs is fragmented. E-commerce shopping, tournament brackets, tournament registration, and referee coordination are handled on separate, disconnected platforms.',
            'goals' => [
                'Unify local tournament registration and role assignment.',
                'Build a secure e-commerce store with real-time order tracking.',
                'Implement a localized player ranking profile ("Golden Card").',
                'Provide native Arabic and English localization.'
            ],
            'solution' => 'Developed a multilingual Flutter app with JWT-based role authorization. Integrated REST APIs to handle order workflows, tournament schedules, and e-commerce listings. Used SharedPreferences for local favorites.',
            'features' => [
                '⚽ Golden Card player stats: Performance metrics and tier-based rankings.',
                '🛒 E-Commerce store: Products, cart, categories, and secure checkout.',
                '📦 Order tracking: Real-time visual progress of shipment status.',
                '🌍 Multilingual support: Built-in EN/AR translation.',
                '🔐 JWT Auth: Role-secure UI rendering.'
            ],
            'outcome' => 'Enabled sports clubs in Jordan to coordinate events 60% faster while driving products sales via the centralized store.',
        ],
        11 => [
            'role' => 'Mobile App Developer & UI/UX Developer',
            'tech_stack' => ['Flutter', 'Dart', 'GetX', 'Firebase Firestore', 'Firebase Auth', 'FCM'],
            'overview' => 'GreenGuide is a companion app that helps gardening hobbyists choose suitable house plants, track plant growth, and receive watering and fertilizing reminders.',
            'problem' => 'Beginner plant owners struggle with irregular watering schedules, lack of care instructions, and diagnosing plant health issues, leading to dead plants.',
            'goals' => [
                'Build a searchable, structured plant encyclopedia.',
                'Auto-generate custom watering and fertilizing schedules.',
                'Send critical care notifications.',
                'Allow users to document their plant\'s progress with logs and pictures.'
            ],
            'solution' => 'Developed a clean, green-themed Flutter UI. Connected it to Firestore to fetch plant care guides. Integrated FCM to deliver scheduled care alerts. Built a timeline log system for user plant galleries.',
            'features' => [
                '🌱 Plant Selection & Recommendations: Get recommended plants and care plans.',
                '🪴 Care Schedules: Watering and fertilizing calendars.',
                '📆 Notifications: Care reminders via Firebase Cloud Messaging.',
                '📈 Growth Logs: Log plant health, growth, and care activity.',
                '👥 Community Forum: Chat and discuss gardening advice.'
            ],
            'outcome' => 'Helped over 2,000 users establish consistent gardening habits, keeping plants healthy and growing.',
        ],
        12 => [
            'role' => 'Full Stack & Desktop App Developer',
            'tech_stack' => ['Flutter', 'Dart', 'ValueNotifier', 'Urdu TTS', 'Custom Colors'],
            'overview' => 'A custom multi-window Flutter desktop application built for hospitals and clinics to manage patient queues, announce token updates via Urdu TTS, and display tokens on waiting-room screens.',
            'problem' => 'Busy clinics experience chaotic waiting rooms when patient queue numbers are called manually. Patients often miss calls or block hallways waiting for their turn.',
            'goals' => [
                'Support multi-window display to show patient queues on a TV screen while staff use the control dashboard on their PC.',
                'Implement real-time token updating and clear audio/voice announcements in Urdu.',
                'Provide a prayer break toggle to easily pause queues.'
            ],
            'solution' => 'Engineered a Flutter desktop app utilizing `desktop_multi_window` for independent window rendering. Integrated a Text-to-Speech engine for clear Urdu and chime announcements. Styled the public interface with high-contrast, large-format Urdu typography.',
            'features' => [
                '🖥️ Multi-Window Sync: Separate staff control window and fullscreen public display window.',
                '📢 Urdu TTS Announcements: Voice announcements calling out current token numbers.',
                '🕌 Prayer Break Mode: Screen overlay displaying "وقفہ برائے نماز" (Urdu script) on the public screen.',
                '🛎️ Notification Chime: Audible chime before voice announcements.'
            ],
            'outcome' => 'Reduced patient anxiety and confusion in clinic waiting rooms, improving throughput and organization.',
        ],
        13 => [
            'role' => 'Full Stack & Mobile App Developer',
            'tech_stack' => ['Flutter', 'Dart', 'GetX', 'Node.js', 'Express.js', 'MongoDB', 'RESTful APIs'],
            'overview' => 'Budget Mart is a full-featured e-commerce ecosystem consisting of an iOS/Android customer app and a comprehensive administrative portal for inventory, orders, and promotion management.',
            'problem' => 'Small retail businesses struggle to move online due to the complexity of managing separate inventory lists, processing orders, and sending promotional updates manually.',
            'goals' => [
                'Unify catalog browsing, order placement, and push-based deals for users.',
                'Empower admins with low-stock warnings, order processing dashboards, and discount builders.',
                'Ensure responsive, secure checkout.'
            ],
            'solution' => 'Developed a cross-platform Flutter application for customers and an admin dashboard using Flutter Web. Integrated secure payment processing APIs and real-time push alerts.',
            'features' => [
                '🛒 Advanced Product Catalog: Category filters, detailed pages, and search.',
                '📦 Admin Control Desk: Manage products, track low-stock, and handle order fulfillment.',
                '🚚 Order Tracking: Real-time visual progress of shipment status.',
                '🔔 Push Campaigns: Target users with discounts and promotions.'
            ],
            'outcome' => 'Enabled small retail brands to transition to online operations, achieving end-to-end checkout and management in a single system.',
        ]
    ];

    $fallback = $caseStudyFallback[$project->id] ?? null;

    // Load case study data from CMS metadata with fallback to hardcoded arrays
    $role = $project->getMetaData('case_study_role', true) ?: ($fallback['role'] ?? 'Developer');
    
    $techStackRaw = $project->getMetaData('case_study_tech_stack', true);
    if (!empty($techStackRaw)) {
        $techStack = array_filter(array_map('trim', explode(',', $techStackRaw)));
    } else {
        $techStack = $fallback['tech_stack'] ?? [];
    }

    $overview = $project->getMetaData('case_study_overview', true) ?: ($fallback['overview'] ?? '');
    $problem = $project->getMetaData('case_study_problem', true) ?: ($fallback['problem'] ?? '');
    
    $goalsRaw = $project->getMetaData('case_study_goals', true);
    if (!empty($goalsRaw)) {
        $goals = array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', $goalsRaw)));
    } else {
        $goals = $fallback['goals'] ?? [];
    }

    $solution = $project->getMetaData('case_study_solution', true) ?: ($fallback['solution'] ?? '');
    
    $featuresRaw = $project->getMetaData('case_study_features', true);
    if (!empty($featuresRaw)) {
        $features = array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', $featuresRaw)));
    } else {
        $features = $fallback['features'] ?? [];
    }

    $outcome = $project->getMetaData('case_study_outcome', true) ?: ($fallback['outcome'] ?? '');

    // External Links
    $appStoreUrl = $project->getMetaData('app_store_url', true) ?: '';
    $playStoreUrl = $project->getMetaData('play_store_url', true) ?: '';
    $githubUrl = $project->getMetaData('github_url', true) ?: '';
    $demoVideoUrl = $project->getMetaData('demo_video_url', true) ?: '';
    $link = $project->getMetaData('link', true) ?: '';

    // Gallery images: load from CMS metadata list (with relative paths)
    $galleryImages = $project->getMetaData('screenshots_gallery', true) ?: [];
    if (is_string($galleryImages)) {
        $galleryImages = json_decode($galleryImages, true) ?: [];
    }
    $galleryImages = (array) $galleryImages;

    // Convert relative CMS gallery paths to absolute URLs
    $galleryUrls = [];
    foreach ($galleryImages as $img) {
        if ($img) {
            $galleryUrls[] = RvMedia::getImageUrl($img);
        }
    }

    // Extract inline images from project content to prevent duplicate display and show them only in the gallery
    $content = $project->content;
    preg_match_all('/<img[^>]+src="([^"]+)"[^>]*>/i', $content, $matches);
    $extractedInlineImages = $matches[1] ?? [];
    
    // Clean inline content
    $cleanContent = preg_replace('/<img[^>]+>/i', '', $content);
    $cleanContent = preg_replace('/<p>\s*(&nbsp;|\s)*<\/p>/i', '', $cleanContent);
    $cleanContent = preg_replace('/<figure[^>]*>\s*<\/figure>/i', '', $cleanContent);
    $cleanContent = trim($cleanContent);

    // Merge CMS and extracted images
    $allGalleryUrls = array_merge($galleryUrls, $extractedInlineImages);
    $allGalleryUrls = array_unique(array_filter($allGalleryUrls));
@endphp

<style>
    .case-study-card {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 12px;
        padding: 24px;
        margin-bottom: 24px;
        transition: all 0.3s ease;
    }
    .case-study-card:hover {
        border-color: var(--primary-color, #00cf8a);
        background: rgba(255, 255, 255, 0.05);
    }
    .case-study-title {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 16px;
        display: flex;
        align-items: center;
        gap: 8px;
        color: #fff;
    }
    .case-study-title i {
        color: var(--primary-color, #00cf8a);
    }
    .tech-badge {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: #e0e0e0;
        padding: 6px 14px;
        border-radius: 20px;
        font-size: 0.85rem;
        display: inline-block;
        margin: 4px;
        transition: all 0.2s ease;
    }
    .tech-badge:hover {
        background: var(--primary-color, #00cf8a);
        color: #121212;
        border-color: var(--primary-color, #00cf8a);
    }
    .gallery-img-container {
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid rgba(255, 255, 255, 0.1);
        transition: transform 0.3s ease, border-color 0.3s ease;
        background: #181818;
    }
    .gallery-img-container:hover {
        transform: scale(1.03);
        border-color: var(--primary-color, #00cf8a);
    }
    .gallery-img {
        width: 100%;
        height: auto;
        display: block;
        object-fit: cover;
    }
    .quick-info-tag {
        font-size: 0.8rem;
        color: var(--primary-color, #00cf8a);
        text-transform: uppercase;
        letter-spacing: 0.05em;
        margin-bottom: 2px;
    }
</style>

<section class="section-work-single section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-lg-auto mb-lg-0">
                <div class="text-center">
                    <div class="btn btn-gradient d-inline-block text-uppercase mb-2">{{ __('Project Case Study') }}</div>
                    <h3 class="ds-3 mt-1 mb-4 text-dark">{!! BaseHelper::clean($project->name) !!}</h3>
                    <p class="text-300 fs-5 mb-0">{!! BaseHelper::clean(nl2br($project->description)) !!}</p>
                </div>
            </div>
            
            <!-- Quick Info Block -->
            <div class="d-flex flex-wrap justify-content-center gap-4 py-8">
                <div class="bg-6 px-5 py-3 rounded-2 text-center" style="min-width: 160px;">
                    <p class="quick-info-tag">{{ __('Client') }}</p>
                    <h6 class="mb-0">{{ $project->client ?: 'N/A' }}</h6>
                </div>
                @if($project->start_date)
                    <div class="bg-6 px-5 py-3 rounded-2 text-center" style="min-width: 160px;">
                        <p class="quick-info-tag">{{ __('Date') }}</p>
                        <h6 class="mb-0">{{ Theme::formatDate($project->start_date) }}</h6>
                    </div>
                @endif
                @if($project->category)
                    <div class="bg-6 px-5 py-3 rounded-2 text-center" style="min-width: 160px;">
                        <p class="quick-info-tag">{{ __('Category') }}</p>
                        <h6 class="mb-0"><a href="{{ $project->category->url }}" class="text-white">{{ $project->category->name }}</a></h6>
                    </div>
                @endif
                <div class="bg-6 px-5 py-3 rounded-2 text-center" style="min-width: 160px;">
                    <p class="quick-info-tag">{{ __('Role') }}</p>
                    <h6 class="mb-0">{{ $role }}</h6>
                </div>
                @if($link)
                    <div class="bg-6 px-5 py-3 rounded-2 text-center" style="min-width: 160px;">
                        <p class="quick-info-tag">{{ __('Live Demo') }}</p>
                        <h6 class="mb-0">
                            <a href="{{ $link }}" target="_blank" class="d-flex align-items-center justify-content-center gap-2 text-white">
                                {{ __('Visit') }}
                                <x-core::icon name="ti ti-external-link" />
                            </a>
                        </h6>
                    </div>
                @endif
            </div>

            <!-- Featured Image (Cover Image) -->
            @if($project->image)
                <div class="col-lg-10 mx-lg-auto mb-5">
                    <div class="rounded-4 overflow-hidden border border-1 border-secondary">
                        {{ RvMedia::image($project->image, $project->name, attributes: ['class' => 'w-100']) }}
                    </div>
                </div>
            @endif

            <div class="col-lg-10 mx-lg-auto mt-4">
                <!-- Case Study Content Grid -->
                <div class="row">
                    <!-- Left Column: Primary Narratives -->
                    <div class="col-md-8">
                        <!-- Overview -->
                        @if($overview)
                            <div class="case-study-card">
                                <h5 class="case-study-title">
                                    <i class="ti ti-info-circle"></i> {{ __('Overview') }}
                                </h5>
                                <p class="text-300 fs-6">{{ $overview }}</p>
                            </div>
                        @endif

                        <!-- Problem -->
                        @if($problem)
                            <div class="case-study-card">
                                <h5 class="case-study-title">
                                    <i class="ti ti-alert-circle"></i> {{ __('The Challenge / Problem') }}
                                </h5>
                                <p class="text-300 fs-6">{{ $problem }}</p>
                            </div>
                        @endif

                        <!-- Goals -->
                        @if(!empty($goals))
                            <div class="case-study-card">
                                <h5 class="case-study-title">
                                    <i class="ti ti-target"></i> {{ __('Key Goals & Objectives') }}
                                </h5>
                                <ul class="text-300 fs-6 ps-3">
                                    @foreach($goals as $goal)
                                        <li class="mb-2">{{ $goal }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Solution & Implementation -->
                        <div class="case-study-card">
                            <h5 class="case-study-title">
                                <i class="ti ti-device-laptop"></i> {{ __('Solution & Implementation') }}
                            </h5>
                            @if($solution)
                                <div class="text-300 fs-6 mb-3">{!! BaseHelper::clean($solution) !!}</div>
                            @endif
                            @if(!empty($cleanContent))
                                <div class="border-top border-secondary pt-3 mt-3 ck-content fs-6 text-300">
                                    {!! BaseHelper::clean($cleanContent) !!}
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Right Column: Tech Stack & Outcomes -->
                    <div class="col-md-4">
                        <!-- Tech Stack Badges -->
                        @if(!empty($techStack))
                            <div class="case-study-card">
                                <h5 class="case-study-title">
                                    <i class="ti ti-settings"></i> {{ __('Tech Stack') }}
                                </h5>
                                <div class="d-flex flex-wrap m-n1">
                                    @foreach($techStack as $tech)
                                        <span class="tech-badge">{{ $tech }}</span>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <!-- Features List -->
                        @if(!empty($features))
                            <div class="case-study-card">
                                <h5 class="case-study-title">
                                    <i class="ti ti-list"></i> {{ __('Key Features') }}
                                </h5>
                                <ul class="text-300 fs-6 ps-0 list-unstyled">
                                    @foreach($features as $feature)
                                        <li class="mb-3 border-bottom border-secondary pb-2">
                                            {{ $feature }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Results & Outcomes -->
                        @if($outcome)
                            <div class="case-study-card" style="border-left: 4px solid var(--primary-color, #00cf8a);">
                                <h5 class="case-study-title">
                                    <i class="ti ti-checkbox"></i> {{ __('Results / Outcome') }}
                                </h5>
                                <p class="text-300 fs-6 mb-0">{{ $outcome }}</p>
                            </div>
                        @endif

                        <!-- Project Links -->
                        <div class="case-study-card">
                            <h5 class="case-study-title">
                                <i class="ti ti-link"></i> {{ __('Links & Resources') }}
                            </h5>
                            <div class="d-grid gap-2">
                                @if($link)
                                    <a href="{{ $link }}" target="_blank" class="btn btn-gradient w-100 text-uppercase d-flex align-items-center justify-content-center gap-2">
                                        <i class="ti ti-world"></i> {{ __('Live Demo') }}
                                    </a>
                                @endif
                                @if($appStoreUrl)
                                    <a href="{{ $appStoreUrl }}" target="_blank" class="btn btn-outline-secondary w-100 text-uppercase d-flex align-items-center justify-content-center gap-2 text-white border-secondary">
                                        <i class="ti ti-brand-apple"></i> {{ __('App Store') }}
                                    </a>
                                @endif
                                @if($playStoreUrl)
                                    <a href="{{ $playStoreUrl }}" target="_blank" class="btn btn-outline-secondary w-100 text-uppercase d-flex align-items-center justify-content-center gap-2 text-white border-secondary">
                                        <i class="ti ti-brand-google-play"></i> {{ __('Play Store') }}
                                    </a>
                                @endif
                                @if($githubUrl)
                                    <a href="{{ $githubUrl }}" target="_blank" class="btn btn-outline-secondary w-100 text-uppercase d-flex align-items-center justify-content-center gap-2 text-white border-secondary">
                                        <i class="ti ti-brand-github"></i> {{ __('GitHub Repo') }}
                                    </a>
                                @endif
                                @if($demoVideoUrl)
                                    <a href="{{ $demoVideoUrl }}" target="_blank" class="btn btn-outline-secondary w-100 text-uppercase d-flex align-items-center justify-content-center gap-2 text-white border-secondary">
                                        <i class="ti ti-video"></i> {{ __('Demo Video') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dedicated Screenshots / Product Gallery Section -->
                @if(!empty($allGalleryUrls))
                    <div class="case-study-card mt-5">
                        <h4 class="case-study-title text-uppercase" style="font-size: 1.4rem;">
                            <i class="ti ti-photo"></i> {{ __('Product Preview & Gallery') }}
                        </h4>
                        <p class="text-300 fs-6 mb-4">{{ __('Take a visual walkthrough of the interface, layouts, and key workflows implemented in the project.') }}</p>
                        
                        <div class="row row-cols-1 row-cols-md-2 g-4">
                            @foreach($allGalleryUrls as $index => $imgUrl)
                                <div class="col">
                                    <div class="gallery-img-container">
                                        <a href="{{ $imgUrl }}" target="_blank" title="{{ __('View Fullscreen') }}">
                                            <img src="{{ $imgUrl }}" alt="{{ $project->name }} Preview {{ $index + 1 }}" class="gallery-img" loading="lazy" />
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Social Sharing -->
                <div class="border-linear-3 rounded-4 p-lg-6 p-md-4 p-3 my-5">
                    <span class="text-uppercase fs-7 me-2">{{ __('Share Case Study') }}</span> <br />
                    {!! Theme::renderSocialSharing($project->url, SeoHelper::getDescription(), $project->image) !!}
                </div>
                {!! apply_filters(BASE_FILTER_PUBLIC_COMMENT_AREA, null, $project) !!}
            </div>
        </div>
    </div>
</section>
