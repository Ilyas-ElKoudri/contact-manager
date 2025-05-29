# 📇 Contact Manager App

A simple web application to **manage contacts**: add, view, edit, and delete entries.  
Built using **PHP**, **MySQL**, and **Bootstrap**. Includes JavaScript confirmation for delete operations.

---

## 🚀 Features

- ➕ Add new contacts (Name, Surname, Phone, Email)
- 📝 Edit existing contact info
- 🗑️ Delete with JavaScript confirmation
- 📋 List all contacts in a table
- 💄 Clean UI using Bootstrap 5

---

## 🛠️ Tech Stack

| Layer        | Technology                       |
|--------------|----------------------------------|
| Frontend     | HTML, CSS, Bootstrap, JavaScript |
| Backend      | PHP                              |
| Database     | MySQL                            |
| Development  | VS Code, XAMPP                   |

---

## 🗂 Project Structure

---

## 💾 Database Setup

1. Open [phpMyAdmin](http://localhost/phpmyadmin)
2. Create a database: `contact_db`
3. Run the following SQL:
   ```sql
   CREATE TABLE contacts (
       id INT AUTO_INCREMENT PRIMARY KEY,
       nom VARCHAR(100) NOT NULL,
       prenom VARCHAR(100) NOT NULL,
       telephone VARCHAR(20) NOT NULL,
       email VARCHAR(100) NOT NULL
   );

