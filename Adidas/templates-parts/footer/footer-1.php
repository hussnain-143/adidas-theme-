<!-- ========= Footer 1 (form area )========= -->
<div class="container-fluid m-0 footer-1-container mt-4"  style="display: <?php echo get_theme_mod('adidas_show_header_3', false) ? 'block' : 'none'; ?>;>
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-8">
        <h1>Get In Touch With Us</h1>
        <div class="footer-form">
          <form class="row g-3">
            <div class="col-md-6 d-flex flex-column">
              <label for="inputname" class="form-label">Name</label>
              <input type="text" class="form-control" id="inputname" placeholder="Name">
            </div>
            <div class="col-md-6 d-flex flex-column">
              <label for="inputemail" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputemail" placeholder="Email">
            </div>
            <div class="col-md-6 d-flex flex-column">
              <label for="inputState" class="form-label">State</label>
              <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>Punjab</option>
                <option>Sindh</option>
                <option>Khyber Pakhtunkhwa (KPK)</option>
                <option>Balochistan</option>
                <option>Islamabad (Federal Territory)</option>
                <option>Azad Jammu & Kashmir (AJK)</option>
                <option>Gilgit-Baltistan</option>
              </select>
            </div>
            <div class="col-md-6 d-flex flex-column">
              <label for="inputCity" class="form-label">City</label>
              <select id="inputCity" class="form-select">
                <option selected>Choose...</option>
                <option>Lahore (capital)</option>
                <option>Faisalabad</option>
                <option>Rawalpindi</option>
                <option>Multan</option>
                <option>Sialkot</option>
                <option>Gujranwala</option>
                <option>Karachi (capital)</option>
                <option>Hyderabad</option>
                <option>Sukkur</option>
                <option>Larkana</option>
                <option>Mirpurkhas</option>
                <option>Peshawar (capital)</option>
                <option>Mardan</option>
                <option>Abbottabad</option>
                <option>Swat</option>
                <option>Kohat</option>
                <option>Quetta (capital)</option>
                <option>Gwadar</option>
                <option>Sibi</option>
                <option>Khuzdar</option>
                <option>Islamabad (capital city)</option>
                <option>Muzaffarabad (capital)</option>
                <option>Mirpur</option>
                <option>Rawalakot</option>
                <option>Gilgit (capital)</option>
                <option>Skardu</option>
                <option>Hunza</option>
              </select>
            </div>

            <div class="form-group d-flex flex-column">
              <label for="gender" class="form-label">Gender</label>
              <div class="d-flex">
                <div class="form-check mx-3 px-1">
                  <input class="form-check-input" type="radio" name="gender" id="genderMale" checked>
                  <label class="form-check-label" for="genderMale">Male</label>
                </div>
                <div class="form-check mx-3 px-1">
                  <input class="form-check-input" type="radio" name="gender" id="genderFemale" >
                  <label class="form-check-label" for="genderFemale">Female</label>
                </div>
                <div class="form-check mx-3 px-1">
                  <input class="form-check-input" type="radio" name="gender" id="genderOther">
                  <label class="form-check-label" for="genderOther">Other</label>
                </div>
              </div>
            </div>

            <div class="col-md-12 d-flex flex-column">
              <label for="messageForm" class="form-label">Message</label>
              <textarea class="form-control" id="messageForm" rows="7" placeholder="Message"></textarea>
            </div>

            <div class="col-12">
              <button type="submit" class="footer-btn">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ======== footer 1 end -->