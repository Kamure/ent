# CLINIC APPOINTMENT SYSTEM STRUCTURE

The Clinic Appointment System is a web-based application designed to manage appointments and patient records.
It allows patients to register, log in, book, view, reschedule and cancel appointments online, while doctors can manage their schedules and patient records. 
The system also provides administrative features for managing doctors, patients, and generating useful reports.

### Dependency Management
 | ├── composer.json  
 │ ├── composer.lock 
 │ ├── vendor/
 
### Database connection (MariaDB)
 │ ├── db.php 
### Landing page (redirect to login/register)
 │ ├── index.php 
### Authentication module
 │ ├── auth/ 
### Registration form   
 │ ├── register.php 
 │ ├── register_process.php 
### OTP verification form 
 │ ├── verify.php 
 │ ├── verify_process.php 
### Login form 
 │ ├── login.php 
 │ ├── login_process.php 
 │ ├── logout.php 
### Appointment features 
 │ ├── appointments/   
 │ ├── book.php 
 │ ├── view.php 
 │ ├── reschedule.php 
 │ ├── cancel.php 
### CRUD for patients 
 │ ├── patients/ 
 │ ├── add.php 
 │ ├── edit.php 
 │ ├── delete.php 
 │ ├── list.php  
### CRUD for doctors 
 │ ├── doctors/ 
 │ ├── doc_add.php 
 │ ├── doc_edit.php 
 │ ├── doc_delete.php 
 │ ├── doc_list.php 
 ### Payment Module
 │ ├── payments/
 │ ├── initiate.php 
 │ ├── confirm.php 
 │ ├── history.php 
### Analytics & Exports
 │ ├── reports/ 
 │ ├── generate_pdf.php 
 │ ├── generate_excel.php 
### Static files 
 │ ├── assets/ 
 │ ├── css/ │ 
 │ └── style.css 
 │ ├── js/ │ 
 │ └── script.js 
### Documentation
 │ └── README.md 
