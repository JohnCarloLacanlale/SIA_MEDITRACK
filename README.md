                                                                " MediTrack: Student Medical Records System "

**Overview**
    Welcome to MediTrack, a comprehensive medical records system designed specifically for students. This system aims to streamline the management of student health information, ensuring quick access to vital medical records while maintaining privacy and compliance with regulatory standards.

 **Process**

### Step 1: HTML Head Section
- The code starts with the head section, which includes meta tags for character set and viewport settings.
- The title of the page is set to "Clinic System - Home."
- External stylesheet (`dbclinic.css`) is linked.
- Inline styles for the body and a container with a background image are defined.

### Step 2: PHP and HTML Structure
- PHP includes for the header and database connection are added.
- A container with a semi-transparent background is created (`bg-container`).
- Inside the container, there's a form for Nurse Login with input fields for username and password.
- The form calls the `loginAdmin()` function when the login button is clicked.

### Step 3: JavaScript Function (`loginAdmin()`)
- The `loginAdmin()` function retrieves the entered username and password.
- If the credentials match ("admin" for both), it redirects to "Nurse.php"; otherwise, it displays an alert.

### Step 4: Second HTML Document
- Another HTML document begins with its head section, including Bootstrap CSS.
- A simple dashboard page for students is displayed within a container.

### Step 5: Closing Tags
- The closing tags for the second HTML document are added, including the Bootstrap JavaScript CDN.

### Step 6: Nurse Registration Form
- Another PHP section is included for nurse registration.
- Data is collected from the form using `$_POST` after submission.
- An SQL query is constructed to insert nurse information into the database.

### Step 7: Nurse Registration Form 
- A form is created for nurse registration with input fields for Nurse ID, Firstname, Lastname, Address, and Department.
- The form submits to itself, and upon submission, the data is inserted into the database.

### Step 8: Nurse Add_Account Form (Continued)
- The PHP section continues to handle database insertion and redirects to "Nurse.php" upon successful insertion.

### Step 9: Nurse Record View 
- Another PHP section is included for viewing nurse records.
- A SQL query is constructed to retrieve nurse records based on the provided `record_ID`.

### Step 10: Nurse Record View 
- The HTML structure includes a table to display nurse records with various details.
- A button to add/edit records is included, and a Bootstrap modal is set up for editing records.

### Step 11: Nurse Record View 
- A JavaScript script is included to toggle the visibility of the edit form in the modal.

### Step 12: Nurse Record Edit
- The PHP section for editing nurse records is included.
- The form data is collected, and an SQL query is constructed to update the record in the database.

### Step 13: Nurse Record Edit 
- JavaScript is included to handle the toggle functionality of the edit form in the modal.

### Step 14: Closing Tags
- Closing HTML and PHP tags are added to complete the document.

**Support and Feedback**

  If you encounter any issues or have suggestions for improvement, please reach out to our support team at support@meditrack.com. We value your feedback and are committed to continuously enhancing the system to meet your institution's evolving needs.

  Thank you for choosing MediTrack! We look forward to supporting your institution in maintaining the health and well-being of your students.If you encounter any issues or have suggestions for improvement, please reach out to our support team at support@meditrack.com. We value your feedback and are committed to continuously enhancing the system to meet your institution's evolving needs.

