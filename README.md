# 🎓 Student Management System

A **web-based Student Management System** built with **PHP (Core)**, **MySQL**, and **Bootstrap 5**, featuring **CRUD operations, secure authentication, session management, and pagination**.  

---

## 🚀 Features

- 🔑 **Admin Authentication** – Secure login with `password_hash` & `password_verify`.  
- 👨‍🎓 **Student CRUD** – Add, update, delete, and view student records.  
- 📑 **Pagination** – Paginated student table for usability.  
- 📱 **Responsive UI** – Built with **Bootstrap 5**.  
- 🔒 **Session Management** – Prevents unauthorized access.  
- 🛡 **Secure Queries** – MySQLi prepared statements to prevent SQL injection.  
- 📂 **Sidebar Navigation** – Collapsible sidebar with quick links.  

---

## 📂 Project Structure

```text
student_mgmt/
├── config/             # Database connection (MySQLi)
├── public/             # Entry points: login.php, dashboard.php, student_form.php, logout.php
├── src/
│   ├── auth/           # Auth.php for login/logout/session
│   ├── controllers/    # StudentController.php
│   ├── models/         # Student.php
├── views/              # Templates (optional)
├── assets/             # CSS, JS (Bootstrap, custom)
├── logs/               # Error logs
└── README.md

## 🖼 Screenshots

![Login Screenshot](asset/screenshots/1.png)

