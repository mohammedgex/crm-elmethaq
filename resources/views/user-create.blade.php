@extends('adminlte::page')

@section('title', 'إدارة بيانات العمال')

@section('content_header')
    <h1>إدارة بيانات العمال</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#personalInfo">التفاصيل الشخصية</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#passportDetails">تفاصيل جواز السفر</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#attachments">المرفقات</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#payments">المدفوعات</a></li>
        </ul>

        <div class="tab-content mt-3">
            <!-- التفاصيل الشخصية -->
            <div id="personalInfo" class="tab-pane fade show active">
                <div class="form-group">
                    <label>الاسم الكامل</label>
                    <input type="text" class="form-control" placeholder="أدخل الاسم الكامل">
                </div>
                <div class="form-group">
                    <label>رقم الهاتف</label>
                    <input type="text" class="form-control" placeholder="أدخل رقم الهاتف">
                </div>
            </div>

            <!-- تفاصيل جواز السفر -->
            <div id="passportDetails" class="tab-pane fade">
                <div class="form-group">
                    <label>رقم الجواز</label>
                    <input type="text" class="form-control" placeholder="أدخل رقم الجواز">
                </div>
                <div class="form-group">
                    <label>تاريخ الإصدار</label>
                    <input type="date" class="form-control">
                </div>
            </div>

            <!-- المرفقات -->
            <div id="attachments" class="tab-pane fade">
                <h5>إضافة مرفقات</h5>
                <div class="form-group">
                    <label>عنوان المرفق</label>
                    <input type="text" class="form-control" id="attachmentTitle" placeholder="مثال: صورة الجواز">
                </div>
                <div class="form-group">
                    <label>رفع المرفق</label>
                    <input type="file" class="form-control" id="attachmentFile">
                </div>
                <button type="button" class="btn btn-success btn-sm" id="addAttachment">إضافة مرفق</button>

                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th>عنوان المرفق</th>
                            <th>المرفق</th>
                            <th>الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody id="attachmentTable">
                    </tbody>
                </table>
            </div>

            <!-- المدفوعات -->
            <div id="payments" class="tab-pane fade">
                <h5>إضافة مدفوعات</h5>
                <div class="form-group">
                    <label>عنوان الدفع</label>
                    <input type="text" class="form-control" id="paymentTitle" placeholder="مثال: دفعة أولى">
                </div>
                <div class="form-group">
                    <label>قيمة الدفع</label>
                    <input type="number" class="form-control" id="paymentAmount" placeholder="أدخل المبلغ">
                </div>
                <button type="button" class="btn btn-info btn-sm" id="addPayment">إضافة دفعة</button>

                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th>عنوان الدفع</th>
                            <th>المبلغ</th>
                            <th>الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody id="paymentTable">
                    </tbody>
                </table>
            </div>
        </div>

        <button class="btn btn-primary btn-block mt-3">حفظ البيانات</button>
    </div>
</div>
@stop

@section('js')
<script>
    $(document).ready(function () {
        // إضافة مرفق جديد
        $("#addAttachment").click(function () {
            var title = $("#attachmentTitle").val();
            var fileInput = $("#attachmentFile")[0];

            if (title.trim() === "" || fileInput.files.length === 0) {
                alert("يرجى إدخال عنوان المرفق واختيار ملف.");
                return;
            }

            var file = fileInput.files[0];
            var fileName = file.name;

            var newRow = `
                <tr>
                    <td>${title}</td>
                    <td>${fileName}</td>
                    <td>
                        <button class="btn btn-danger btn-sm removeAttachment"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
            `;

            $("#attachmentTable").append(newRow);
            $("#attachmentTitle").val("");
            $("#attachmentFile").val("");
        });

        // حذف مرفق
        $(document).on("click", ".removeAttachment", function () {
            $(this).closest("tr").remove();
        });

        // إضافة دفعة جديدة
        $("#addPayment").click(function () {
            var title = $("#paymentTitle").val();
            var amount = $("#paymentAmount").val();

            if (title.trim() === "" || amount.trim() === "") {
                alert("يرجى إدخال عنوان الدفع والمبلغ.");
                return;
            }

            var newRow = `
                <tr>
                    <td>${title}</td>
                    <td>${amount}</td>
                    <td>
                        <button class="btn btn-danger btn-sm removePayment"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
            `;

            $("#paymentTable").append(newRow);
            $("#paymentTitle").val("");
            $("#paymentAmount").val("");
        });

        // حذف دفعة
        $(document).on("click", ".removePayment", function () {
            $(this).closest("tr").remove();
        });
    });
</script>
@stop