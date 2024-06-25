<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee Details</title>
    <style>
        *{
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: 'Poppins',sans-serif;

}

body{
    display: flex;
    height: 100vh;
    justify-content: center;
    align-items: center;
    padding: 10px;
    background: linear-gradient(135deg, #71b7e6, #69f58c);
}
.container{
    max-width: 700px;
    width: 100%;
    background: #fff;
    padding: 25px 30px;
    border-radius: 5px;
}
.container .title{
    font-size: 25px;
    font-weight: 500;
    position: relative;
}
.container .title::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 30px;
    background: linear-gradient(135deg, #71b7e6, #69f58c);

}
.container form .user-details{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 20px 0 12px 0;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: calc(100% / 2 - 20px);
}
.user-details .input-box .details{

    display: block;
  font-weight: 500;
  margin-bottom: 5px;  
}
.user-details .input-box input{
    height: 45px;
    width: 100%;
    outline: none;
    border-radius: 5px;
    border: 1px solid #ccc;
    padding-left: 15px;
    font-size: 16px;
    border-bottom-width: 2px;
    transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
border-color: #69f58c;
}
form .gender-details .gender-title{
    font-size: 20px;
    font-weight: 500;
}
form .gender-details .category{
    display: flex;
    width: 80%;
    margin: 14px 0;
    justify-content: space-between;
}
.gender-details .category label{
    display: flex;
    align-items: center;
}
.gender-details .category .dot{
    height: 18px;
    width: 18px;
    background: #d9d9d9;
    border-radius: 50%;
    margin-right: 10px;
    border: 3px solid transparent;
    transition: all 0.3s ease;
}
#dot-1:checked ~ .category label .one,
#dot-2:checked ~ .category label .two,
#dot-3:checked ~ .category label .three{
    border-color: #d9d9d9;
    background: #69f58c;
}
form input[type="radio"]{
    display: none;
}
form .button{
    height: 45px;
    margin: 45px 0;
}
form .button input{
    height: 100%;
    width: 100%;
    outline: none;
    color: #fff;
    border: none;
    font-size: 18px;
    font-weight: 500;
    border-radius: 5px;
    letter-spacing: 1px;
    background: linear-gradient(135deg, #71b7e6, #69f58c);
}
form .button input:hover{
    background: linear-gradient(-135deg, #71b7e6, #69f58c);
}
@media (max-width: 584px){
    .container{
        max-width: 100%;
    }
    form .user-details .input-box{
        margin-bottom: 15px;
        width: 100%;
    }
    form .gender-details .category{
        width: 100%;
}
.container form .user-details{
   max-height: 300px;
   overflow-y:scroll; 
}
.user-details::-webkit-scrollbar{
    width: 0;
}
}
    </style>
</head>
<body>
    <div class="container">
        <div class="title">Edit Form Details</div>
        <form action="{{ route('update.detailform', $detailform->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            

            <div class="user-details">
                <div class="input-box">
                    <span class="details">User Name</span>
                    <input name="username" type="text" placeholder="Enter your username" value="{{ $detailform->username }}" required>
                    
                    @error('username')
                    <p style="color: indianred;margin-top: 5px">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="input-box">
                    <span class="details">Email</span>
                    <input name="email" type="text" placeholder="Enter your Email" value="{{ $detailform->email }}" required>
                    @error('email')
                    <p style="color: indianred;margin-top: 5px">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input-box">
                    <span class="details">Gender</span>
                    <input name="gender" type="text" placeholder="Enter your gender" value="{{ $detailform->gender }}" required>
                    @error('gender')
                    <p style="color: indianred;margin-top: 5px">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input-box">
                    <span class="details">Address</span>
                    <input name="address" type="text" placeholder="Enter your address" value="{{ $detailform->address }}" required>
                    @error('address')
                    <p style="color: indianred;margin-top: 5px">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input name="password" type="text" placeholder="Enter your password" value="{{ $detailform->password }}" required>
                    @error('password')
                    <p style="color: indianred;margin-top: 5px">{{ $message }}</p>
                    @enderror
                </div>
                
                
            </div>
            
            <div class="button">
                <input type="submit" value="Update">
            </div>
        </form>    
    </div>
</body>
</html>
