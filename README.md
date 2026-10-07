# Web Wizard 2024 — Anonymous Complaint System

A First-Year B.Sc. IT project developed for **Web Wizard**, part of **Code Carnival 2024**, organized by **DevClub, TRCAC**.

## 🏆 Achievement

🥈 **2nd Place — Web Wizard, Code Carnival 2024**

## 👨‍💻 Team

- **Soujas Mane**
- **Anwar Khan**

## 📌 About the Project

This project recreates parts of the college website experience and explores an Anonymous Complaint System: a way for students to share concerns without entering their name on the feedback form.

In the existing implementation, the feedback form asks for a department and feedback text and posts them to a PHP handler backed by MySQL. The site also contains student/teacher login pages leading to the feedback dashboard. Anonymity was the project's goal; this archived implementation has not been audited to guarantee anonymity in deployment, server logs, or database operations.

## ✨ Features

- College-inspired landing page with a background video, image slider, and navigation.
- Informational pages about the feedback form, the project guide, and the team.
- Junior- and degree-college login forms for students and teachers.
- Feedback submission by department, handled by PHP and stored in MySQL.
- Contact form for sending a name, email, phone number, subject, and message to a PHP/MySQL handler.
- College contact/location information and an embedded map.

## 🛠️ Technologies Used

- HTML
- CSS
- JavaScript and jQuery
- PHP with MySQLi
- MySQL
- Bootstrap (the pages reference Bootstrap 4.5.2 and 5.3.0-alpha1)

Some styles and scripts are loaded from external CDNs and the college website, so those parts of the pages require an internet connection.

## 📂 Project Structure

```text
.
├── CSS/                       # Landing-page stylesheet
├── IMAGES/                    # College and feedback-page artwork
├── team_photos/               # Team images
├── index.html                 # Welcome page
├── secondpage.html            # Main college/feedback landing page
├── dashboard.html             # Feedback form
├── about_form.html            # About the feedback form
├── GuidedBy.html              # Project guide information
├── TEAM.html                  # Team page
├── contactus.html             # Contact form and map
├── loginpage*.html            # Student and teacher login forms
├── feedback_submit.php        # Feedback submission handler
├── contact.php                # Contact form handler
└── method1.php–method4.php    # Login handlers
```

The project also includes image and video assets in the repository root.

## 🚀 Getting Started

### Requirements

- PHP with the MySQLi extension
- A MySQL server
- A browser

### Run the website

1. Place or clone the project into a local folder.
2. From that folder, start PHP's built-in development server:

   ```sh
   php -S 127.0.0.1:8000
   ```

3. Open [http://127.0.0.1:8000/index.html](http://127.0.0.1:8000/index.html).

The PHP form and login handlers require MySQL databases and tables. No database schema or SQL dump is included, so obtain the original schema/data setup before expecting those flows to work. The existing PHP files also contain local database connection settings; do not put production credentials in this public repository. The HTML pages can be viewed without MySQL, but that does not make the PHP-backed forms functional.

## 🎯 Purpose

The project explored how a college website could provide a channel for students to share feedback and concerns. Building it brought together page layout and styling, navigation, form handling, and connecting PHP pages to a MySQL database as a collaborative first-year project.

## 🏆 Competition

**Event:** Web Wizard  
**Competition:** Code Carnival 2024  
**Organizer:** DevClub, TRCAC  
**Result:** 2nd Place

## 👥 Contributors

**Soujas Mane**  
**Anwar Khan**

This was a collaborative First-Year B.Sc. IT project.

## 📸 Screenshots

Screenshots can be added here later.

<!-- Add screenshots with Markdown image links when available. -->