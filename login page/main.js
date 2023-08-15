
        const form = document.getElementById('login-form');
        form.addEventListener('submit', function(event) {
        event.preventDefault();
        const password = document.getElementById('password').value;
        var email = document.getElementById("email").value;
        console.log(password);
            
            
            fetch("../database/login.php",{
                method: "POST",
                headers:{
                    "Content-Type":"Application/json",
                },
                body:JSON.stringify({password:password,email:email}),
            })
            .then(response=>response.json())
            .then(data=>{
                alert(data.message);
                document.getElementById("name").value="";
                document.getElementById("email").value="";
            
            })
            .catch(error=>{
                console.error("Error:",error);
            })

        });
    