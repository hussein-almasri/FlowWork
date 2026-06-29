# 🚀 FlowWork

<div align="center">

### **A Modern Project Management System**

*A lightweight Laravel-based web application for managing projects, tasks, teams, and deadlines.*

![Laravel](https://img.shields.io/badge/Laravel-12-FF2D20?style=for-the-badge&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php)
![SQLite](https://img.shields.io/badge/SQLite-Database-003B57?style=for-the-badge&logo=sqlite)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-v4-06B6D4?style=for-the-badge&logo=tailwindcss)

</div>

---

# 📖 About

**FlowWork** is a web-based **Project Management System** built using **Laravel 12**.

The project was developed as part of the **Software Development** course at university, where our team designed and implemented a complete project management solution following software engineering principles.

FlowWork helps teams organize projects, manage tasks, assign members, and monitor progress through an intuitive dashboard and Kanban board.

---

# 👨‍💻 Development Team

This project was developed by:

- Hussein Almasri
- Sadeen
- Abdelmonem

---

# ✨ Features

## 🔐 Authentication

- User Registration
- User Login
- Secure Authentication
- Session Management

---

## 📊 Dashboard

- Project Statistics
- Task Statistics
- Completed Tasks
- Overdue Tasks
- Recent Activities
- Task Status Charts

---

## 📁 Project Management

- Create Projects
- Edit Projects
- Delete Projects
- Assign Team Members
- Project Descriptions

---

## ✅ Task Management

- Create Tasks
- Assign Tasks to Projects
- Priority Levels
- Due Dates
- Task Status
- Progress Tracking

---

## 👥 Team Management

- Add Team Members
- Edit Members
- Delete Members
- Assign Roles

---

## 📋 Kanban Board

- Drag & Drop Tasks
- To Do
- In Progress
- Done

---

## 📅 Calendar

- View Project Deadlines
- View Task Deadlines
- Deadline Tracking

---

## ⚙ Settings

- Update Profile
- Change Password
- User Preferences

---

## 📜 Activity Logs

- Track Project Updates
- Track Task Updates
- User Activity History

---

# 🚀 Why FlowWork?

✔ Clean MVC Architecture

✔ Responsive UI

✔ Laravel Best Practices

✔ SQLite Database

✔ Kanban Board

✔ Dashboard Analytics

✔ Team Collaboration

✔ Secure Authentication

---

# 🛠 Tech Stack

| Technology | Description |
|------------|-------------|
| Laravel 12 | PHP Framework |
| PHP 8.2 | Backend Language |
| SQLite | Database |
| Blade | Templating Engine |
| Tailwind CSS | UI Framework |
| Chart.js | Dashboard Charts |
| JavaScript | Frontend Interactions |
| Vite | Asset Bundler |

---

# 📸 Screenshots

## Dashboard

<p align="center">
<img src="screenshots/dashboard.png" width="800">
</p>

---

## Projects

<p align="center">
<img src="screenshots/projects.png" width="800">
</p>

---

## Tasks

<p align="center">
<img src="screenshots/tasks.png" width="800">
</p>

---

## Kanban Board

<p align="center">
<img src="screenshots/kanban.png" width="800">
</p>

---

## Calendar

<p align="center">
<img src="screenshots/calendar.png" width="800">
</p>

---

## Team Members

<p align="center">
<img src="screenshots/team.png" width="800">
</p>

---

# 🏛 Architecture

The project follows the **MVC (Model View Controller)** architecture.

```
User
 │
 ▼
Routes
 │
 ▼
Controllers
 │
 ▼
Models
 │
 ▼
SQLite Database
 │
 ▼
Blade Views
```

---

# 📂 Project Structure

```text
app/
├── Http/
│   └── Controllers/
├── Models/
├── Providers/

database/
├── migrations/
├── factories/
└── seeders/

resources/
├── views/
├── css/
└── js/

routes/
└── web.php

public/

storage/
```

---

# ⚙ Installation

Clone the repository

```bash
git clone https://github.com/hussein-almasri/FlowWork.git
```

Go to project

```bash
cd FlowWork
```

Install dependencies

```bash
composer install
```

Copy environment file

```bash
cp .env.example .env
```

Generate application key

```bash
php artisan key:generate
```

Run migrations

```bash
php artisan migrate
```

Install frontend dependencies

```bash
npm install
```

Run Vite

```bash
npm run dev
```

Start Laravel Server

```bash
php artisan serve
```

---

# ▶ Build

Frontend

```bash
npm run build
```

Run Tests

```bash
php artisan test
```

---

# 💾 Database

The project uses **SQLite** by default.

It can also be configured to use:

- MySQL
- PostgreSQL
- MariaDB

---

# 🎯 Learning Outcomes

This university project helped us practice:

- Software Development Lifecycle
- Team Collaboration
- MVC Architecture
- Database Design
- Authentication
- CRUD Operations
- Laravel Framework
- Project Planning
- Team Management Systems

---

# 📌 Future Improvements

- Notifications
- File Attachments
- Real Calendar View
- Dark Mode
- REST API
- Email Notifications
- Mobile Version

---

# 📄 License

This project was developed for educational purposes as part of the **Software Development** course.

---

# ❤️ Developed By

- Hussein Almasri
- Sadeen
- Abdelmonem

Software Development Course Project
