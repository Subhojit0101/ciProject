<div id="mainBody">
    <div class="container">
        <div class="row">
            <div class="span9">
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>">Home</a> <span class="divider">/</span></li>
                    <li class="active">Registration</li>
                </ul>
                <h3> Registration</h3>
                <div class="well">
                    <form class="form-horizontal" action="<?php echo base_url('register/signin') ?>" method="post">
                        <h4>Your personal information</h4>
                        <div class="control-group">
                            <label class="control-label" for="inputFname1">First name <sup>*</sup></label>
                            <div class="controls">
                                <input type="text" id="inputFname1" placeholder="First Name" name="first_name">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputLnam">Last name <sup>*</sup></label>
                            <div class="controls">
                                <input type="text" id="inputLnam" placeholder="Last Name" name="last_name">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input_email">Email <sup>*</sup></label>
                            <div class="controls">
                                <input type="email" id="input_email" placeholder="Email" name="email">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputPassword1">Password <sup>*</sup></label>
                            <div class="controls">
                                <input type="password" id="inputPassword1" placeholder="Password" name="password">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="mobile">Mobile Phone </label>
                            <div class="controls">
                                <input type="text" name="mobile" id="mobile" placeholder="Mobile Phone" name="phone_no" />
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="controls">
                                <input class="btn btn-large btn-success" type="submit" value="Register" />
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>