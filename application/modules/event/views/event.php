<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="card">
                          <header class="card-header">
                              Inline form
                          </header>
                          <div class="card-body">
                              <form>
                                  <div class="form-row align-items-center">
                                      <div class="col-auto">
                                          <label class="sr-only" for="inlineFormInput">Name</label>
                                          <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Jane Doe">
                                      </div>
                                      <div class="col-auto">
                                          <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                          <div class="input-group mb-2">
                                              <div class="input-group-prepend">
                                                  <div class="input-group-text">@</div>
                                              </div>
                                              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                                          </div>
                                      </div>
                                      <div class="col-auto">
                                          <div class="form-check mb-2">
                                              <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                                              <label class="form-check-label" for="autoSizingCheck">
                                                  Remember me
                                              </label>
                                          </div>
                                      </div>
                                      <div class="col-auto">
                                          <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                      </div>
                                  </div>
                              </form>

                          </div>
                      </section>

                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-6">
                      <section class="card">
                          <header class="card-header">
                              Basic Forms
                          </header>
                          <div class="card-body">
                              <form>
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Email address</label>
                                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Password</label>
                                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                  </div>
                                  <div class="form-group form-check">
                                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                  </div>
                                  <button type="submit" class="btn btn-primary">Submit</button>
                              </form>

                          </div>
                      </section>
                  </div>
                  <div class="col-lg-6">
                      <section class="card">
                          <header class="card-header">
                              Horizontal Forms
                          </header>
                          <div class="card-body">
                              <form>
                                  <div class="form-group row">
                                      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                      <div class="col-sm-10">
                                          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                      <div class="col-sm-10">
                                          <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                      </div>
                                  </div>
                                  <fieldset class="form-group">
                                      <div class="row">
                                          <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                                          <div class="col-sm-10">
                                              <div class="form-check">
                                                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                                  <label class="form-check-label" for="gridRadios1">
                                                      First radio
                                                  </label>
                                              </div>
                                              <div class="form-check">
                                                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                                  <label class="form-check-label" for="gridRadios2">
                                                      Second radio
                                                  </label>
                                              </div>
                                              <div class="form-check disabled">
                                                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                                                  <label class="form-check-label" for="gridRadios3">
                                                      Third disabled radio
                                                  </label>
                                              </div>
                                          </div>
                                      </div>
                                  </fieldset>
                                  <div class="form-group row">
                                      <div class="col-sm-2">Checkbox</div>
                                      <div class="col-sm-10">
                                          <div class="form-check">
                                              <input class="form-check-input" type="checkbox" id="gridCheck1">
                                              <label class="form-check-label" for="gridCheck1">
                                                  Example checkbox
                                              </label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <div class="col-sm-10">
                                          <button type="submit" class="btn btn-primary">Sign in</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </section>

                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-6">
                      <section class="card">
                          <header class="card-header">
                              Iconic field
                          </header>
                          <div class="card-body">
                              <form role="form">
                                  <div class="form-group">
                                      <label>Left Icon</label>
                                      <div class="iconic-input">
                                          <i class="fa fa-bullhorn"></i>
                                          <input type="text" class="form-control" placeholder="left icon">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label>Right Icon</label>
                                      <div class="iconic-input right">
                                          <i class="fa fa-coffee"></i>
                                          <input type="text" class="form-control" placeholder="left icon">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label>Input with Loading</label>
                                      <input type="text" class="form-control spinner" placeholder="Something Processing">
                                  </div>

                              </form>

                          </div>
                      </section>
                      <section class="card">

                          <div class="card-body">
                              <a href="#myModal" data-toggle="modal" class="btn btn-sm btn-success">
                                  Form in Modal
                              </a>

                              <a href="#myModal-2" data-toggle="modal" class="btn btn-sm btn-danger">
                                  Form in Modal 2
                              </a>

                              <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title">Form title</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">

                                              <form role="form">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">Email address</label>
                                                      <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="exampleInputPassword1">Password</label>
                                                      <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="exampleInputFile">File input</label>
                                                      <input type="file" id="exampleInputFile3">
                                                      <p class="help-block">Example block-level help text here.</p>
                                                  </div>
                                                  <div class="checkbox">
                                                      <label>
                                                          <input type="checkbox"> Check me out
                                                      </label>
                                                  </div>
                                                  <button type="submit" class="btn btn-default">Submit</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-2" class="modal fade">
                                  <div class="modal-dialog modal-lg">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title">Form title</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
                                              <form>
                                                  <div class="form-row align-items-center">
                                                      <div class="col-auto">
                                                          <label class="sr-only" for="inlineFormInput">Name</label>
                                                          <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Jane Doe">
                                                      </div>
                                                      <div class="col-auto">
                                                          <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                                          <div class="input-group mb-2">
                                                              <div class="input-group-prepend">
                                                                  <div class="input-group-text">@</div>
                                                              </div>
                                                              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                                                          </div>
                                                      </div>
                                                      <div class="col-auto">
                                                          <div class="form-check mb-2">
                                                              <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                                                              <label class="form-check-label" for="autoSizingCheck">
                                                                  Remember me
                                                              </label>
                                                          </div>
                                                      </div>
                                                      <div class="col-auto">
                                                          <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                                      </div>
                                                  </div>
                                              </form>
                                          </div>

                                      </div>
                                  </div>
                              </div>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-6">
                      <section class="card">
                          <header class="card-header">
                              Horizontal Iconic Forms
                          </header>
                          <div class="card-body">
                              <form class="form-horizontal" role="form">

                                  <div class="form-group row">
                                      <label  class="col-lg-3 col-sm-3 control-label">Left Icon</label>
                                      <div class="col-lg-9">
                                          <div class="iconic-input">
                                              <i class="fa fa-bullhorn"></i>
                                              <input type="text" class="form-control" placeholder="left icon">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label  class="col-lg-3 col-sm-3 control-label">Right Icon</label>
                                      <div class="col-lg-9">
                                          <div class="iconic-input right">
                                              <i class="fa fa-book"></i>
                                              <input type="text" class="form-control" placeholder="right icon">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label  class="col-lg-3 col-sm-3 control-label">Input with Loading</label>
                                      <div class="col-lg-9">
                                          <div class="iconic-input right">
                                              <input type="text" class="form-control spinner" placeholder="Something Processing">
                                          </div>
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label class="col-sm-3 control-label col-lg-3">Button addons</label>
                                      <div class="col-lg-9">
                                          <div class="input-group">
                                              <div class="input-group-prepend">
                                                  <div class="input-group-text">@</div>
                                              </div>
                                              <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
                                          </div>

                                      </div>
                                  </div>

                              </form>
                          </div>
                      </section>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="card">
                          <header class="card-header">
                             Form Elements
                          </header>
                          <div class="card-body">
                              <form class="form-horizontal tasi-form" method="get">
                                  <div class="form-group row">
                                      <label class="col-sm-2 col-sm-2 control-label">Default</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-2 col-sm-2 control-label">Help text</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control">
                                          <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-2 col-sm-2 control-label">Rounder</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control round-input">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-2 col-sm-2 control-label">Input focus</label>
                                      <div class="col-sm-10">
                                          <input class="form-control" id="focusedInput" type="text" value="This is focused...">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-2 col-sm-2 control-label">Disabled</label>
                                      <div class="col-sm-10">
                                          <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-2 col-sm-2 control-label">Placeholder</label>
                                      <div class="col-sm-10">
                                          <input type="text"  class="form-control" placeholder="placeholder">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-2 col-sm-2 control-label">Password</label>
                                      <div class="col-sm-10">
                                          <input type="password"  class="form-control" placeholder="">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-lg-2 col-sm-2 control-label">Static control</label>
                                      <div class="col-lg-10">
                                          <p class="form-control-static">email@example.com</p>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </section>
                      <section class="card">
                          <div class="card-header">form with validation Error message</div>
                          <div class="card-body">
                              <form class="needs-validation" novalidate>
                                  <div class="form-row">
                                      <div class="col-md-4 mb-3">
                                          <label for="validationCustom01">First name</label>
                                          <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
                                          <div class="valid-feedback">
                                              Looks good!
                                          </div>
                                      </div>
                                      <div class="col-md-4 mb-3">
                                          <label for="validationCustom02">Last name</label>
                                          <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
                                          <div class="valid-feedback">
                                              Looks good!
                                          </div>
                                      </div>
                                      <div class="col-md-4 mb-3">
                                          <label for="validationCustomUsername">Username</label>
                                          <div class="input-group">
                                              <div class="input-group-prepend">
                                                  <span class="input-group-text" id="inputGroupPrepend">@</span>
                                              </div>
                                              <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                                              <div class="invalid-feedback">
                                                  Please choose a username.
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-row">
                                      <div class="col-md-6 mb-3">
                                          <label for="validationCustom03">City</label>
                                          <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                                          <div class="invalid-feedback">
                                              Please provide a valid city.
                                          </div>
                                      </div>
                                      <div class="col-md-3 mb-3">
                                          <label for="validationCustom04">State</label>
                                          <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
                                          <div class="invalid-feedback">
                                              Please provide a valid state.
                                          </div>
                                      </div>
                                      <div class="col-md-3 mb-3">
                                          <label for="validationCustom05">Zip</label>
                                          <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                                          <div class="invalid-feedback">
                                              Please provide a valid zip.
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                          <label class="form-check-label" for="invalidCheck">
                                              Agree to terms and conditions
                                          </label>
                                          <div class="invalid-feedback">
                                              You must agree before submitting.
                                          </div>
                                      </div>
                                  </div>
                                  <button class="btn btn-primary" type="submit">Submit form</button>
                              </form>

                              <script>
                                  // Example starter JavaScript for disabling form submissions if there are invalid fields
                                  (function() {
                                      'use strict';
                                      window.addEventListener('load', function() {
                                          // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                          var forms = document.getElementsByClassName('needs-validation');
                                          // Loop over them and prevent submission
                                          var validation = Array.prototype.filter.call(forms, function(form) {
                                              form.addEventListener('submit', function(event) {
                                                  if (form.checkValidity() === false) {
                                                      event.preventDefault();
                                                      event.stopPropagation();
                                                  }
                                                  form.classList.add('was-validated');
                                              }, false);
                                          });
                                      }, false);
                                  })();
                              </script>
                          </div>
                      </section>
                      <section class="card">
                          <div class="card-header">
                              Sizing
                          </div>
                          <div class="card-body">
                              <form class="form-horizontal tasi-form" method="get">
                                  <div class="form-group">
                                      <div class="col-lg-10">
                                          <input class="form-control form-control-lg mb-2" type="text" placeholder=".form-control-lg">
                                          <input class="form-control mb-2" type="text" placeholder="Default input">
                                          <input class="form-control form-control-sm mb-2" type="text" placeholder=".form-control-sm">

                                          <select class="form-control form-control-lg mb-2">
                                              <option>Large select</option>
                                          </select>
                                          <select class="form-control mb-2">
                                              <option>Default select</option>
                                          </select>
                                          <select class="form-control form-control-sm mb-2">
                                              <option>Small select</option>
                                          </select>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </section>
                      <section class="card">
                          <div class="card-body">
                              <form class="form-horizontal tasi-form" method="get">
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2 mb-3" >Checkboxes and radios</label>
                                      <div class="col-lg-10">
                                          <div class="custom-control custom-checkbox mb-3">
                                              <input type="checkbox" class="custom-control-input" id="customCheck1">
                                              <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                          </div>
                                          <div class="custom-control custom-radio mb-3">
                                              <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                              <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                                          </div>
                                          <div class="custom-control custom-radio mb-3">
                                              <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                              <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                                          </div>

                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2 mb-3">Inline </label>
                                      <div class="col-lg-10">
                                          <div class="custom-control custom-radio custom-control-inline">
                                              <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                              <label class="custom-control-label" for="customRadioInline1">Toggle this custom radio</label>
                                          </div>
                                          <div class="custom-control custom-radio custom-control-inline">
                                              <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                              <label class="custom-control-label" for="customRadioInline2">Or toggle this other custom radio</label>
                                          </div>

                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2 mb-3" >Selects</label>
                                      <div class="col-lg-10">
                                          <select class="custom-select mb-3">
                                              <option selected>Open this select menu</option>
                                              <option value="1">One</option>
                                              <option value="2">Two</option>
                                              <option value="3">Three</option>
                                          </select>

                                          <select class="custom-select custom-select-sm mb-3">
                                              <option selected>Open this select menu</option>
                                              <option value="1">One</option>
                                              <option value="2">Two</option>
                                              <option value="3">Three</option>
                                          </select>

                                          <select class="custom-select" multiple>
                                              <option selected>Open this select menu</option>
                                              <option value="1">One</option>
                                              <option value="2">Two</option>
                                              <option value="3">Three</option>
                                          </select>

                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2 mb-3">Range</label>
                                      <div class="col-lg-10">
                                          <label for="customRange1">Example range</label>
                                          <input type="range" class="custom-range" id="customRange1">
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2 mb-3">File browser</label>
                                      <div class="col-lg-10">
                                          <div class="custom-file">
                                              <input type="file" class="custom-file-input" id="customFile">
                                              <label class="custom-file-label" for="customFile">Choose file</label>
                                          </div>
                                      </div>
                                  </div>

                              </form>
                          </div>
                      </section>

                      <section class="card">
                          <header class="card-header">
                              Input groups
                          </header>
                          <div class="card-body">
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon1">@</span>
                                  </div>
                                  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                              </div>

                              <div class="input-group mb-3">
                                  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                  <div class="input-group-append">
                                      <span class="input-group-text" id="basic-addon2">@example.com</span>
                                  </div>
                              </div>

                              <label for="basic-url">Your vanity URL</label>
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                  </div>
                                  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                              </div>

                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text">$</span>
                                  </div>
                                  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                  <div class="input-group-append">
                                      <span class="input-group-text">.00</span>
                                  </div>
                              </div>

                              <div class="input-group">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text">With textarea</span>
                                  </div>
                                  <textarea class="form-control" aria-label="With textarea"></textarea>
                              </div>
                          </div>
                      </section>

                      <div class="row">
                          <div class="col-lg-6">
                              <section class="card">
                                  <header class="card-header">
                                      Tags Input
                                  </header>
                                  <div class="card-body">
                                      <input name="tagsinput" id="tagsinput" class="tagsinput" value="Flat,Design,Lab,Clean" />
                                  </div>
                              </section>
                          </div>
                          <div class="col-lg-6">
                              <section class="card">
                                  <header class="card-header">
                                      Custom Checkbox & Radio
                                  </header>
                                  <div class="card-body">
                                      <form action="#" method="get" accept-charset="utf-8">
                                          <div class="checkboxes">
                                              <label class="label_check" for="checkbox-01">
                                                  <input name="sample-checkbox-01" id="checkbox-01" value="1" type="checkbox" checked /> I agree to the terms &#38; conditions.
                                              </label>
                                              <label class="label_check" for="checkbox-02">
                                              <input name="sample-checkbox-02" id="checkbox-02" value="1" type="checkbox" /> Please send me regular updates. </label>
                                              <label class="label_check" for="checkbox-03">
                                              <input name="sample-checkbox-02" id="checkbox-03" value="1" type="checkbox" /> This is nice checkbox.</label>

                                          </div>
                                          <div class="radios">
                                              <label class="label_radio" for="radio-01">
                                                  <input name="sample-radio" id="radio-01" value="1" type="radio" checked /> This is option A...
                                              </label>
                                              <label class="label_radio" for="radio-02">
                                                  <input name="sample-radio" id="radio-02" value="1" type="radio" /> and this is option B...
                                              </label>
                                              <label class="label_radio" for="radio-03">
                                                  <input name="sample-radio" id="radio-03" value="1" type="radio" /> or simply choose option C
                                              </label>
                                          </div>
                                      </form>
                                  </div>

                              </section>

                          </div>
                      </div>

                      <div class="row">
                          <div class="col-lg-12">
                              <section class="card">
                                  <header class="card-header">
                                      Masked inputs
                                     <span class="tools pull-right">
                                        <a class="fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="fa fa-times" href="javascript:;"></a>
                                     </span>
                                  </header>
                                  <div class="card-body">
                                      <form action="#" class="form-horizontal">
                                          <div class="form-group row">
                                              <label class="col-sm-2 col-sm-2 control-label">ISBN 1</label>
                                              <div class="col-sm-10">
                                                  <input type="text" placeholder="" data-mask="999-99-999-9999-9" class="form-control">
                                                  <span class="help-inline">999-99-999-9999-9</span>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-sm-2 control-label">ISBN 2</label>
                                              <div class="col-sm-10">
                                                  <input type="text" placeholder="" data-mask="999 99 999 9999 9" class="form-control">
                                                  <span class="help-inline">999 99 999 9999 9</span>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-sm-2 control-label">ISBN 3</label>
                                              <div class="col-sm-10">
                                                  <input type="text" placeholder="" data-mask="999/99/999/9999/9" class="form-control">
                                                  <span class="help-inline">999/99/999/9999/9</span>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-sm-2 control-label">IPV4</label>
                                              <div class="col-sm-10">
                                                  <input type="text" placeholder="" data-mask="999.999.999.9999" class="form-control">
                                                  <span class="help-inline">192.168.110.310</span>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-sm-2 control-label">IPV6</label>
                                              <div class="col-sm-10">
                                                  <input type="text" placeholder="" data-mask="9999:9999:9999:9:999:9999:9999:9999" class="form-control">
                                                  <span class="help-inline">4deg:1340:6547:2:540:h8je:ve73:98pd</span>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-sm-2 control-label">Tax ID</label>
                                              <div class="col-sm-10">
                                                  <input type="text" placeholder="" data-mask="99-9999999" class="form-control">
                                                  <span class="help-inline">99-9999999</span>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-sm-2 control-label">Phone</label>
                                              <div class="col-sm-10">
                                                  <input type="text" placeholder="" data-mask="(999) 999-9999" class="form-control">
                                                  <span class="help-inline">(999) 999-9999</span>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-sm-2 control-label">Currency</label>
                                              <div class="col-sm-10">
                                                  <input type="text" placeholder="" data-mask="$ 999,999,999.99" class="form-control">
                                                  <span class="help-inline">$ 999,999,999.99</span>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-sm-2 control-label">Date</label>
                                              <div class="col-sm-10">
                                                  <input type="text" placeholder="" data-mask="99/99/9999" class="form-control">
                                                  <span class="help-inline">dd/mm/yyyy</span>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-sm-2 control-label">Date 2</label>
                                              <div class="col-sm-10">
                                                  <input type="text" placeholder="" data-mask="99-99-9999" class="form-control">
                                                  <span class="help-inline">dd-mm-yyyy</span>
                                              </div>
                                          </div>

                                      </form>
                                  </div>
                              </section>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-lg-12">
                              <section class="card">
                                  <header class="card-header">
                                      CKEditor
                                  </header>
                                  <div class="card-body">
                                      <div class="form">
                                          <form action="#" class="form-horizontal">
                                              <div class="form-group">
                                                  <label class="col-sm-2 control-label col-sm-2">CKEditor</label>
                                                  <div class="col-sm-10">
                                                      <textarea class="form-control ckeditor" name="editor1" rows="6"></textarea>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                              </section>
                          </div>
                      </div>

                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->

