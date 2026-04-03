# 📝 Full Stack Blogging Platform (PHP + MySQL)

> A beginner-friendly full-stack blogging system with authentication and CRUD functionality.

---

## 🚀 Features

* 🔐 User Registration & Login
* ✍️ Create Blog Posts
* 📖 View All Posts
* ❌ Delete Posts
* 🔒 Secure Password Hashing
* 📱 Responsive Design

---

## 🛠️ Tech Stack

* **Frontend:** HTML, CSS, JavaScript
* **Backend:** PHP
* **Database:** MySQL

---

## 🌐 Live Demo

*Not deployed yet*

---

## 📂 Project Structure

```
blog-project/
│
├── index.php
├── create.php
├── login.php
├── register.php
├── delete.php
├── db.php
│
├── css/
│   └── style.css
│
└── js/
    └── script.js
```

---

## ⚙️ Installation & Setup

### 1️⃣ Clone Repository

```
git clone https://github.com/your-username/blogging-platform.git
```

---

### 2️⃣ Move Project

Copy the project folder into:

```
C:\xampp\htdocs\
```

---

### 3️⃣ Start Server

* Start **Apache** and **MySQL** from XAMPP

---

### 4️⃣ Create Database

Open **phpMyAdmin** and create a database:

```
blog_db
```

Run the following SQL:

```
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(255)
);

CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    content TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

### 5️⃣ Run Project

Open your browser and go to:

```
http://localhost/blog-project
```

---

## 🎯 Learning Outcomes

* Understanding of **CRUD operations**
* Working with **PHP & MySQL integration**
* Basic **authentication system**
* Frontend & Backend connectivity

---

## 📌 Future Improvements

* ✏️ Edit Blog Posts
* ❤️ Like & Comment System
* 🔍 Search Functionality
* 🎨 UI Enhancements (Bootstrap / Tailwind)
* 🔐 SQL Injection Prevention (Prepared Statements)

---

## 👨‍💻 Author

Developed as a **college project** to learn full-stack web development.

---

## ⭐ Support

If you like this project, give it a ⭐ on GitHub!
