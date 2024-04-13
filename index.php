<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ACE REGISTRATION</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="icon" href="./favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">

  <style>
    form  {
      border: 3px solid black;
      padding: 20px;
      border-radius: 20px;
      backdrop-filter: blur(10px); /* Optional: Add a blur effect to the background */
    }

    .design {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-color: blue;
      text-align: center;
    }

    .transparent-bg {
      background-color: rgba(255, 255, 255, 0.5); /* Adjust the transparency as needed */
    }
    body {
      background-image: url('back1.jpg');
      background-size: cover;
      background-repeat: no-repeat;
    }
    .navbar {
  background-color: rgba(255, 255, 255, 0); /* Transparent background */
  backdrop-filter: blur(10px); /* Optional: Add a blur effect to the background */
  border: 2px solid black; /* Add a border to make it thicker */
  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.6); /* Add a shadow for a 3D effect */
}


  .rw {
  font-size: 50px;
  color: white;
  font-family: 'Agdasima', sans-serif; /* Specify the font family correctly */
  font-weight: bold; /* Increase the font weight to make it bolder */


    }

    @import url('https://fonts.googleapis.com/css2?family=Agdasima:wght@400;700&family=Noto+Sans+JP:wght@300;400&family=Oswald:wght@500&family=Poppins:wght@300;700&family=Roboto+Slab:wght@600&family=Roboto:wght@700&family=Ubuntu:ital@0;1&display=swap');  </style>
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

  <nav class="navbar navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="SRKR.png" alt="Logo" width="100" height="99" class="d-inline-block align-text-top">
      </a>
      <div class="Brand">
        <B style="color:black"> <h1 class="rw" style="color:black">ASSOCIATION OF COMPUTER ENGINEERS</h1></B>
      </div>
      <div>
        <a class="navbar-brand" href="#">
          <img src="ace.png" alt="Logo" width="100" height="99" class="d-inline-block align-text-top">
        </a>
      </div>
    </div>
    <div>
    </div>
  </nav>
  <div class="centered-form">
    <div class="container mt-5">
      <div class="desgin">
        <h1 style="text-align: center; color:black; background-color: #0D6EFD; padding: 10px 20px; border-radius: 20px;">REGISTRATION FORM</h1>
      </div>
      <form action="server.php" method="post" onsubmit="return validateForm();" style="font-size:25px;">
        <div class="mb-3">
          <label for="name" class="form-label"  style="color: black;">Name</label>
          <input type="text" class="form-control transparent-bg" id="name" name="name" placeholder="Enter your name">
        </div>
        <div class="mb-3">
          <label for="phone_number" class="form-label"  style="color: black;">Phone Number</label>
          <input type="tel" class="form-control transparent-bg" id="phone_number" name="phone_number" placeholder="Enter your phone number">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label"  style="color: black;">Email</label>
          <input type="email" class="form-control transparent-bg" id="email" name="email" placeholder="Enter your email">
        </div>
        <div class="mb-3">
          <label for="gender" class="form-label"  style="color: black;">Gender</label>
          <select class="form-select transparent-bg" id="gender" name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="department" class="form-label"  style="color: black;">Department</label>
          <select class="form-select transparent-bg" id="department" name="department">
            <option value="CSE">CSE</option>
            <option value="CIC">CIC</option>
            <option value="AIML">AIML</option>
          </select>
        </div>
           <div class="mb-3">
        <label class="form-label"  style="color: black;">Interests</label>
        <div class="form-check">
          <input class="form-check-input transparent-bg" type="checkbox" value="Dance" id="interests-dance" name="interests[]">
          <label class="form-check-label" for="interests-dance"  style="color: black;">
            Dance
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input transparent-bg" type="checkbox" value="Singing" id="interests-singing" name="interests[]">
          <label class="form-check-label" for="interests-singing"  style="color: black;">
            Singing
          </label>
        </div>
        <div class="form-check">
            
          <input class="form-check-input  transparent-bg" type="checkbox" value="ArtWork" id="interests-ArtWork" name="interests[]">
          <label class="form-check-label" for="interests-ArtWork"  style="color: black;">
            ArtWork
          </label>
        </div>
      
        <div class="form-check">
          <input class="form-check-input transparent-bg" type="checkbox" value="Public Affairs" id="interests-Public Affairs" name="interests[]">
          <label class="form-check-label" for="interests-Public Affairs"  style="color: black;">
            Public Affairs
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input transparent-bg" type="checkbox" value="Management" id="interests-Management" name="interests[]">
          <label class="form-check-label" for="interests-Management"  style="color: black;">
            Management
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input transparent-bg" type="checkbox" value="Support" id="interests-  Support" name="interests[]">
          <label class="form-check-label" for="interests-  Support"  style="color: black;">
            Support
          </label>
        </div>
       <div class="form-check">
          <input class="form-check-input transparent-bg" type="checkbox" value="Tech Support" id="interests-Tech Support" name="interests[]">
          <label class="form-check-label" for="interests-Tech Support"  style="color: black;">
            Tech Support
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input transparent-bg" type="checkbox" value="Anchoring" id="interests- Anchoring" name="interests[]">
          <label class="form-check-label" for="interests- Anchoring"  style="color: black;">
            Anchoring
          </label>
        </div>
      </div>

      <div class="mb-3">
        <label for="goodies" class="form-label">GOODIES</label>
        <select class="form-select transparent-bg" id="goodies" name="goodies">
          <option value="YES">YES</option>
          <option value="NO">NO</option>
        </select>
      </div> 
      <div class="mb-3">
        <label for="paymentMode" class="form-label">PAYMENT MODE</label>
        <select class="form-select transparent-bg" id="payment_mode" name="payment_mode">
          <option value="OFFLINE">OFFLINE</option>
          <option value="ONLINE">ONLINE</option>
        </select>
      </div> 
   
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
        </div>
       
  </div>

  <script>

    
    function validateForm() {
      const nameInput = document.getElementById("name");
      const phoneInput = document.getElementById("phone_number");
      const emailInput = document.getElementById("email");
      const genderSelect = document.getElementById("gender");

      // Basic validation logic
      if (!nameInput.value || !phoneInput.value || !emailInput.value || genderSelect.value === "") {
        alert("Please fill in all required fields.");
        return false;
      }
      const emailRegex = /^[a-zA-Z0-9._%+-]+@gmail\.com$/;
      if (!emailRegex.test(emailInput.value)) {
        alert("Please enter a valid Gmail address.");
        return false;
      }
      const phoneRegex = /^\d{10}$/;
      if (!phoneRegex.test(phoneInput.value)) {
        alert("Please enter a valid 10-digit phone number.");
        return false;
      }

      return true;
    }
  </script>
</body>
</html>

