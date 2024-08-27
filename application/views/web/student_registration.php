<style>
.form-wrapper{
	max-width:800px;
	margin: 40px auto;
}
.form-wrapper .card .card-heading {
    padding: 20px 0;
    background: #1a1a1a;
    -webkit-border-top-left-radius: 10px;
    -moz-border-radius-topleft: 10px;
    border-top-left-radius: 10px;
    -webkit-border-top-right-radius: 10px;
    -moz-border-radius-topright: 10px;
    border-top-right-radius: 10px;
	color:#fff;
}

.form-wrapper .title {
    font-size: 24px;
    text-transform: uppercase;
    font-weight: 700;
    text-align: center;
    color: #fff;
}


.form-wrapper .form-control{
background: #f4f4f4;
min-height: 42px;
font-size: 15px;
}

.form-wrapper select.form-control:not([size]):not([multiple]){
	min-height:42px;
}

.form-wrapper .card-footer{
	background-color:transparent;
}

.form-wrapper  .btn--red {
    background: #ff4b5a;
	border-radius: 5px;
	line-height: 50px;
padding: 0 40px;
border-color:#ff4b5a;
}
</style>

<div class="form-wrapper">
<div class="card">
<div class="card-heading">
<h2 class="title">New Student Register</h2>
</div>

<div class="card-body">
<form method="post" action="<?= base_url('admin_master/add_student_custom') ?>">
                <div class="form-body">
                    <div class="row m-0 p-2">
                        <div class="col-lg-6 p-2">
                            <div class="form-group">
                                <label for="student_name">Full Name *</label>
                                <input type="text" class="form-control" id="student_name" name="name" required="true">
                            </div>
                        </div>
                        <div class="col-lg-6 p-2">
                            <div class="form-group">
                                <label for="student_mobile">Mobile *</label>
                                <input type="text" class="form-control" id="student_mobile" name="mobile"  pattern="[1-9]{1}[0-9]{9}" title="10 digit Mobile number" required="true">
                            </div>
                        </div>
                        <div class="col-lg-5 p-2">
                            <div class="form-group">
                                <label for="student_email">Email *</label>
                                <input type="email" class="form-control" id="student_email" name="email" required="true" placeholder="This will be used for login">
                                <div id="getemail_desc"></div>
                            </div>
                        </div>
						<div class="col-lg-5 p-2">
                            <div class="form-group">
                                <label for="student_password">Create Your Password *</label>
                                <input type="password" class="form-control" id="student_password" name="password" autocomplete="off" pattern=".{8,}" title="Must contain at least 8 or more characters" required="true">
                                <div id="getemail_desc"></div>
                            </div>
                        </div>
                        <div class="col-lg-2 p-2">
                            <div class="form-group">
                                <label for="student_pin">Pin Code *</label>
                                <input type="text" class="form-control" id="student_pin" pattern="[0-9]{6}" title="Six digit zip code" name="pin" required="true">
                            </div>
                        </div>
                        <div class="col-lg-12 p-2">
                            <div class="form-group">
                                <label for="student_address">Address *</label>
                                <textarea class="form-control" id="student_address" name="address" required="true"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6 p-2">
                            <div class="form-group">
                                <label for="student_state">State *</label>
                                <select class="form-control" name="state" id="state" required="true">
                                    <option value="">--Select State--</option> 
                                    <?php foreach($state as $value): ?>
                                    <option value="<?= $value['id']; ?>"><?= $value['name']; ?></option>
                                    <?php endforeach; ?>                                  
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 p-2">
                            <div class="form-group">
                                <label for="student_city">City *</label>
                                <select class="form-control" name="city" id="city" required="true">
                                    <option value="">--Select State--</option>                                    
                                </select>
                            </div>
                        </div>
						
                        <div class="col-lg-6 p-2">
                            <div class="form-group">
                                <label for="student_class">Class *</label>
                                <select class="form-control get_section" name="class" id="stu_class" required="true">
                                    <option value="">--Select Class--</option>
                                    <?php foreach($classes as $class): ?>
                                    <option value="<?= $class->id ?>"><?= $class->name ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 p-2">
                            <div class="form-group">
                                <label for="student_section">Section *</label>
                                <select class="form-control student_section" name="class_section_name" id="stu_section_name" required="true">
                                                                  
                                </select>
                            </div>
                        </div>

						<div class="col-lg-6 p-2">
                            <div class="form-group">
                                <label for="stu_teacher_id">Teacher Code *</label>
                                 <input type="text" class="form-control" id="stu_teacher_id" name="stu_teacher_id" required="true" placeholder="Get this code from your teacher">
                            </div>
                        </div>
						<div class="col-lg-6 p-2">
								<div class="form-group">
									<label for="school_name">School Name *</label>
									<input type="text" class="form-control" id="school_name" name="school_name" required="true">
								</div>
							</div>
						
                    </div>
                </div>
                <div class="card-footer">                  
                    <button  class="btn btn-primary btn--red float-left">Register</button>
                </div>
            </form>
</div>			
</div>
</div>
