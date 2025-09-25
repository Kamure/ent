# Clinic Appointment System Structure

The Clinic Appointment System is a web-based application designed to manage appointments and patient records.
It allows patients to register, log in, book, view, reschedule and cancel appointments online, while doctors can manage their schedules and patient records. 
The system also provides administrative features for managing doctors, patients, and generating useful reports.

clinic-appointment-system/
 |
 ├── composer.json  
 ├── composer.lock 
 ├── vendor/                     # Dependency management
 |
 ├── db.php                      # Database connection
 ├── index.php 
 |
 ### Authentication Module
 ├── auth/  
 │     ├── register.php          # Registration form
 │     ├── register_process.php 
 │     ├── verify.php            # OTP verification form
 │     ├── verify_process.php  
 │     ├── login.php           
 │     ├── login_process.php 
 │     ├── logout.php 
### Appointment features 
 ├── appointments/ 
 │   ├── book.php       
 │   ├── view.php 
 │   ├── reschedule.php  
 │   ├── cancel.php 
### CRUD for patients 
 ├── patients/ 
 │   ├── add.php 
 │   ├── edit.php 
 │   ├── delete.php 
 │   ├── list.php 
### CRUD for doctors 
 ├── doctors/ 
 │   ├── doc_add.php 
 │   ├── doc_edit.php 
 │   ├── doc_delete.php 
 │   ├── doc_list.php 
### Payment Integration
 ├── payments/
 │   ├── initiate.php            # Start payment request
 │   ├── callback.php            # Handle confirmation
 │   ├── status.php              # Check transaction status
 ### Analytics & Exports 
 ├── reports/
 │   ├── generate_pdf.php 
 │   ├── generate_excel.php 
### Static files 
 ├── assets/ 
 │   ├── css/ 
 │       └── style.css 
 │   ├── js/ 
 │       └── script.js 
### Documentation
 └── README.md 
