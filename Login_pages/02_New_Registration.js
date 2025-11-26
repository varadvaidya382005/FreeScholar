
        //  This is for First Name Regular Expression
        let String_variable
        let regular_expression
        // let value_of_first_name = document.getElementById("new_registration_first_name").value is invalid ,hey naka karu techa jaagi last la print kartanna .value add kara
        let value_of_first_name = document.getElementById("new_registration_first_name")
        let value_of_last_name = document.getElementById("new_registration_last_name")
        let value_of_email = document.getElementById("new_registration_email")
        let value_of_contact = document.getElementById("new_registration_contact")
        let value_of_username = document.getElementById("username_selection")
        let value_of_password = document.getElementById("password_generation")
        let value_of_confirm_password = document.getElementById("confirm_password")

        function checkFirstName() {
            String_variable = document.getElementById("new_registration_first_name")
            regular_expression = /^[a-zA-Z'-]+$/gim
            if (String_variable.value != "") {
                if (!(regular_expression.test(String_variable.value))) {
                    alert("Please check have you entered Wrong Name(Space and special Symbols not allowed)");
                    document.getElementById("new_registration_first_name").value = "";
                }

            }
            // alert(value_of_first_name.value)  Checking purpose only 

        }
        function checkLastName() {
            String_variable = document.getElementById("new_registration_last_name")
            regular_expression = /^[a-zA-Z'-]+$/gim
            if (String_variable.value != "") {
                if (!(regular_expression.test(String_variable.value))) {
                    alert("Please check have you entered Wrong Surname Name(Space and special Symbols not allowed)");
                    document.getElementById("new_registration_last_name").value = "";
                }
            }
            // else{}
        }
        function checkEmail() {
            String_variable = document.getElementById("new_registration_email")
            // regular_expression = /[a-z]{1}[a-z0-9$]{1,}\@[a-z]{5,}\.[a-z]{5,}/gim    
            regular_expression = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/gim
            if (String_variable.value != "") {
                if (!(regular_expression.test(String_variable.value))) {
                    alert("Please check have you entered Wrong Email");
                    document.getElementById("new_registration_email").value = "";
                }
            }
        }
        function checkContact() {
            String_variable = document.getElementById("new_registration_contact")
            regular_expression = /^[0-9]{10}$/gim
            if (String_variable.value != "") {
                if (!(regular_expression.test(String_variable.value))) {
                    alert("Please check have you entered Wrong Contact");
                    document.getElementById("new_registration_contact").value = "";
                }
            }
            // This is also necssary in terms for database so don't change this also 
            // This is done to add +91 to its contract number  
            // value_of_contact = value_of_contact.value
           
            // const validate_country_code = confirm("Is your Country code of contact number is +91")

            // if(validate_country_code){
            // value_of_contact = "+91 " + value_of_contact
            // }
            // else{
            //     const codee = prompt("Enter your Country Code")
            //     regular_expression = /^\+[0-9]{2}$/gim
            //     if(!(regular_expression.test(codee))){
            //         //incomplete
            //     value_of_contact = codee + value_of_contact
            //     alert(value_of_contact)
            //     }
            // }
            //alert(value_of_contact)
        }
        function checkDOB() {
            const x = new Date()
            String_variable = document.getElementById("new_registration_DOB")
            const y = new Date(String_variable.value)
            regular_expression = /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/gim
            // alert("Ghuslo madhe")
            if (y >= x) {
                alert("You are ineligible")
                document.getElementById("submit_button").disabled = true
            }
        }
        function checkUsername() {
            String_variable = document.getElementById("username_selection")
            regular_expression = /^[A-z0-9_]{4,20}$/gim
            if (String_variable.value != "") {
                if (!(regular_expression.test(String_variable.value))) {
                    alert("User name can have 4-20 characters and can be only Alphanumeric along with underscore(_)  ");
                    document.getElementById("username_selection").value = "";
                }
            }
        }
        function checkPassword() {
            String_variable = document.getElementById("password_generation")
            regular_expression = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d_/!@#$%^&*+=()-]{5,20}$/gim
            if (String_variable.value != "") {
                if (!(regular_expression.test(String_variable.value))) {
                    alert("Password must be Alphanumeric and can contain some of the special symbols");
                    document.getElementById("password_generation").value = "";
                }
            }
            if (value_of_confirm_password.value != "") {
                if (value_of_password.value != value_of_confirm_password.value) {
                    // value_of_confirm_password.focus()
                    document.getElementById("submit_button").disabled = true
                }
                if (value_of_password.value == value_of_confirm_password.value) {
                    document.getElementById("submit_button").disabled = false
                }
            }
        }
        function checkConfirmPassword() {
            if (value_of_password.value == value_of_confirm_password.value) {
                document.getElementById("submit_button").disabled = false
            }
            if(value_of_password.value != value_of_confirm_password.value){
                alert("Both the passwords are not matching")
                // value_of_password.focus()
            }

        }
