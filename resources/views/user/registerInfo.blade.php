@extends('layout')
@section('title', 'The CBL | Dashboard')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Register Info</title>
    <link rel="stylesheet" href={{url('css/bootstrap.css')}}>
    <link rel="stylesheet" href={{url('css/layout.css')}}>
    <link rel="stylesheet" href={{url('css/tournamentRegister.css')}}>
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!--<script   src={{url('js/bootstrap.bundle.js')}}></script>-->
    </head>
<style>
/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
     
</style>
<body>
    
    <div class="container">
    <form name= "playerReg" action="{{route('user.store')}}" method='post'>
    <h1 class="text-center underLine">Player Registration</h1>
    <h2 class="text-center ">Basic Information</h2>
    @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
    @csrf
    <div class="row g-sm-4">
        <div class="col-sm-4 mt-3">
            <label for="p_firstName" class="form-label">First Name * </label>
            <input type="text" name="p_firstName" class="form-control" placeholder="Enter First Name" required/>
        </div>    
        <div class="col-sm-4 mt-3">
            <label for="p_middleName" class="form-label">Middle Name </label>
            <input type="text" name="p_middleName" class="form-control" placeholder="Enter Middle Name" required/>
        </div>
        <div class="col-sm-4 mt-3">    
            <label for="p_lastName" class="form-label">Last Name *</label>
            <input type="text" name="p_lastName" class="form-control" placeholder="Enter Last Name" required/>
        </div>
    </div>

    <div class="row g-sm-4 mt-2">
            <div class="col-sm-4 mt-3">
                <label for="p_whatsapp_num" class="form-label">Mobile No.(WhatsApp) * </label>
                <input type="number" name="p_whatsapp_num" class="form-control" placeholder="Enter Mobile Number" required/>
            </div>
            
            <div class="col-sm-4 mt-3">    
                <label for="p_alt_num" class="form-label">Alternative No.(Calling)</label>
                <input type="number" name="p_alt_num" class="form-control" placeholder="Enter Alternative No."/>
            </div>
            <div class="col-sm-4 mt-3">    
                <label for="p_email" class="form-label">Email </label>
                <input type="email" name="p_email" class="form-control" placeholder="Enter Email"/>
            </div>
        </div>

        <div class="row g-sm-4 mt-2">
            <div class="col-sm-4 mt-3">
                <label for="dateOfbirth" class="form-label">Date Of Birth *</label>
                <input type="date" name="dateOfbirth" class="form-control" placeholder="Enter Date of Birth" required/>
            </div>
            <div class="col-sm-4 mt-3">
                <label for="p_gender" class="form-label">Gender *</label>   
                <select name="p_gender" class="form-control" required>
                    <option value="none" selected>Select Gender</option>  
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="col-sm-4 mt-3">
                <label for="p_pincode" class="form-label">Pincode *</label>
                <input type="text" name="p_pincode" class="form-control" placeholder="Enter Pincode" required/>
            </div>            
        </div>
        <div class="row g-sm-4 mt-2">
            <div class="col-sm-4 mt-3"> 
                <label for="p_city" class="form-label">City *</label>
                    <select name="p_city" class="form-control">
                        <option value="none" selected>Select City</option>
                        <option value="ahmedabad">Ahmedabad</option>
                        <option value="vadodara">Vadodara</option>
                        <option value="Surat">Surat</option>
                    </select>
                
            </div>
            <div class="col-sm-4 mt-3">
                <label for="p_state" class="form-label">State *</label>
                    <select name="p_state" class="form-control">
                        <option value="none" selected>Select State</option>
                        <option value="gujarat">Gujarat</option>
                        <option value="mumbai">Mumbai</option>
                        <option value="delhi">Delhi</option>
                    </select>
                
            </div>
            <div class="col-sm-4 mt-3">    
                <label for="p_country" class="form-label">Country *</label>
                    <select name="p_country" class="form-control">
                        <option value="none" selected>Select Country</option>
                        <option value="in">India</option>
                        <option value="en">England</option>
                        <option value="au">Europe</option>
                    </select>
            </div>
        </div>
        <div class="row justify-content-between mt-3 mb-2" >
            <div class=" row g-3 justify-content-between">
                <div class=" col-4">
                    <button type="reset" class="btn btn-light Btn col-sm-6">Reset</button>
                </div>
                <div class=" col-4"></div>
                <div class=" col-4 ">
                    <button type="submit" class="btn btn-light Btn col-sm-6">Submit</button>
                </div>
            </div>
        </div>
    </div> 
    </form>
    </div> 
</body>
</html>
@endsection