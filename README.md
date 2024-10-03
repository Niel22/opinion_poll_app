# Online Campus Opinion Poll System

## Table of Contents
- [Project Overview](#project-overview)
- [Aim and Objectives](#aim-and-objectives)
- [Significance of the Study](#significance-of-the-study)
- [Scope of the Study](#scope-of-the-study)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Project Overview
The Online Campus Opinion Poll System is designed to facilitate higher education institutions in gathering, analyzing, and utilizing feedback from students, faculty, and staff effectively. The system is secure, efficient, and user-friendly, encouraging participation and enhancing decision-making processes.

## Aim and Objectives
The aim of this project is to design and implement a secure, efficient, and user-friendly online campus opinion poll system.

### Objectives
- Develop an intuitive and user-friendly interface for students, faculty, and staff to easily participate in polls.
- Conduct a comprehensive literature review on best practices for opinion polling and online feedback systems.
- Implement a secure database system to store poll data with encryption and access control mechanisms.
- Create a real-time data analysis module for immediate insights into poll results.
- Design a flexible poll management module for easy creation, editing, and publishing of polls.
- Ensure cross-platform compatibility for seamless access on desktops, tablets, and smartphones.
- Integrate a notification system to inform users of new polls or upcoming deadlines.
- Implement user authentication and access control for managing polls securely.
- Create a backup and recovery system to protect against data loss.

## Significance of the Study
- **Enhanced Decision-Making**: Provides real-time feedback for informed decisions on academic programs and policies.
- **Increased Participation**: Online accessibility encourages broader feedback from the campus community.
- **Cost and Time Efficiency**: Digital platform reduces costs and speeds up data collection and analysis.
- **Data Accuracy and Integrity**: Automated collection minimizes human error and enhances data reliability.
- **Scalability and Flexibility**: The system adapts to evolving institutional needs and can be expanded with new features.
- **Improved Stakeholder Engagement**: Fosters a sense of involvement among students, faculty, and staff.

## Scope of the Study
The scope of this study is limited to the design and implementation of an online campus opinion poll system for Federal Polytechnic, Ilaro, Ogun State. It focuses on:
- Developing a web-based platform for students to share opinions on campus issues.
- Creating a secure and anonymous interface for responding to surveys.
- Designing a user-friendly interface for administrators to post questions and view results.
- Testing and evaluating the system with a pilot group at Federal Polytechnic, Ilaro, Ogun State.

## Installation
1. **Clone the Repository**
   ```bash
   git clone https://github.com/yourusername/online-campus-opinion-poll-system.git
   cd online-campus-opinion-poll-system

1. **Install Dependencies Make sure you have Composer installed, then run:**
   ```bash
   composer install


1. **Environment Setup Copy the .env.example file to .env and set up your database credentials.**
   ```bash
   cp .env.example .env


1. **Generate Application Key**
   ```bash
   php artisan key:generate


1. **Migrate the Database**
   ```bash
   php artisan migrate


1. **Run the Application**
   ```bash
   php artisan serve

Access the application at http://localhost:8000.

This project is licensed under the MIT License. See the LICENSE file for details.

