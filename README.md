# Clinic appointment system structure

The Clinic Appointment System is a web-based application designed to manage appointments and patient records.
It allows patients to register, log in, book, view, reschedule and cancel appointments online, while doctors can manage their schedules and patient records. 
The system also provides administrative features for managing doctors, patients, and generating useful reports.

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
### Book appointment 
 │ ├── book.php 
### View appointments 
 │ ├── view.php 
### Reschedule appointments 
 │ ├── reschedule.php 
### Cancel appointments 
 │ ├── cancel.php 
### CRUD for patients 
 │ ├── patients/ 
 │ ├── add.php 
 │ ├── edit.php 
 │ ├── delete.php 
 │ ├── list.php 
### CRUD for doctors 
 │ ├── doctors/ 
 │ ├── add.php 
 │ ├── edit.php 
 │ ├── delete.php 
 │ ├── list.php 
 │ ├── reports/ 
### For later sprints (analytics & exports) 
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