@extends('adminlte::page')

@section('title', 'لوحة التحكم')

@section('content_header')
    <h1 style="font-weight:bold; text-align:right;">استخراج بيانات MRZ</h1>
@stop

@section('content')
<div class="table-wrapper">
    <!-- MRZ Input Form -->
    <div class="form-group">
        <label for="mrz_input">أدخل بيانات MRZ:</label>
        <textarea id="mrz_input" class="form-control" rows="2" placeholder="ضع هنا منطقة القراءة الآلية من جواز السفر"></textarea>
    </div>
    <button class="btn btn-primary" onclick="extractMRZData()">استخراج البيانات</button>
    
    <!-- Extracted Passport Data -->
    <div class="form-group">
        <label for="passport_number">رقم الجواز:</label>
        <input type="text" id="passport_number" class="form-control" readonly>
    </div>
    <div class="form-group">
        <label for="full_name">الاسم الكامل:</label>
        <input type="text" id="full_name" class="form-control" readonly>
    </div>
    <div class="form-group">
        <label for="nationality">الجنسية:</label>
        <input type="text" id="nationality" class="form-control" readonly>
    </div>
    <div class="form-group">
        <label for="dob">تاريخ الميلاد:</label>
        <input type="text" id="dob" class="form-control" readonly>
    </div>
    <div class="form-group">
        <label for="expiry_date">تاريخ انتهاء الصلاحية:</label>
        <input type="text" id="expiry_date" class="form-control" readonly>
    </div>
    
</div>     


@stop

@section('css')
<style>
    body {
        direction: rtl;
        text-align: right;
        color: #566787;
        background: #f5f5f5;
        font-family: 'Tajawal';
    }
    .table-wrapper {
        width: 850px;
        background: #fff;
        padding: 20px 30px 5px;
        margin: 30px auto;
        box-shadow: 0 0 1px 0 rgba(0,0,0,.25);
    }
    .table-title {
        border-bottom: 1px solid #e9e9e9;
        padding-bottom: 15px;
        margin-bottom: 5px;
        background: rgb(0, 50, 74);
        margin: -20px -31px 10px;
        padding: 15px 30px;
        color: #fff;
    }
    .table-title h2 {
        margin: 2px 0 0;
        font-size: 24px;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
        padding: 12px 15px;
        vertical-align: middle;
        text-align: center;
    }
    table.table-striped tbody tr:nth-of-type(odd) {
        background-color: #fcfcfc;
    }
    table.table-striped.table-hover tbody tr:hover {
        background: #f5f5f5;
    }
    table.table td a {
        color: #2196f3;
    }
    table.table td .btn.manage {
        padding: 2px 10px;
        background: #37BC9B;
        color: #fff;
        border-radius: 2px;
    }
    table.table td .btn.manage:hover {
        background: #2e9c81;        
    }
</style>
@stop

@section('js')
<script>
function extractMRZData() {
    // let mrz = "P<EGYFARGHAL<<OMAR<MOHAMED<MOHAMED<<<<<<<<<<\nA240842345EGY8702193M2602084<<<<<<<<04";
    let mrz =document.getElementById("mrz_input").value;
    let lines = mrz.split("\n");
    if (lines.length < 2) {
        alert("يرجى إدخال MRZ صالح");
        return;
    }
    let passportNumber = lines[1].substring(0, 9).replace(/</g, "");  // Passport Number
    let nationality = lines[1].substring(10, 13).replace(/</g, "");   // Nationality
    // Extract raw date strings from MRZ
let rawBirthDate = lines[1].substring(13, 19).replace(/</g, ""); // YYMMDD
let rawExpiryDate = lines[1].substring(21, 27).replace(/</g, ""); // YYMMDD

// Determine the century for birth date
let birthYear = parseInt(rawBirthDate.substring(0, 2), 10);
birthYear = birthYear >= 50 ? 1900 + birthYear : 2000 + birthYear; // If >= 50, assume 1900s, else 2000s
let birthMonth = rawBirthDate.substring(2, 4);
let birthDay = rawBirthDate.substring(4, 6);
let birthDate = `${birthDay}/${birthMonth}/${birthYear}`; // Format DD/MM/YYYY

// Determine the century for expiry date (always 2000+)
let expiryYear = 2000 + parseInt(rawExpiryDate.substring(0, 2), 10);
let expiryMonth = rawExpiryDate.substring(2, 4);
let expiryDay = rawExpiryDate.substring(4, 6);
let expiryDate = `${expiryDay}/${expiryMonth}/${expiryYear}`; // Format DD/MM/YYYY
    let nameParts = lines[0].substring(5).split("<<"); // Extract surname and given names
    let surname = nameParts[0].replace(/</g, " ");
    let givenNames = nameParts[1].replace(/</g, " ");
    let fullName = surname + " " + givenNames;

    // let passportNumber = lines[0].substring(44, 53).replace(/</g, "");
    // let nationality = lines[0].substring(54, 57).replace(/</g, "");
    // let birthDate = lines[1].substring(13, 19).replace(/</g, "");
    // let expiryDate = lines[1].substring(21, 27).replace(/</g, "");
    // let nameParts = lines[1].substring(60).split("<<");
    // let fullName = nameParts.reverse().join(" ").replace(/</g, " ");
    
    document.getElementById("passport_number").value = passportNumber;
    document.getElementById("full_name").value = fullName;
    document.getElementById("nationality").value = nationality;
    document.getElementById("dob").value = birthDate;
    document.getElementById("expiry_date").value = expiryDate;
}
</script>
@stop