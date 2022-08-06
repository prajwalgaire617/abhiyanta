<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style/registerstyle.css">

    <title>Regiter</title>
</head>
<body>
    <div class="register-container">
            <h1 class="register-title">Register</h1>
            <div id = "err" class="error-box hidden">
                <!-- <p class="error-msg">Error Message</p> -->
            </div>
            <form action="./server/registration_server.php" method="POST" enctype="multipart/form-data" >
                <input class="field" type="text" required placeholder="Name" name="register_name" />
        
                <input class="field" type="email" required placeholder="Email" name="register_email" />
                       
                <input class="field" type="text" required placeholder="Address" name="register_address" />
                                
                <input id = "phone" class="field" type="number" required placeholder="Phone Number" name="register_number" />
                
                <input id="password" class="field" type="password" required placeholder="Password" name="register_password" />
        
                <input id="cpassword" class="field" type="password" required placeholder="Confirm Password" name="register_cpassword" />

                
                <input id="reg-btn" class="register-btn field" type="submit" value="Register" name="submit_registration">
                
            </form>
    </div>
    <script>
        
        const password = document.getElementById("password")
        const cpassword = document.getElementById("cpassword")
        const regBtn = document.getElementById("reg-btn")
        const errBox = document.getElementById("err")
        const phoneno = document.getElementById('phone')
        
        regBtn.addEventListener("click", () => {

            if(phone.value.length === 0) return
            if(password.value !== cpassword.value) {
                err.innerHTML = `<p class="error-msg">Password does not match</p>`
                errBox.classList.remove('hidden')
                setTimeout(()=>{
                    errBox.classList.add('hidden')
                }, 3000)
            }
            if(phone.value.length !== 10){
                err.innerHTML = `<p class="error-msg">Incorrect Phone no</p>`
                errBox.classList.remove('hidden')
                setTimeout(()=>{
                    errBox.classList.add('hidden')
                }, 3000)
            }

        })
        const currentPos = {

        }       
        if(window.DeviceMotionEvent){
            console.log("DeviceMotion supported")
            window.addEventListener('devicemotion', event=>{
                x = event.accelerationIncludingGravity.x;
                if(x>5){
                    
                    navigator.geolocation.getCurrentPosition(position=>{
                        const currentDate = new Date();
                        currentPos['latitude'] = position.coords.latitude;
                        currentPos['longitude'] = position.coords.longitude;
                        currentPos['time'] = currentDate.toString();
                    })
                }
            
            }, true)
        }
        else{
            console.log("DeviceOrientation not supported")
        }
        

    </script>
</body>
</html>