   
   <section id="reservation table" class="reservation table">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Reservation table</h2>
        </div>

        <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://cdn.dribbble.com/users/5669607/screenshots/14242493/media/58ccb6d13133e0d993d32b6cc3e2d7f7.gif" frameborder="0" allowfullscreen></iframe>
        </div>

           <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <div><strong>Mon-Sat:</strong> 11AM - 23PM;
                  <strong>Sunday:</strong> Closed
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->
          <br>
        </div>

        <div class="appointment-w3">
		<form action="#" method="post">
			<div class="personal">
			
				<div class="main">
					<div class="form-left-w3l">
                    <label for="appt">name</label>
						<input type="text" class="top-up" name="name" placeholder="Name" required="">
					</div><br>
					<div class="form-left-w3l">
                    <label for="appt">email</label>
						<input type="email" name="email" placeholder="Email" required="">
					</div><br>
					<div class="form-right-w3ls ">
                    <label for="appt">phone</label>

						<input class="buttom" type="text" name="phone number" placeholder="Phone Number" required="">
						<div class="clearfix"></div>
					</div>
				</div>
				
			</div>
            <br>
			<div class="information">
				
				
				<div class="main">

					
                <label for="appt">Checkin time</label>

                 <input type="time" data-bvalidator="required,minlen[4],maxlen[8]" id="appt" name="appt"
                  min="09:00" max="18:00" required>

                </div>
               
				</div>
                <br>
				
				<div class="main">

					<div class="form-left-w3l">
						<select class="form-control">
					<option value="">Number of Adults</option>
						<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>and more</option>
					</select>
					</div><br>
					<div class="form-right-w3ls">
						<select class="form-control">
					<option value="">Number of Children</option>
						<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>and more</option>
					</select>
					</div><br>
				</div>
				
			</div>
			
			
			<div class="btnn">
				<input type="submit" value="Reserve a Table">
			</div>
		</form>
	</div>
      </div>
    </section>