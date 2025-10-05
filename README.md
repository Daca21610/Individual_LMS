School Student Management System
Project Overview
This project, developed as part of HDSE 264 – Computer Project II, aims to create a comprehensive School Student Management System. The system is designed to streamline and centralize administrative and academic processes in educational institutions across Sri Lanka, addressing the lack of appropriate software solutions for managing operations in schools with over 4.2 million students and 235,924 teachers (as of 2021 data).

Student: D.M.C.D.B Dissanayaka (Registration No: CSE 23346)
Supervisor: W.M.L.N Wanninayake
Project Approval: Lakmini Wanninayake

Objective
The system enhances efficiency, accuracy, and communication within schools by providing a platform for effective student management, attendance tracking, academic monitoring, and more.
Scope

Student Information Management
Attendance Tracking
Academic Performance Monitoring
Parent-Teacher Communication
Library Management
Exam and Assessment Management
User-Friendly Interface

Functional Requirements

User Authentication and Authorization
Student Profile Management
Attendance Tracking
Grading System
Class Scheduling and Timetabling
Parent-Teacher Communication
Library Management
Fee Management (for Private Fields only)
Report Generation
Communication and Notification
Search Functionality

Non-Functional Requirements

Performance
Scalability
Reliability
Security
Usability and User Experience
Data Backup and Recovery
Maintainability
Interoperability
Response Time
Training and Support

Technologies Used

Frontend: HTML, CSS (Bootstrap), JavaScript
Backend: PHP
Database: MySQL

File Structure
SchoolManagementSystem/
├── /css/
│   ├── style.css          # Custom CSS with Bootstrap integration
│   └── responsive.css     # Responsive design
├── /js/
│   ├── script.js          # General JavaScript
│   └── dashboard.js       # Dashboard-specific scripts
├── /php/
│   ├── config.php         # Database connection
│   ├── auth.php           # Authentication logic
│   └── functions.php      # Reusable PHP functions
├── /pages/
│   ├── /auth/
│   │   ├── login.html     # Login page
│   │   └── logout.php     # Logout handler
│   ├── /dashboard/
│   │   ├── index.html     # Dashboard
│   │   └── notifications.php # Notification center
│   ├── /students/
│   │   ├── student_list.html    # List of students
│   │   ├── add_student.php      # Add student form
│   │   ├── edit_student.php     # Edit student details
│   │   └── view_student.php     # View student profile
│   ├── /attendance/
│   │   ├── attendance_tracker.html # Attendance overview
│   │   └── mark_attendance.php  # Mark attendance form
│   ├── /grades/
│   │   ├── grades_overview.html # Grades summary
│   │   └── enter_grades.php     # Enter grades form
│   ├── /schedule/
│   │   ├── schedule_manager.html # Timetable management
│   │   └── view_timetable.php   # View timetable
│   ├── /communication/
│   │   ├── messages.html        # Message inbox
│   │   └── send_message.php     # Send message form
│   ├── /library/
│   │   ├── library_catalog.html # Book catalog
│   │   └── borrow_return.php    # Borrow/return form
│   ├── /exam/
│   │   ├── exam_schedule.html   # Exam schedule
│   │   └── create_exam.php      # Create exam form
│   ├── /reports/
│   │   ├── report_generator.html # Report selection
│   │   └── generate_report.php  # Generate report
│   └── /search/
│       └── search_results.php   # Search interface
├── /includes/
│   ├── header.php           # Common header
│   └── footer.php           # Common footer
├── /assets/
│   ├── logo.png             # School logo
├── database.sql             # Database schema
└── README.md                # This file

Setup Instructions

Clone the Repository:
git clone <repository-url>
cd SchoolManagementSystem


Install Dependencies:

Ensure a web server with PHP and MySQL is set up (e.g., XAMPP or WAMP).
Bootstrap is loaded via CDN, no local installation needed.


Database Setup:

Import database.sql into your MySQL server to create the school_db database.
Update config.php with your database credentials if different from the default (root, no password, localhost).


Run the Application:

Start your web server (e.g., Apache in XAMPP).
Access the application via http://localhost/SchoolManagementSystem/pages/auth/login.html.


Development:

Edit HTML files in /pages, CSS in /css, JavaScript in /js, and PHP in /php.
Use header.php and footer.php for consistent layouts.



Usage

Log in with provided credentials (to be defined in auth.php).
Navigate through the dashboard to manage students, attendance, grades, etc.
Generate reports and communicate with parents/teachers as needed.

Future Improvements

Implement secure authentication with password hashing.
Add mobile app integration for better accessibility.

Contact

Student: D.M.C.D.B Dissanayaka (CSE 23346)
Supervisor: W.M.L.N Wanninayake
