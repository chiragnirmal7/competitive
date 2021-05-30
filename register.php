<html lang="en">

<head>
    <!-- REQUIRED FILES -->
    <?php  include "headerfiles.html"  ?>
    <title>Register</title>
</head>

<body>
    <!-- NAVBAR -->
    <?php include "navbar.php"  ?>
    <section id="main">
        <div class="container p-5 my-5 bg-light">
            <div class="main">
                <h2>Registration</h2>


                <!-- PROFILE DETAILS START-->

                <section class="border my-5 py-5 px-2">

                    <div>
                        <label for="firstName">First Name</label>
                        <div>
                            <input type="text" id="firstName" placeholder="First Name">
                        </div>
                    </div>
                    <div>
                        <label for="lastName">Last Name</label>
                        <div>
                            <input type="text" id="lastName" placeholder="Last Name">
                        </div>
                    </div>
                    <div>
                        <label for="fatherName">Father' Name</label>
                        <div>
                            <input type="text" id="fatherName" placeholder="Father Name">
                        </div>
                    </div>
                    <div>
                        <label for="motherName">Mother's Name</label>
                        <div>
                            <input type="text" id="motherName" placeholder="Mother Name">
                        </div>
                    </div>
                    <div>
                        <label for="birthDate">Date of Birth</label>
                        <div>
                            <input type="date" name="search_date" id="birthDate">
                        </div>
                        <p class="text-warning" id="dateError"></p>
                    </div>
                    <!-- GENDER SELECTION SECTION START -->

                    <div class="">
                        <label class="control-label">Gender</label>
                        <div class="row d-flex gender">
                            <div class="d-flex align-items-center">

                                <input name="r1" type="radio" id="maleRadio" value="Male">
                                <label class="mx-3 " for="maleRadio">Male</label>

                                <input name="r1" type="radio" id="femaleRadio" value="Female">
                                <label class="mx-3" for="femaleRadio">Female</label>

                                <input name="r1" type="radio" id="otherRadio" value="Other">
                                <label class="mx-3" for="otherRadio">Other</label>

                            </div>
                        </div>
                        <p class="text-warning" id="genderError"></p>
                    </div>

                    <div class="">
                        <label class="control-label">Marital Status</label>
                        <div class="row d-flex gender">
                            <div class="d-flex align-items-center">

                                <input name="ms" type="radio" id="single" value="Male">
                                <label class="mx-3 " for="single">Single</label>

                                <input name="ms" type="radio" id="married" value="Female">
                                <label class="mx-3" for="married">Married</label>

                            </div>
                        </div>
                        <p class="text-warning" id="marriedError"></p>
                    </div>
                </section>

                <!-- PROFILE DETAILS OVER-->


                <p id="ErrorMessage"></p>



                <!-- EDUCATION SELECTION , QUALIFICATION , OTHER DETAILS START -->

                <section class="border border my-5 py-5 px-2">

                    <!-- EDUCATION SECTION START -->
                    <div>
                        <label for="selectionBoard">Exam board</label>
                        <div>
                            <select class=" select" id="selectionBoard">
                                <option value="">EXAM BOARD</option>
                                <option value="Gujrat secondary and higher secondary board">Gujrat secondary and higher
                                    secondary board</option>
                                <option value="central board of secondary education (CBSE)">central board of secondary
                                    education (CBSE)</option>
                                <option value="Rajasthan State open school">Rajasthan State open school</option>
                                <option value="rashtriya sanskrit sansthan, new delhi">rashtriya sanskrit sansthan, new
                                    delhi</option>
                                <option value="punjab school education board">punjab school education board</option>
                            </select>
                        </div>
                        <p class="text-warning" id="selectionBoardError"></p>
                    </div>


                    <div class="my-2">
                        <label for="passingYear">Passing Year</label>
                        <div>
                            <select class="select" id="passingYear">
                                <option value=""> Select Year </option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                            </select>
                        </div>
                        <p class="text-warning" id="passingYearError"></p>
                    </div>


                    <div class="d-flex justify-content-between align-items-center">
                        <div class="col-md-5">
                            <label for="rollno">Roll no </label>
                            <div>
                                <input type="tel" id="rollno" placeholder="Roll NO." name="rollno" />
                            </div>
                            <p class="text-warning" id="rollError"></p>
                        </div>
                        <div class="col-md-5">
                            <label for="rollnoVerify">Verify Roll no </label>
                            <div>
                                <input type="tel" id="rollnoVerify" placeholder="Roll NO." name="rollnoVerify">
                            </div>
                        </div>
                        <div class=" col-2">
                            <div>

                            </div>
                        </div>
                    </div>



                    <!-- EDUCATION SELECTION OVER -->



                    <!-- QAALIFICATION LEVEL DETAILS SECTION START -->

                    <div>
                        <label for="qualificationLevel">Qualification Level</label>
                        <div>
                            <select class=" select" id="qualificationLevel">
                                <option value="">SELECT Qualification level</option>
                                <option value="Matriculation (10th)">Matriculation (10th)</option>
                                <option value="Higher secondary">Higher secondary</option>
                                <option value="Diploma">Diploma</option>
                                <option value="graduate">graduate</option>
                                <option value="post graduate">post graduate</option>
                                <option value="ph.D">ph.D</option>
                            </select>
                        </div>
                        <p class="text-warning" id="qualificationLevelError"></p>
                    </div>


                    <!-- QAALIFICATION SECTION OVER -->


                    <!-- MOBILE, EMAIL, ADDRESS VERIFICATION SECTION START -->

                    <div class="d-flex justify-content-between align-items-center ">
                        <div class=" col-md-5">
                            <label for="email">Email </label>
                            <div>
                                <input type="email" id="email" placeholder="Email" name="email">
                            </div>
                            <p class="text-warning" id="emailError"></p>
                        </div>
                        <div class=" col-md-5">
                            <label for="emailVerify">Verify Email </label>
                            <div>
                                <input type="email" id="emailVerify" placeholder="Email" name="email">
                            </div>
                        </div>
                        <div class=" col-2">
                            <div>

                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center ">
                        <div class=" col-md-5">
                            <label for="phoneNumber">Phone number </label>
                            <div>
                                <input type="phoneNumber" id="phoneNumber" placeholder="Phone number">
                            </div>
                            <p class="text-warning" id="phoneError"></p>
                        </div>

                        <div class=" col-md-5">
                            <label for="phoneNumberVerify">Verify Phone number </label>
                            <div>
                                <input type="phoneNumber" id="phoneNumberVerify" placeholder="Verify Phone number">
                            </div>
                        </div>
                        <div class=" col-2">
                            <div>

                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center ">
                        <div class=" col-md-5 ">
                            <div>
                                <label for="state">State</label>
                                <div>
                                    <select class=" select" id="state">
                                        <option value="">State</option>
                                        <option value="Gujrat">Gujrat</option>
                                        <option value="New Delhi">New Delhi</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                    </select>
                                </div>
                                <p class="text-warning" id="stateError"></p>
                            </div>
                        </div>
                        <div class=" col-md-5">
                            <div>
                                <label for="city">City</label>
                                <div>
                                    <select class=" select" id="city">
                                        <option value="">City</option>
                                        <option value="RAJKOT">RAJKOT</option>
                                        <option value="NOIDA">NOIDA</option>
                                        <option value="JAIPUR">JAIPUR</option>
                                        <option value="LUDHIANA">LUDHIANA</option>
                                        <option value="PUNE">PUNE</option>
                                    </select>
                                </div>
                                <p class="text-warning" id="cityError"></p>
                            </div>
                        </div>
                        <div class=" col-2">
                            <div>

                            </div>
                        </div>
                    </div>

                    <label for="p_des">Address</label>
                    <div class="w-100">
                        <div class=" col-md-10">
                            <textarea id="address" name="address" class="textarea"
                                placeholder="Type your permanent address here"></textarea>
                        </div>
                        <p class="text-warning" id="addressError"></p>
                        <div class=" col-md-2"></div>
                    </div>

                    <!-- MOBILE, EMAIL, ADDRESS VERIFICATION SECTION OVER -->

                </section>

                <!-- EDUCATION SELECTION , QUALIFICATION , OTHER DETAILS OVER -->


                <!-- ADHAR-CARD, LOGIN DETAILS AND FILE SECTION START -->

                <section class="border border my-5 py-5 px-2">


                    <div class="d-flex justify-content-between align-items-center ">
                        <div class=" col-md-5 ">
                            <label for="adharCard">Adhar card No.</label>
                            <div>
                                <input type="text" id="adharCard" placeholder="adharCard">
                            </div>
                            <p class="text-warning" id="adharError"></p>
                        </div>
                        <div class=" col-md-5">
                            <label for="loginId">Login Id</label>
                            <div>
                                <input type="text" id="loginId" placeholder="Your permanent id">
                            </div>
                            <p class="text-warning" id="IdError"></p>
                        </div>
                        <div class=" col-2">
                            <div>

                            </div>
                        </div>
                    </div>


                    

                    <div class="d-flex justify-content-between align-items-center my-2">
                        <div class=" col-md-5 ">
                            <div class="my-2">
                                <label for="fileupload" style="font-weight: 400;">profile image (.jpg, .jpeg or
                                    .png)</label>
                                <div>
                                    <input type="file" name="fileupload" class="form-control border-0 text-primary"
                                        id="fileupload" />
                                </div>
                            </div>
                            <p class="text-warning" id="profileImageError"></p>
                        </div>
                        <div class=" col-md-5">
                            <div class="my-2">
                                <label for="fileupload_signature" style="font-weight: 400;">Signature image
                                    (.png)</label>
                                <div>
                                    <input type="file" name="fileupload_signature"
                                        class="form-control border-0 text-primary" id="fileupload_signature" />
                                </div>
                            </div>
                            <p class="text-warning" id="SignImageError"></p>
                        </div>
                        <div class=" col-2">
                            <div>

                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center my-2 ">
                        <div class=" col-md-5 ">
                            <label for="password">Password</label>
                            <div>
                                <input type="password" id="password" placeholder="Password">
                            </div>
                            <p class="text-warning" id="passwordError"></p>
                        </div>
                        <div class=" col-md-5">
                            <label for="passwordVerify">Confirm Password</label>
                            <div>
                                <input type="password" id="passwordVerify" placeholder="Password">
                            </div>
                        </div>
                        <div class=" col-2">
                            <div>

                            </div>
                        </div>
                    </div>
                </section>


                <!-- ADHAR-CARD, LOGIN DETAILS AND FILE SECTION OVER -->


                <div class="d-flex mx-2">
                    <input type="checkbox" id="term" style="width:initial;margin-right:15px;"/>
                    <h4 class="h6">terms and conditions</h4>
                </div>
                <div class="my-2 ">

                    <div>
                        <button name="sbmtbtn" style="pointer-events: none;"
                            class="btn btn-lg bg-primary text-light w-25" id="registerBtn">Submit</button>
                    </div>
                    <div class="w-100 text-success text-end ">
                        <p>YOU CAN LOGIN WITH YOUR ADHAR CARD NO</p>
                    </div>
                </div>

            </div> <!-- .MAIN OVER -->
        </div> <!-- .CONTAINER OVER -->
    </section>


    <!-- PRINTING DATE TEMP -->

    <div id="DDOP"></div>
    <div id="data"></div>

    <!-- PRINTIG DATA TEMP OVER -->

    <!-- SCRIPT START -->


    <script>
        $(document).ready(function () {
            $("#term").on('click', function () {
                validate();
                var checkBox = document.getElementById("term");
                var btn = document.getElementById("registerBtn");
                if (checkBox.checked == true) {
                    btn.style.pointerEvents = "auto";
                } else {
                    btn.style.pointerEvents = "none";
                }
            });
            //     function year(){
            //     var end = 1980;
            //     var start = new Date().getFullYear();
            //     var options = "";
            //     options += "<option value=''> Select Year </option>";
            //     for (start = start; start > end; start--) {
            //         options += "<option value='"+start+"'>" + start + "</option>";
            //     }
            //     document.getElementById("passingYear").innerHTML = options;
            // }   year();
            async function saveImageFile() {
                let formData = new FormData();
                formData.append("file", fileupload.files[0]);
                await fetch('move_uploaded_files.php', { method: "POST", body: formData });
            }
            async function saveSignFile() {
                let formData = new FormData();
                formData.append("file", fileupload_signature.files[0]);
                await fetch('move_uploaded_files.php', { method: "POST", body: formData });
            }
            function validate() {
                var userName = document.getElementById("firstName").value;
                var lastName = document.getElementById("lastName").value;
                var fatherName = document.getElementById("fatherName").value;
                var motherName = document.getElementById("motherName").value;
                var birthDate = document.getElementById("birthDate").value;

                if (document.getElementById('maleRadio').checked) {
                    gender = 'Male';
                }
                else if (document.getElementById('femaleRadio').checked) {
                    gender = 'Female';
                }
                else if (document.getElementById('otherRadio').checked) {
                    gender = 'Other'
                }
                else {
                    gender = '';
                }

                if (document.getElementById('single').checked) {
                    status = 'single';
                }
                else if (document.getElementById('married').checked) {
                    status = 'married';
                }
                else {
                    status = '';
                }
                var rollno = document.getElementById("rollno").value;
                var rollnoVerify = document.getElementById("rollnoVerify").value;
                var email = document.getElementById("email").value;
                var emailVerify = document.getElementById("emailVerify").value;
                var phoneNumber = document.getElementById("phoneNumber").value;
                var phoneNumberVerify = document.getElementById("phoneNumberVerify").value;
                var adharCardNo = document.getElementById("adharCard").value;
                var address = document.getElementById('address').value;
                var loginId = document.getElementById("loginId").value;
                var password = document.getElementById("password").value;
                var passwordVerify = document.getElementById("passwordVerify").value;

                var image_file_data = document.getElementById('fileupload').value;
                var image_fileName = image_file_data.slice(image_file_data.search('h') + 2, image_file_data[-1])
                var image_extension = image_file_data.lastIndexOf('\.');
                image_extension = image_file_data.slice(image_extension + 1, image_file_data[-1]);

                var sign_file_data = document.getElementById('fileupload_signature').value;
                var sign_fileName = sign_file_data.slice(sign_file_data.search('h') + 2, sign_file_data[-1])
                var sign_extension = sign_file_data.lastIndexOf('\.');
                sign_extension = sign_file_data.slice(sign_extension + 1, sign_file_data[-1]);

                isSelectedImage = image_file_data.length;
                isSelectedSign = sign_file_data.length;
                state = document.getElementById('state').value;
                city = document.getElementById('city').value;
                passingYear = document.getElementById('passingYear').value;
                selectionBoard = document.getElementById('selectionBoard').value;
                qualificationLevel = document.getElementById('qualificationLevel').value;
                check_int = /^-?[0-9]+$/;
                var filter = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

                /*REGULAR EXPRESSOIN VALIDATION FROM STACK OVERFLOW*/

                /*---------------------------- VALIDATION START----------------------------*/


                /*  FILEUPLOAD VERIFICATION FOR IMAGE SELECTION  */

                if (image_file_data.length == 0) {
                    document.getElementById("profileImageError").innerHTML = "Select File";
                    document.getElementById("fileupload").focus();
                }
                else {
                    if (image_extension != "jpg" && image_extension != "jpeg" && image_extension != "png") {
                        document.getElementById("profileImageError").innerHTML = "Select Valid Formate";
                        document.getElementById("fileupload").focus();
                    }
                    else {
                        document.getElementById("profileImageError").innerHTML = "";
                    }

                }

                /* FILEUPLOAD VERIFICATION FOR SIGNATURE SELECTION */

                if (sign_file_data.length == 0) {
                    document.getElementById("SignImageError").innerHTML = "Select File";
                    document.getElementById("fileupload_signature").focus();
                }
                else {
                    if (sign_extension != "png") {
                        document.getElementById("SignImageError").innerHTML = "Select png Formate";
                        document.getElementById("fileupload_signature").focus();
                    }
                    else {
                        document.getElementById("SignImageError").innerHTML = "";
                    }

                }

                if (password.length > 0 && password.length > 5 && password == passwordVerify) {
                    document.getElementById("passwordError").innerHTML = "";
                } else {
                    document.getElementById("passwordError").innerHTML = "Check password (min-6 char)";
                    document.getElementById("password").focus();
                }


                if (loginId.length && loginId % 1 === 0 && loginId.length > 5) { document.getElementById("IdError").innerHTML = ""; }
                else {
                    document.getElementById("IdError").innerHTML = "Enter Numbers (min-6)";
                    document.getElementById("loginId").focus();
                }


                a = check_int.test(adharCardNo);/* CHECK THAT THIS IS NUMBER OR NOT  */
                if ((adharCardNo.length > 0 && adharCardNo.length == 12 && a === true)) {
                    document.getElementById("adharError").innerHTML = "";
                } else {
                    document.getElementById("adharError").innerHTML = "Check Adhar";
                    document.getElementById("adharCard").focus();
                }


                if (address.length < 5 || address.length > 257) {
                    document.getElementById("addressError").innerHTML = "Enter Address (min-6, max-256 char)";
                    document.getElementById("address").focus();
                } else { document.getElementById("addressError").innerHTML = ""; }

                if (city == 0) {
                    document.getElementById("cityError").innerHTML = "Select City";
                    document.getElementById("city").focus();
                } else { document.getElementById("cityError").innerHTML = ""; }


                if (state == 0) {
                    document.getElementById("stateError").innerHTML = "Select State";
                    document.getElementById("state").focus();
                } else { document.getElementById("stateError").innerHTML = ""; }


                p = check_int.test(phoneNumber)/* CHECK THAT THIS IS NUMBER OR NOT  */
                if (phoneNumber.length > 0 && phoneNumber.length == 10 && p === true && phoneNumber == phoneNumberVerify) {
                    document.getElementById("phoneError").innerHTML = "";
                } else {
                    document.getElementById("phoneError").innerHTML = "Check Phone Number";
                    document.getElementById("phoneNumber").focus();
                }


                if (email.length && email === emailVerify && email.match(filter)) { document.getElementById("emailError").innerHTML = ""; }
                else {
                    document.getElementById("emailError").innerHTML = "Email Mismatch or not valid formate";
                    document.getElementById("email").focus();
                }


                if (qualificationLevel == 0) {
                    document.getElementById("qualificationLevelError").innerHTML = "Select Qualification Level";
                    document.getElementById("qualificationLevel").focus();
                } else { document.getElementById("qualificationLevelError").innerHTML = ""; }


                r = check_int.test(rollno)/* CHECK THAT THIS IS NUMBER OR NOT  */
                if (rollno.length > 5 && rollno.length < 11 && r === true && rollno == rollnoVerify) {
                    document.getElementById("rollError").innerHTML = "";
                } else {
                    document.getElementById("rollError").innerHTML = "Check roll Number";
                    document.getElementById("rollno").focus();
                }


                if (passingYear == 0) {
                    document.getElementById("passingYearError").innerHTML = "Select Year";
                    document.getElementById("passingYear").focus();
                } else { document.getElementById("passingYearError").innerHTML = ""; }


                if (selectionBoard == 0) {
                    document.getElementById("selectionBoardError").innerHTML = "Select Board";
                    document.getElementById("selectionBoard").focus();
                } else { document.getElementById("selectionBoardError").innerHTML = ""; }



                if (gender == '') {
                    document.getElementById("maleRadio").focus();
                    document.getElementById("genderError").innerHTML = "Select gender";
                } else { document.getElementById("genderError").innerHTML = ""; }


                if (status == '') {
                    document.getElementById("single").focus();
                    document.getElementById("marriedError").innerHTML = "Select Marital Status";
                } else { document.getElementById("marriedError").innerHTML = ""; }



                if (birthDate == '') {
                    document.getElementById("dateError").innerHTML = "Date Error";
                    document.getElementById("birthDate").focus();
                } else {
                    var dateStart = new Date(birthDate);
                    var currentDate = new Date();
                    if (Date.parse(dateStart) < Date.parse(currentDate)) {
                        document.getElementById("dateError").innerHTML = "";
                    } else {
                        document.getElementById("birthDate").focus();
                        document.getElementById("dateError").innerHTML = "Not proper date";

                    }
                }


                if (!motherName.length) {
                    document.getElementById("motherName").focus();
                }


                if (!fatherName.length) {
                    document.getElementById("fatherName").focus();
                }

                if (!lastName.length) {
                    document.getElementById("lastName").focus();
                }

                if (!userName.length) {
                    document.getElementById("firstName").focus();
                }

                /*---------------------------- VALIDATION OVER----------------------------*/

                /*  CHECKING CONDITION FOR EMPTY FIELDS  */

                if (!userName.length|| !lastName.length || !fatherName.length || !motherName.length || birthDate == '' || gender == '' || status == '' || state == 0 || city == '' || selectionBoard == 0 || passingYear == 0 || !rollno.length || qualificationLevel == 0 || !email.length || !phoneNumber.length || !address.length || !adharCardNo.length || !loginId.length || !password.length || !sign_file_data.length || !image_file_data.length) {
                    alert("Fill Required Fields  !!!")
                }
                else {


                    // OBJECT CREATION FOR FORM DATA

                    data = {
                        'firstname': userName, 'lastname':lastName, 'fathername': fatherName, 'mothername': motherName, 'birthdate': birthDate, 'gender': gender, 'status': status, 'state': state, 'city': city,
                        'bord': selectionBoard, 'passyear': passingYear, 'rollno': rollno, 'qualification': qualificationLevel, 'email': email,
                        'phoneno': phoneNumber, 'address': address, 'adharcard': adharCardNo, 'loginid': loginId, 'password': password, 'imagefile': image_fileName,
                        'signfile': sign_fileName
                    }

                    // POST DATA TO REGISTER PAGE FOR INSERT RECORD
                    $.ajax(
                        {
                            type: 'POST',
                            url: 'user_register.php',
                            timeout: 1000,
                            error: function() {
                                alert("request time out");
                                window.location = "register.php"
                            },
                            data: { 'insert_entry': data },
                            success: function (data) {
                                if(data != 1){
                                    alert(data);
                                }else{
                                    $('#DDOP').html(data);
                                    saveImageFile();
                                    saveSignFile();
                                    $("#DDOP").html(data);
                                    document.getElementById("firstName").value = "";
                                    document.getElementById("lastName").value = "";
                                    document.getElementById("fatherName").value = "";
                                    document.getElementById("motherName").value = "";
                                    document.getElementById("birthDate").value = "";
                                    document.getElementById("rollno").value = "";
                                    document.getElementById("rollnoVerify").value = "";
                                    document.getElementById("email").value = "";
                                    document.getElementById("emailVerify").value = "";
                                    document.getElementById("phoneNumber").value = "";
                                    document.getElementById("phoneNumberVerify").value = "";
                                    document.getElementById("adharCard").value = "";
                                    document.getElementById('address').value = "";
                                    document.getElementById("loginId").value = "";
                                    document.getElementById("password").value = "";
                                    document.getElementById("passwordVerify").value = "";
                                    document.getElementById('state').value = "";
                                    document.getElementById('city').value = "";
                                    document.getElementById('passingYear').value = "";
                                    document.getElementById('selectionBoard').value = "";
                                    document.getElementById('qualificationLevel').value = "";
                                    document.getElementById("fileupload").value = "";
                                    document.getElementById("fileupload_signature").value = "";
                                    $('#maleRadio').prop('checked', false);
                                    $('#otherRadio').prop('checked', false);
                                    $('#femaleRadio').prop('checked', false);
                                    $('#single').prop('checked', false);
                                    $('#married').prop('checked', false);
                                }
                                
                            }
                        });

                }

                // PRINT FORM DATA FOR VARIFICATION (OPTIONAL)
                document.getElementById("data").innerHTML = userName + "<br>" + lastName + "<br>" + fatherName + "<br>" + motherName + "<br>"
                    + birthDate + "<br>" + gender + "<br>" + status + "<br>" + state + "<br>" + city + "<br>" + selectionBoard + "<br>" + passingYear + "<br>"
                    + rollno + "<br>" + rollnoVerify + "<br>" + qualificationLevel + "<br>" + email + "<br>" + emailVerify + "<br>"
                    + phoneNumber + "<br>" + phoneNumberVerify + "<br>" + address + "<br>" + adharCardNo + "<br>" + loginId + "<br>"
                    + password + "<br>" + passwordVerify + "<br>" + image_fileName + "<br>" + sign_fileName;
            }

            $('#registerBtn').on('click', function () {
                validate();
            });
        });
    </script>
<?php
include "footer.php";
?>
    <!-- SCRIPT OVER -->
</body>
</html>