Clinic appointment system structure



clinic-appointment-system/

 │ ├── db.php # Database connection (MariaDB)

 │ ├── index.php # Landing page (redirect to login/register)
 
 │ ├── auth/ # Authentication module
  
 │ ├── register.php # Registration form 

 │ ├── register_process.php 

 │ ├── verify.php # OTP verification form 

 │ ├── verify_process.php 

 │ ├── login.php # Login form 

 │ ├── login_process.php 

 │ ├── logout.php 

 │ ├── appointments/ # Appointment features 

 │ ├── book.php # Book appointment 

 │ ├── view.php # View appointments 

 │ ├── cancel.php # Cancel appointments 

 │ ├── patients/ # CRUD for patients 

 │ ├── add.php │ ├── edit.php │ ├── delete.php │ ├── list.php 

 │ ├── doctors/ # CRUD for doctors 

 │ ├── add.php │ ├── edit.php │ ├── delete.php │ ├── list.php │ ├── reports/ # For later sprints (analytics & exports) │ ├── generate_pdf.php │ ├── generate_excel.php 

 │ ├── assets/ # Static files │ ├── css/ │ │ └── style.css │ ├── js/ │ │ └── script.js 

 │ └── README.md # Documentation