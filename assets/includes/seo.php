<?php
// Default SEO values
$page_title = "Dr. Najmun Riyaz | Mental Health & Wellness";
$page_description = "Learn, heal, and grow with Dr. Najmun Riyaz through psychiatry, therapy, and mental health education.";
$page_keywords = "psychiatrist, therapy, trauma, mental health, Zehen Global, Zehen Kashmir";

// Check which page is being loaded and set SEO accordingly
$current_page = basename($_SERVER['REQUEST_URI']);

switch ($current_page) {
    case '':
    case '/':
    case 'index':
    case 'home':
        $page_title = "Home | Dr. Najmun Riyaz";
        $page_description = "Welcome to the official website of Dr. Najmun Riyaz, where healing meets hope.";
        $page_keywords = "home, dr najmun riyaz, psychiatrist, zehen kashmir, zehen global";
        break;

    case 'about':
        $page_title = "About | Dr. Najmun Riyaz";
        $page_description = "Learn more about Dr. Najmun Riyaz, her background, and her approach to mental health and wellness.";
        $page_keywords = "about, biography, dr najmun riyaz, psychiatrist, mental health";
        break;

    case 'service':
    case 'services':
        $page_title = "Our Services | Dr. Najmun Riyaz";
        $page_description = "Explore mental health services including therapy, medication management, and emotional wellness programs.";
        $page_keywords = "therapy, mental health services, psychiatrist, counseling, trauma healing";
        break;

    case 'courses':
    case 'course':
        $page_title = "Courses | Dr. Najmun Riyaz";
        $page_description = "Learn with our professional online courses focused on emotional intelligence, parenting, and trauma recovery.";
        $page_keywords = "online courses, parenting course, trauma course, mental health learning";
        break;

    case 'books':
        $page_title = "E-Books | Dr. Najmun Riyaz";
        $page_description = "Access insightful E-Books on emotional healing and personal growth by Dr. Najmun Riyaz.";
        $page_keywords = "ebooks, self help books, mental health books, psychiatry";
        break;

    case 'blog':
    case 'blogs':
        $page_title = "Blog | Dr. Najmun Riyaz";
        $page_description = "Read the latest articles on mental health, wellness, and psychiatry from Dr. Najmun Riyaz.";
        $page_keywords = "blog, mental health articles, psychiatry blog, wellness tips";
        break;

    case 'videos':
        $page_title = "Videos | Dr. Najmun Riyaz";
        $page_description = "Watch educational and inspiring videos on mental health by Dr. Najmun Riyaz.";
        $page_keywords = "videos, mental health videos, youtube, dr najmun riyaz videos";
        break;

    case 'contact':
        $page_title = "Contact | Dr. Najmun Riyaz";
        $page_description = "Get in touch with Dr. Najmun Riyaz for inquiries, collaborations, or mental health support.";
        $page_keywords = "contact psychiatrist, reach dr najmun riyaz, therapy booking";
        break;

    case 'not-available':
        $page_title = "Unavailable | Dr. Najmun Riyaz";
        $page_description = "Dr. Najmun Riyaz is currently unavailable. Please check back later.";
        $page_keywords = "unavailable, waitlist, contact";
        break;

    default:
        // For any other page
        $page_title = "Dr. Najmun Riyaz | Mental Health Awareness";
        $page_description = "Empowering minds through psychiatry, compassion, and awareness.";
        $page_keywords = "psychiatrist, therapy, trauma, awareness";
        break;
}

// Structured Data (JSON-LD) for Local Business / Physician
$schema_data = [
    "@context" => "https://schema.org",
    "@type" => "Physician",
    "name" => "Dr. Najmun Riyaz",
    "image" => "https://drnajmunriyaz.com/assets/images/about/about_image_1-min.jpg",
    "url" => "https://drnajmunriyaz.com",
    "telephone" => "", // Add phone if available
    "description" => "Board-certified psychiatrist and trauma-informed mentor supporting people to rediscover calm, clarity, and self-respect.",
    "address" => [
        "@type" => "PostalAddress",
        "addressLocality" => "New York", // Example: Update with real location if known, or generic
        "addressCountry" => "US"
    ],
    "sameAs" => [
        "https://www.facebook.com/",
        "https://www.instagram.com/",
        "https://www.youtube.com/"
    ],
    "priceRange" => "$$"
];
$json_ld = json_encode($schema_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
