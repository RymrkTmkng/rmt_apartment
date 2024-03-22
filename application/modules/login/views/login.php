      <div class="row">
        <div class="col-md-12">
          <div id="loginsec">
            <div class="row min-vh-100 d-flex justify-content-center align-items-center">
              <div class="col-md-6">
                <h1 class="display-3 fw-bold ls-tight">
                  Welcome back <br />
                  <span class="secline">Home</span>
                </h1>
                <p style="color: white">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Eveniet, itaque accusantium odio, soluta, corrupti aliquam
                  quibusdam tempora at cupiditate quis eum maiores libero
                  veritatis? Dicta facilis sint aliquid ipsum atque?
                </p>
              </div>

              <div class="col-md-4 ">
                <div class="card logcard">
                  <div class="card-body py-5 px-md-5">
                    <form id="logform" method="post">
                      <!-- 2 column grid layout with text inputs for the first and last names -->
                      <div class="row">
                        <div class="col-12 mb-4">
                          <div class="form-outline">
                            <label class="form-label" for="form3Example1">Username</label>
                            <input type="text" id="loguname" name="Username" class="form-control" />

                          </div>
                        </div>
                        <div class="col-12 mb-4">
                          <div class="form-outline">
                            <label class="form-label" for="form3Example2">Password</label>
                            <input type="password" id="logpass" name="Password" class="form-control" />

                          </div>
                        </div>
                      </div>

                      <!-- Checkbox -->
                      <!-- <div class="form-check d-flex justify-content-center mb-4">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                  <label class="form-check-label" for="form2Example33">
                    Subscribe to our newsletter
                  </label>
                </div> -->

                      <!-- Submit button -->
                      <div class="col-12 text-center">
                        <button id="loginbtn" type="submit" class="btn btn-primary btn-block mb-4 text-center rounded-5 px-5">
                          Login
                        </button>
                      </div>


                      <!-- Register buttons -->
                      <div class="text-center mb-3 socbtns">
                        <p>or sign up with:</p>
                        <button type="button" class="btn btn-link btn-floating mx-1">
                          <i class="bi bi-facebook"></i>
                        </button>

                        <button type="button" class="btn btn-link btn-floating mx-1">
                          <i class="bi bi-google"></i>
                        </button>

                        <button type="button" class="btn btn-link btn-floating mx-1">
                          <i class="bi bi-twitter-x"></i>
                        </button>

                        <button type="button" class="btn btn-link btn-floating mx-1">
                          <i class="bi bi-github"></i>
                        </button>
                      </div>
                    </form>
                    <div class="col-12 text-center mb-0 signup">
                      <p style="font-size: 0.8rem;">No account yet? <a href="javascript:void(0);" class="reglognow">Register now!</a> </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
        <div id="registersect" style="display: none;">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <h1 class="my-5 display-3 fw-bold ls-tight">
              Welcome to <br />
              <span class="secline">Your New Home</span>
            </h1>
            <p style="color: white">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Eveniet, itaque accusantium odio, soluta, corrupti aliquam
              quibusdam tempora at cupiditate quis eum maiores libero
              veritatis? Dicta facilis sint aliquid ipsum atque?
            </p>
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0 ">
            <div class="card logcard">
              <div class="card-body py-5 px-md-5">
                <form id="regform">
                  <!-- 2 column grid layout with text inputs for the first and last names -->
                  <div class="row">
                    <div class="col-6 mb-4">
                      <div class="form-outline">
                        <label class="form-label" for="form3Example1">First Name</label>
                        <input type="text" id="regfn" name="First_name" class="form-control" />
                      </div>
                    </div>
                    <div class="col-6 mb-4">
                      <div class="form-outline">
                        <label class="form-label" for="form3Example1">Last Name</label>
                        <input type="text" id="regln" name="Middle_name" class="form-control" />
                      </div>
                    </div>
                    <div class="col-md-12 mb-4">
                      <div class="form-outline">
                        <label class="form-label" for="form3Example1">Email</label>
                        <input type="email" id="regemail" name="Email" class="form-control" />
                      </div>
                    </div>
                    <div class="col-6 mb-4">
                      <div class="form-outline">
                        <label class="form-label" for="form3Example1">Birthdate</label>
                        <input type="date" id="regdate" name="Date" class="form-control" />
                      </div>
                    </div>
                    <div class="col-6 mb-4">
                      <div class="form-outline">
                        <label class="form-label" for="form3Example1">Occupation</label>
                        <input type="text" id="regjob" name="Occupation" class="form-control" />
                      </div>
                    </div>
                    <div class="col-12 mb-4">
                      <div class="form-outline">
                        <label class="form-label" for="form3Example1">Username</label>
                        <input type="text" id="regun" name="Username" class="form-control" />
                      </div>
                    </div>
                    <div class="col-12 mb-4">
                      <div class="form-outline">
                        <label class="form-label" for="form3Example2">Password</label>
                        <input type="password" id="regpass" name="Password" class="form-control" />

                      </div>
                    </div>
                  </div>

                  <!-- Checkbox -->
                  <!-- <div class="form-check d-flex justify-content-center mb-4">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                  <label class="form-check-label" for="form2Example33">
                    Subscribe to our newsletter
                  </label>
                </div> -->

                  <!-- Submit button -->
                  <div class="col-12 text-center">
                    <button id="regbtn" type="submit" class="btn btn-primary btn-block mb-4 text-center rounded-5 px-5">
                      Register
                    </button>
                  </div>
                  <!-- Register buttons -->
                  <div class="text-center mb-3 socbtns">
                    <p>or sign up with:</p>
                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="bi bi-facebook"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="bi bi-google"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="bi bi-twitter-x"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="bi bi-github"></i>
                    </button>
                  </div>
                </form>
                <div class="col-12 text-center mb-0 signup">
                  <p style="font-size: 0.8rem;">Already have an account? <a href="javascript:void(0);" class="reglognow">Login now!</a> </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>