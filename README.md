# Library Management System 

## Library Admin and User Panel (Admin LTE panel) using Php 7.2, Mysqli, Bootstrap 4. 

### Features:
### Librarian – Admin Panel:
1.	Admin-Librarian Authentication: Login and logout with sessions
2.  Librarian can login as Admin and approve new student request to login into LMS. 
3.  Librarian can perform following regarding Students: 
    - List All Students
    - Edit Student details
    - Delete Student
    - Search student
4.  Librarian can perform following regarding books: 
    - List All Books
    - Add New Book with image
    - View book details
    - Edit and update existing book with image
    - Delete book with image from database
    - Search Books with image
    - Issue books to students
    - Display the list of students who have particular title books
    - Send message to students.

### Student – User Panel:
1.	Student Authentication: Register, Login and logout with sessions.
2.  Student can register in LMS. After registration student account has been verified and activated by admin-librarian.
3.  After admin-librarian's approval, user-student can login into LMS.
4.  Student can update his profile
5.	Student can search book
6.	Student will get message notification when Librarian send the message
7.  Student can reply to the librarian's message

MYSQL dump of the database named lms.sql is provided.  

### Prerequisites

•	XAMPP (start MySQL, Apache service)
•	Phpmyadmin 
•	Php (PHP version 7.2)
•	Text editor (Visual Studio Code)
