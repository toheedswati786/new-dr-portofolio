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
        $page_title = "Home | Dr. Najmun Riyaz";
        $page_description = "Welcome to the official website of Dr. Najmun Riyaz, where healing meets hope.";
        $page_keywords = "home, dr najmun riyaz, psychiatrist, zehen kashmir, zehen global";
        break;

    case 'service':
        $page_title = "Our Services | Dr. Najmun Riyaz";
        $page_description = "Explore mental health services including therapy, medication management, and emotional wellness programs.";
        $page_keywords = "therapy, mental health services, psychiatrist, counseling, trauma healing";
        break;

    case 'courses':
        $page_title = "Courses | Dr. Najmun Riyaz";
        $page_description = "Learn with our professional online courses focused on emotional intelligence, parenting, and trauma recovery.";
        $page_keywords = "online courses, parenting course, trauma course, mental health learning";
        break;

    case 'books':
        $page_title = "E-Books | Dr. Najmun Riyaz";
        $page_description = "Access insightful E-Books on emotional healing and personal growth by Dr. Najmun Riyaz.";
        $page_keywords = "ebooks, self help books, mental health books, psychiatry";
        break;

    case 'contact':
        $page_title = "Contact | Dr. Najmun Riyaz";
        $page_description = "Get in touch with Dr. Najmun Riyaz for inquiries, collaborations, or mental health support.";
        $page_keywords = "contact psychiatrist, reach dr najmun riyaz, therapy booking";
        break;

    default:
        // For any other page
        $page_title = "Dr. Najmun Riyaz | Mental Health Awareness";
        $page_description = "Empowering minds through psychiatry, compassion, and awareness.";
        $page_keywords = "psychiatrist, therapy, trauma, awareness";
        break;
}
?>



