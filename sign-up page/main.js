function validateForm() {

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const mobilePattern = /^\+\d{12}$/;
    const email = document.getElementById("email").value;
    const mobile = document.getElementById("mobile").value;
    const fname = document.getElementById("fname").value;
    const lname = document.getElementById("lname").value;
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;
    const data = parseInt(document.getElementById("data").value);
    const ageError = document.getElementById("ageError");

    if (!emailPattern.test(email)) {
        alert("Invalid email format");
        return false;
    }

    if (!mobilePattern.test(mobile)) {
        alert("Invalid mobile format");
        return false;
    }

    if (password !== confirmPassword) {
        alert("Passwords do not match");
        return false;
    }

    if (password.length < 8 || !/[A-Z]/.test(password) || !/[a-z]/.test(password) || !/\d/.test(password) || !/[!@#$%^&*]/.test(password)) {
        alert("Password does not meet requirements");
        return false;
    }

    const currentDate = new Date();
    const birthDate = new Date(year, month - 1, day);

    if ((currentDate - birthDate) / (1000 * 60 * 60 * 24 * 365.25) < 16) {
        ageError.textContent = "You must be at least 16 years old to register.";
        return false;
    } else {
        ageError.textContent = "";
    }

    fetch("../database/register.php",{
        method: "POST",
        headers:{
            "Content-Type":"Application/json",
        },
        body:JSON.stringify({password:password,email:email,fname:fname,lname:lname,password:password,confirmPassword:confirmPassword,data:data }),
    })
    .then(response=>response.json())
    .then(data=>{
        alert(data.message);

        document.getElementById("email").value="";
        document.getElementById("mobile").value="";
        document.getElementById("fname").value="";
        document.getElementById("lname").value="";
        document.getElementById("password").value="";
        document.getElementById("confirmPassword").value="";
        document.getElementById("data").value="";
        
    })
    .catch(error=>{
        console.error("Error:",error);
    })

    return true;
}
