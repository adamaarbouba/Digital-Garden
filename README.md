## 🌿 Digital Garden - A Simple Web Application for Personal Organization

### 🎯 Project Focus

**Digital Garden** is a secure, personal application where users can organize their thoughts and projects using color-coded **Themes** (categories) and attached **Notes**. The primary focus is on simplicity, customization, and user data privacy.

### 🛠️ Core Technology Stack

This project is built using proven web development components:

| Component | Technology Used | Role (Analogy) |
| :--- | :--- | :--- |
| **Backend** | PHP 8, MySQL | **The Brain and Security Guard:** The server-side logic that handles user authentication, form processing, and talking to the database. |
| **Database** | SQL, MySQL | **The Filing Cabinet:** Stores all the data (users, themes, notes) safely. **MySQL** is the system managing the cabinet, and **SQL** is the language used to ask it questions ("Find all my notes," "Save this new theme"). |
| **Frontend** | HTML, Tailwind, JS | **The User Interface:** Everything you see in your web browser—the forms, the buttons, the colors. **Tailwind** helps ensure the design looks professional and works well on phones (responsive design). |

### ✨ Key Features

1. **Private User Accounts:** Each user's data is isolated and protected by a login system.
2. **Full Data Management (CRUD):** You can **C**reate, **R**ead, **U**pdate, and **D**elete all of your Themes and Notes.
3. **Organization Tools:** Notes can be categorized by Theme, given an Importance level, and easily found using search filters.
4. **Security Built-in:** Validation of all data happens on both the browser (Frontend) and the server (Backend) to prevent errors and ensure security.

### 📁 Project Structure

The code is organized into separate files for clarity, making the project easier to maintain.

``` Plaintext
digital-garden/
├── config/
│   └── database.php
├── includes/
│   ├── auth.php
│   ├── footer.php
│   └── header.php
├── sql/
│   ├── schema.sql.php
├── index.php
├── register.php
├── login.php
├── dashboard.php
├── themes.php
└── notes.php
```
