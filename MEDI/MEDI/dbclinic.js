function loginAdmin() {
    // Implement admin login logic here
    // For simplicity, let's redirect to admin.php
    window.location.href = "admin.php";
}

function showStudentInfo() {
    window.location.href = "prescription.php";
    document.getElementById("studentInfo").style.display = "block";
    document.getElementById("medicalRecord").style.display = "none";
}

function showMedicalRecord() {
    document.getElementById("medicalRecord").style.display = "block";
    document.getElementById("studentInfo").style.display = "none";
}
function openMedicalHistory() {
    var medicalHistoryContainer = document.getElementById("medicalHistoryContainer");
    medicalHistoryContainer.style.display = "block";
}

function openMedicalHistory() {
    document.querySelector('.header').style.display = 'none';
    document.querySelector('.medical-history-button').style.display = 'none';
    document.querySelector('.medical-history').style.display = 'block';
}

function goBack() {
    document.querySelector('.header').style.display = 'block';
    document.querySelector('.medical-history-button').style.display = 'block';
    document.querySelector('.medical-history').style.display = 'none';
}

function openOption() {
    window.location.href = "admin.php";
    document.querySelector('.header').style.display = 'none';
    document.querySelector('.Option-button').style.display = 'none';
    document.querySelector('.Option').style.display = 'block';
}

function goBack() {
    document.querySelector('.header').style.display = 'block';
    document.querySelector('.medical-history-button').style.display = 'block';
    document.querySelector('.medical-history').style.display = 'none';
}

function saveMedicalHistory() {
    var nurseInCharge = document.getElementById("nurseInCharge").value;
    var dateAdmitted = document.getElementById("dateAdmitted").value;
    var result = document.getElementById("result").value;

   
    console.log("Medical History Saved:");
    console.log("Nurse in Charge: " + nurseInCharge);
    console.log("Date Admitted: " + dateAdmitted);
    console.log("Result: " + result);
}
