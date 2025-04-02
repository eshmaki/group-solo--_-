<!-- book section -->
<?php
$doctors = [
    'Dr. John Doe',
    'Dr. Jane Smith',
    'Dr. James Brown'
];

$departments = [
    'Cardiology',
    'Neurology',
    'Pediatrics'
];
?>
<section class="book_section layout_padding">
  <div class="container">
    <div class="row">
      <div class="col">
        <form action="confirm_appointment.php" method="POST">
          <h4>
            BOOK <span>APPOINTMENT</span>
          </h4>
          <div class="form-row">
            <div class="form-group col-lg-4">
              <label for="inputPatientName">Patient Name </label>
              <input type="text" class="form-control" id="inputPatientName" name="patient_name" placeholder="">
            </div>
            <div class="form-group col-lg-4">
              <label for="inputDoctorName">Doctor's Name</label>
              <select name="doctor_name" class="form-control wide" id="inputDoctorName">
                <?php foreach ($doctors as $doctor): ?>
                  <option value="<?php echo $doctor; ?>"><?php echo $doctor; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group col-lg-4">
              <label for="inputDepartmentName">Department's Name</label>
              <select name="department_name" class="form-control wide" id="inputDepartmentName">
                <?php foreach ($departments as $department): ?>
                  <option value="<?php echo $department; ?>"><?php echo $department; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-lg-4">
              <label for="inputPhone">Phone Number</label>
              <input type="number" class="form-control" id="inputPhone" name="phone" placeholder="XXXXXXXXXX">
            </div>
            <div class="form-group col-lg-4">
              <label for="inputSymptoms">Symptoms</label>
              <input type="text" class="form-control" id="inputSymptoms" name="symptoms" placeholder="">
            </div>
            <div class="form-group col-lg-4">
              <label for="inputDate">Choose Date </label>
              <input type="date" class="form-control" id="inputDate" name="appointment_date">
            </div>
          </div>
          <div class="btn-box">
            <button type="submit" class="btn">Submit Now</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
